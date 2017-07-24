<?php

namespace App\Http\Controllers;

use App\Events;
use App\EventsParticipants;
use App\StatusParticipant;
use App\User;
use Carbon\Carbon;
use Doctrine\DBAL\Query\QueryBuilder;
use Illuminate\Http\Request;

class EventController extends Controller
{
    private $intervalUpdate = 60;


    public function index(Request $request)
    {
        $pageNumber = $request->input('pageNumber', 1);
        $countMsg = $request->input('count', 25);

        $eventsUser = EventsParticipants::whereIdUser(\Auth::id())
            ->with(['event'])
            ->forPage($pageNumber, $countMsg)
//            ->with(['ownerProfile'])
            ->get();


        return response()->json([$eventsUser], 200);
    }


    /*
     * types
     * 0 - race - преодолеть дистанцию
     * 1 - marathon - кто больше преодолеет за n времени
     *
     *
     *
     * last 1 new 11 -  достичь точки n
     */

    public function makeEvent(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string',
            'type' => 'required|in:public,private',
            'target' => 'required|integer|min:0|max:10',
            'target_description' => 'required|json',
            'data_start' => 'required|date',
            'data_end' => 'nullable|date',
            'description' => 'required'
        ]);

        $target_description = json_decode($request->input('target_description'));

        if (!isset($target_description->target)) {
            return response()->json(['target in target_description not set'], 422);
        }

        $status_TD = $this->target_description($target_description->target, $request->input('target'));

        if (!$status_TD) return response()->json(['Type does not match the description'], 422);

        $newEvent = new Events;
        $newEvent->name = $request['name'];
        $newEvent->type_owner = 'App\User';
        $newEvent->owner = \Auth::id();
        $newEvent->type = $request['type'];
        $newEvent->target = $request['target'];
        $newEvent->target_description = $request['target_description'];
        $newEvent->data_start = $request['data_start'];
        if (isset($request['data_end'])) {
            $newEvent->data_end = $request['data_end'];
        }
        $newEvent->description = $request['description'];
        $newEvent->status = 0;
        $newEvent->save();

        $newParticipant = new EventsParticipants;
        $newParticipant->id_event = $newEvent->id;
        $newParticipant->id_user = \Auth::id();
        $newParticipant->status = 1;

        $newParticipant->save();

        return response()->json([$newEvent], 200);
    }

    public function openEvent($id)
    {
        $event = Events::with(['eventsParticipants', 'ownerProfile'])->whereId($id)->first();
        if ($event == null) {
            return response()->json([], 422);
        }

        $user = EventsParticipants::whereIdUser(\Auth::id())->whereIdEvent($id)->first();
        if ($event->type == 'private') {
            if ($user == null || $user['status'] == 3) {
                return response()->json([], 422);
            }
        }

        $usersId = [];
        foreach ($event->eventsParticipants as $user) {
            $usersId[] = $user->id_user;
        }
        $users = User::whereIn('id', $usersId)->get();


        return response()->json(['event' => $event, 'users' => $users], 200);
    }

    public function connectToEvent($id)
    {
        $event = Events::whereType('public')->find($id);

        if ($event == null) {
            return response()->json([], 404);
        }
        $participant = EventsParticipants::whereIdEvent($event->id)->whereIdUser(\Auth::id())->first();

        if ($participant != null || $event->status != 0) {
            return response()->json([], 422);
        }

        $newParticipant = new EventsParticipants;
        $newParticipant->id_event = $event->id;
        $newParticipant->id_user = \Auth::id();
        $newParticipant->status = 1;

        $newParticipant->save();

        return response()->json([$newParticipant], 200);

    }

    public function inviteUser(Request $request)
    {
        $this->validate($request, [
            'id_user' => 'required|integer|min:1',
            'id_event' => 'required|integer|min:1'
        ]);

        $user = EventsParticipants::whereIdEvent($request->input('id_event'))->whereIdUser(\Auth::id())->first();
        if ($user == null || $user['status'] == 0 || $user['status'] == 2) {
            return response()->json([], 422);
        }

        $new_user = EventsParticipants::whereIdEvent($request->input('id_event'))->whereIdUser($request->input('id_user'))->first();
        if ($new_user != null) {
            return response()->json([$new_user], 422);
        }
        $new_user = new EventsParticipants;
        $new_user->id_user = $request->input('id_user');
        $new_user->id_event = $request->input('id_event');
        $new_user->status = 0;
        $new_user->save();
        return response()->json([$new_user], 200);
    }

    public function acceptInvite(Request $request)
    {
        $this->validate($request, [
            'id' => 'required|integer|min:1'
        ]);

        $invite = EventsParticipants::whereId($request->input('id'))->whereIdUser(\Auth::id())->whereStatus(0)->first();
        if ($invite != null) {
            $invite->status = 1;
            $invite->save();
        } else {
            return response()->json([], 422);
        }
        return response()->json([$invite], 200);
    }

    public function deniedInvite(Request $request)
    {
        $this->validate($request, [
            'id' => 'required|integer|min:1'
        ]);

        $invite = EventsParticipants::whereId($request->input('id'))->whereIdUser(\Auth::id())->whereStatus(0)->first();
        if ($invite != null) {
            $invite->status = 2;
            $invite->save();
        } else {
            return response()->json([], 422);
        }
        return response()->json([$invite], 200);
    }

    public function leaveEvent($id)
    {
        $userStatus = EventsParticipants::whereIdEvent($id)->whereIdUser(\Auth::id())->where('status', '<>', 3)->where('status', '<>', 2)->first();

        if ($userStatus == null) {
            return response()->json([], 404);
        }

        $userStatus->status = 2;
        $userStatus->save();

        return response()->json([$userStatus], 200);
    }

    public function comeBack($id)
    {
        $winner = EventsParticipants::whereStatus(5)->first();
        if ($winner != null) {
            return response()->json(['The winner is set'], 422);
        }

        $userStatus = EventsParticipants::whereIdEvent($id)->whereIdUser(\Auth::id())->where('status', 2)->first();

        if ($userStatus == null) {
            return response()->json([], 404);
        }

        $userStatus->status = 1;
        $userStatus->save();
        return response()->json([$userStatus], 200);
    }


    public function searchEvent(Request $request)
    {
        $this->validate($request, [
            'id' => 'nullable|integer|min:1',
            'target' => 'nullable|integer|min:1|max:10',
            'pageNumber' => 'nullable|integer|min:1',
            'dataStart' => 'nullable|date',
            'dataEnd' => 'nullable|date'
        ]);
        $id = $request->input('id', null);
        $target = $request->input('target', null);
        $dataStart = $request->input('dataStart', null);
        $dataEnd = $request->input('dataEnd', null);
        $pageNumber = $request->input('pageNumber', 1);

        $events = Events::whereType('public')
            ->when($id !== null, function ($query) use ($id) {
                return $query->where('id', $id);
            })
            ->when($target !== null, function ($query) use ($target) {
                return $query->where('target', $target);
            })
            ->when($dataStart !== null, function ($query) use ($dataStart) {
                return $query->where('data_start', $dataStart);
            })
            ->when($dataEnd !== null, function ($query) use ($dataEnd) {
                return $query->where('data_end', $dataEnd);
            })
            ->with(['ownerProfile'])
            ->forPage($pageNumber, 25)
            ->get();

        return response()->json([$events], 200);
    }

    public function editEvent(Request $request)
    {
        $this->validate($request, [
            'id' => 'required|integer|min:1',
            'name' => 'nullable|string',
            'type' => 'nullable|in:public,private',
            'target' => 'nullable|integer|min:0|max:10',
            'target_description' => 'nullable|json',
            'data_start' => 'nullable|date',
            'data_end' => 'nullable|date',
            'description' => 'nullable'
        ]);

        $event = Events::whereOwner(\Auth::id())->find($request->input('id'));

        if ($event == null) {
            return response()->json([], 422);
        }

        $timeStart = strtotime($event->data_start);
        if (time() > $timeStart) {
            return response()->json([], 422);
        }

        if (isset($request['name']) && $request['name'] != null) {
            $event->name = $request['name'];
        }


        if (isset($request['type']) && $request['type'] != null) {
            $event->type = $request['type'];
        }

        if (isset($request['target']) && $request['target'] != null && isset($request['target_description']) && $request['target_description'] != null) {

            $target_description = json_decode($request->input('target_description'));

            $status_TD = $this->target_description($target_description->target, $request->input('target'));

            if ($status_TD) {
                $event->target = $request['target'];
            }
        }

        if (isset($request['target_description']) && $request['target_description'] != null) {
            $target_description = json_decode($request->input('target_description'));

            $status_TD = $this->target_description($target_description->target, $event->target);

            if ($status_TD) $event->target_description = $request['target_description'];
        }

        if (isset($request['data_start']) && $request['data_start'] != null) {
            $event->data_start = $request['data_start'];
        }

        if (isset($request['data_end']) && $request['data_end'] != null) {
            $event->data_end = $request['data_end'];
        }

        if (isset($request['description']) && $request['description'] != null) {
            $event->description = $request['description'];
        }

        $event->save();

        return response()->json($event, 200);
    }

    public function deleteEvent($id)
    {

        $event = Events::whereOwner(\Auth::id())->find($id);

        if ($event == null) {
            return response()->json([], 404);
        }

        $event->eventsParticipants()->delete();
        $event->delete();

        return response()->json([], 200);
    }


    private function nowStatusParticipant($id)
    {
        return StatusParticipant::whereIdParticipant($id)->orderBy('id', 'desc')->first();
    }

    private function historyStatusParticipant($id, $pageNumber, $countInPage)
    {
        return StatusParticipant::whereIdParticipant($id)->forPage($pageNumber, $countInPage)->get();
    }


    public function updateStatus(Request $request)
    {
        $this->validate($request, [
            'id' => 'required|integer|min:1',
            'value' => 'required|json'
        ]);
        $value = json_decode($request->input('value'));

        $participant = EventsParticipants::whereIdUser(\Auth::id())->find($request->input('id'));
        if ($participant == null) return response()->json(['event not found'], 404);

        $event = $participant->event()->first();
        if ($event == null) return response()->json(['event not found'], 404);


        if (strtotime($participant['event']['data_start']) > time()) {
            return response()->json(['data_start'], 422);
        }
        if ($participant['event']['data_end'] != null) {
            if (strtotime($participant['event']['data_end']) < time()) {
                return response()->json(['data_end'], 422);
            }
        }
        if ($participant->status != 1) {
            return response()->json(['status != 1'], 422);
        }
        if (time() - $participant->updated_at->timestamp < $this->intervalUpdate) {
            return response()->json(['too often'], 422);
        }

        $target_event = json_decode($event->target_description);
        // race
        if (isset($value->race) && $this->target_description($value->race, $event->target)) {
            $nowStatus = $this->nowStatusParticipant($participant->id);
            if ($nowStatus != null) {
                $nowStatus = json_decode(
                    $nowStatus->value
                );
                if ($nowStatus->value < $target_event->target->value) {
                    if ($nowStatus->value >= $value->race->value) {
                        return response()->json(['new status can not be true'], 422);
                    }
                }
            }


            $status = new StatusParticipant();
            $status->id_participant = $participant->id;
            $status->value = json_encode(['value' => $value->race->value]);


            $participant->updated_at = Carbon::now();

            if (($target_event->target->value) <= ($value->race->value)) {

                $participantsR = EventsParticipants::whereIdEvent($event->id)->whereStatus(1);
                $participantsR->update(['status' => 4]);

                $participant->status = 5;

                $event->status = 1;

                $status->save();
                $participant->save();
                $event->save();

                return response()->json(['updated, you win'], 200);
            }

            $status->save();
            $participant->save();

            return response()->json(['updated'], 200);
        }

        // marathon
        if (isset($value->marathon) && $this->target_description($value->marathon, $event->target)) {
            $nowStatus = json_decode($this->nowStatusParticipant($participant->id)->value);
            if ($nowStatus != null && $nowStatus->value > $value->marathon->value) {
                return response()->json(['new status can not be true'], 422);
            }

            $status = new StatusParticipant();
            $status->id_participant = $participant->id;
            $status->value = json_encode(['value' => $value->marathon->value]);
            $status->save();

            $participant->updated_at = Carbon::now();
            $participant->save();

            return response()->json(['updated'], 200);
        }


        return response()->json(['undefined error', $value], 422);
    }

    public function historyParticipant($id, Request $request)
    {
        $this->validate($request, [
            'page' => 'integer|min:1',
            'count_in_page' => 'integer|min:1|max:1000'
        ]);

        $pageNumber = $request->input('page', 1);
        $countInPage = $request->input('count_in_page', 25);

        $participant = EventsParticipants::find($id);
        if ($participant == null) return response()->json([], 422);

        $event = $participant->event()->first();
        if ($event == null) return response()->json([], 422);

        if ($event->type == 'private') {
            $user = EventsParticipants::whereIdEvent($event->id)->whereIdUser(\Auth::id())->first();
            if ($user == null || $user->status == 0 || $user->status == 2 || $user->status == 3) {
                return response()->json([], 422);
            }
        }

        $history = $this->historyStatusParticipant($id, $pageNumber, $countInPage);
        return response()->json(['history' => $history], 200);
    }

    public function statusParticipant($id)
    {
        $participant = EventsParticipants::find($id);
        if ($participant == null) return response()->json([], 422);

        $event = $participant->event()->first();
        if ($event == null) return response()->json([], 422);

        if ($event->type == 'private') {
            $user = EventsParticipants::whereIdEvent($event->id)->whereIdUser(\Auth::id())->first();
            if ($user == null || $user->status == 0 || $user->status == 2 || $user->status == 3) {
                return response()->json([], 422);
            }
        }

        $status = $this->nowStatusParticipant($id);
        return response()->json(['status' => $status], 200);
    }

    public function identifyWinner($id)
    {
        $event = Events::whereOwner(\Auth::id())->find($id);

        if ($event == null) {
            return response()->json([], 422);
        }

        $users = EventsParticipants::whereIdEvent($id)->whereStatus(1)->get();

        $users_id = [];
        foreach ($users as $user) {
            $users_id[] = $user->id;
        }

        $status_users = StatusParticipant::whereNotExists(function (QueryBuilder $query) {
            $query->select('*')
                ->from('statusesParticipants as s2')
                ->whereRaw('statusesParticipants.id_participant = s2.id_participant')
                ->whereRaw('statusesParticipants.created_at < s2.created_at');
        })
            ->whereIn('id_participant', $users_id)
            ->orderBy('created_at', 'desc')
            ->get();

        if ($event->target == 0 || $event->target == 1) {

            $winner = $status_users->first();
            foreach ($status_users as $user) {
                $value = json_decode($user->value)->value;
                if (json_decode($winner->value)->value < $value) {
                    $winner = $user;
                }
            }

            return response()->json([$status_users, $winner], 200);
        }
        return response()->json();
    }

    public function setWinner($id, Request $request)
    {
        $this->validate($request, [
            'id_winner' => 'int|min:1'
        ]);

        $event = Events::whereOwner(\Auth::id())->find($id);

        if ($event == null) {
            return response()->json(['you not owner'], 422);
        }
        if ($event->status != 0) {
            return response()->json(['Competition is not active'], 422);
        }

        $participantsR = EventsParticipants::whereIdEvent($id)->whereStatus(1);

        $winner = EventsParticipants::whereIdEvent($id)->whereStatus(1)->find($request->input('id_winner'));
        if ($winner == null) {
            return response()->json(['Member not found'], 422);
        }

        $participantsR->update(['status' => 4]);

        $winner->status = 5;
        $winner->save();

        $event->status = 1;
        $event->save();


        return response()->json([$winner], 200);
    }


    private function target_description($target, $type)
    {

        if ($type === 0 && isset($target->value) && is_int($target->value)) {
            return true;
        }

        if ($type === 1 && isset($target)) {
            return true;
        }


        if ($type === 11 && isset($target['longitude']) && isset($target['latitude']) && is_float($target['longitude']) && is_float($target['latitude'])) {
            return true;
        }

        return false;
    }

    private function getDistance($lat1, $lon1, $lat2, $lon2)
    {
        $lat1 *= M_PI / 180;
        $lat2 *= M_PI / 180;
        $lon1 *= M_PI / 180;
        $lon2 *= M_PI / 180;

        $d_lon = $lon1 - $lon2;

        $slat1 = sin($lat1);
        $slat2 = sin($lat2);
        $clat1 = cos($lat1);
        $clat2 = cos($lat2);
        $sdelt = sin($d_lon);
        $cdelt = cos($d_lon);

        $y = pow($clat2 * $sdelt, 2) + pow($clat1 * $slat2 - $slat1 * $clat2 * $cdelt, 2);
        $x = $slat1 * $slat2 + $clat1 * $clat2 * $cdelt;

        return atan2(sqrt($y), $x) * 6372795;
    }
}

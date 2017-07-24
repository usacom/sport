<?php

namespace App\Http\Controllers;

use App\EventsParticipants;
use App\TestGPS;
use App\User;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function getActive()
    {

        $subscribes = \Auth::user()->getPendingFriendships()->where('recipient_id', \Auth::id());
        $usersID = [];
        foreach ($subscribes as $subscribe) {
            array_push($usersID, $subscribe->sender_id);
        }
        $users = User::whereIn('id', $usersID)->get();


        $inviteInEvent = EventsParticipants::whereIdUser(\Auth::id())
            ->whereStatus(0)
            ->with(['event'])
            ->get();

        return response()->json([
            'subscribes' => [
                'list' => $subscribes,
                'users' => $users
            ],
            'inviteEvent' => $inviteInEvent
        ], 200);
    }

    public static function array_utf8_encode($dat)
    {
        if (is_string($dat))
            return utf8_encode($dat);
        if (!is_array($dat))
            return $dat;
        $ret = array();
        foreach ($dat as $i => $d)
            $ret[$i] = self::array_utf8_encode($d);
        return $ret;
    }

    public function newPointGPS(Request $request)
    {



        $points = TestGPS::get();
        return response()->json($points, 200, ['Content-type' => 'application/json; charset=utf-8'], JSON_UNESCAPED_UNICODE);
    }

    public function testGPS()
    {

        return response()->json([], 200);
    }
}

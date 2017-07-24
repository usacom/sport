<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class FriendsController extends Controller
{
    public function getFriends(Request $request)
    {
        $id = $request->input('id', 0);
        if ($id !== 0) {
            $user = User::find($id);
            return response()->json($user->getFriends(), 200);
        }
        $friends = \Auth::user()->getFriends();
        return response()->json($friends, 200);
    }

    /*
     * список заявок в друзья от тебя
     * выводит 20 человек на страницу
     * может принимать numberPage
     */
    public function getRequestPending(Request $request)
    {
        $numberPage = $request->input('numberPage', 1);
        $type = $request->input('type', 0);
        if ($type == 0) {
            $friend = \Auth::user()->getPendingFriendships()
                ->where('sender_id', \Auth::id())
                ->forPage($numberPage, 10);
        } else if ($type == 2) {
            $friend = \Auth::user()->getDeniedFriendships()
                ->where('sender_id', \Auth::id())
                ->forPage($numberPage, 10);
        } else {
            return response()->json(['invalid type'], 422);
        }

        $friends = [];
        foreach ($friend as $item) {
            array_push($friends, $item->sender_id);
        }

        return response()->json(User::whereIn('id', $friends)->get(), 200);
    }


    /*
     * список заявок в друзья !ТЕБЕ!
     * выводит 20 человек на страницу
     * может принимать numberPage
     */
    public function getSubscribes(Request $request)
    {
        $numberPage = $request->input('numberPage', 1);
        $type = $request->input('type', 0);
        if ($type == 0) {
            $friend = \Auth::user()->getPendingFriendships()
                ->where('recipient_id', \Auth::id())
                ->forPage($numberPage, 10);
        } else if ($type == 2) {
            $friend = \Auth::user()->getDeniedFriendships()
                ->where('recipient_id', \Auth::id())
                ->forPage($numberPage, 10);
        } else {
            return response()->json(['invalid type'], 422);
        }

        $friends = [];
        foreach ($friend as $item) {
            array_push($friends, $item->sender_id);
        }

        return response()->json(User::whereIn('id', $friends)->get(), 200);
    }

    /*
     * отправка заявок в друзья
     */
    public function sendRequest(Request $request)
    {
        $this->validate($request, [
            'id' => 'required|numeric|min:1',
        ]);
        $id = $request->input('id');

        $user = User::find($id);
        if ($user->id == \Auth::id()) {
            return response()->json([], 422);
        }
        $friend = \Auth::user()->getFriendship($user);
        if ($friend != null) {
            return response()->json([], 422);
        }
        return response()->json(\Auth::user()->befriend($user), 200);
    }

    /*
     * подтверждение заявки от пользователя
     * принимает id пользователя заявки
     */
    public function acceptRequest(Request $request)
    {
        $this->validate($request, [
            'id' => 'required|numeric|min:1',
        ]);

        $user = User::find($request->input('id'));
        if ($user == null) {
            return response()->json([], 422);
        }
        $friend = \Auth::user()->getPendingFriendships()
            ->where('sender_id', $user->id)
            ->where('recipient_id', \Auth::id())
            ->first();
        if (empty($friend)) {
            $friend = \Auth::user()->getDeniedFriendships()
                ->where('sender_id', $user->id)
                ->where('recipient_id', \Auth::id())
                ->first();
        }
        if (empty($friend)) {
            return response()->json(['error' => [__('error_requestFriend')]], 422);
        }

        $status = \Auth::user()->acceptFriendRequest($user);
        if ($status == 1) {
            return response()->json(['success' => [__('success_requestFriend--accept')]], 200);
        }

        return response()->json(['error' => [__('error_requestFriend')]], 422);
    }

    /*
     * отказ по заявки от пользователя
     * принимает id пользователя заявки
     */
    public function denyRequest(Request $request)
    {
        $this->validate($request, [
            'id' => 'required|numeric|min:1',
        ]);

        $user = User::find($request->input('id'));
        if ($user == null) {
            return response()->json(['error' => [__('error_requestFriend')]], 422);
        }
        $friend = \Auth::user()->getPendingFriendships()
            ->where('sender_id', $user->id)
            ->where('recipient_id', \Auth::id())
            ->where('status', 0)->first();

        if (empty($friend)) {
            return response()->json(['error' => [__('error_requestFriend')]], 422);
        }
        $status = \Auth::user()->denyFriendRequest($user);
        if ($status == 2) {
            return response()->json(['success' => [__('success_requestFriend--deny')]], 200);
        }
        return response()->json(['error' => [__('error_requestFriend')]], 422);
    }

    /*
     * удаление пользователя из друзей
     * принимает id пользователя заявки
     */
    public function removeFriend(Request $request)
    {
        $this->validate($request, [
            'id' => 'required|numeric|min:1',
        ]);

        $user = User::find($request->input('id'));
        if ($user == null) {
            return response()->json([], 422);
        }
        $friend = \Auth::user()->getFriendship($user);
        if (empty($friend)) {
            return response()->json(['error' => [__('error_requestFriend')]], 422);
        }
        $status = \Auth::user()->unfriend($user);
        return response()->json($status, 200);
    }

    public function unSubscribe(Request $request){
        $this->validate($request, [
            'id' => 'required|numeric|min:1',
        ]);

        $user = User::find($request->input('id'));
        if ($user == null) {
            return response()->json([], 422);
        }
        $friend = \Auth::user()->getFriendship($user);
        if (empty($friend)) {
            return response()->json(['error' => [__('error_requestFriend')]], 422);
        }
        $status = \Auth::user()->unfriend($user);
        return response()->json($status, 200);

    }


}

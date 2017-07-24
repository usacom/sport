<?php

namespace App\Http\Controllers;

use App\DialogList;
use App\DialogUsers;
use App\Events\MessagesEvent;
use App\User;
use Auth;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;


class MessagesController extends Controller
{

    public function dialogList()
    {
        $user = Auth::user();

        $listDialog = DialogUsers::where('idUser', $user->id)->where('status', '<>', 2)->get();
        $arrayId = [];
        foreach ($listDialog as $item) {
            array_push($arrayId, $item->idDialog);
        }
        $Dialogs = DialogList::whereIn('id', $arrayId)->orderBy('updated_at', 'desc')->get();
        return response()->json($Dialogs, 200);
    }


    public function showDialog($id, Request $request)
    {
        $pageNumber = $request->input('pageNumber', 1);
        $countMsg = $request->input('count', 25);
        $user = Auth::user();
        $statusUser = DialogUsers::where('idUser', $user->id)->where('idDialog', $id)->where('status', 0)->first();
        if ($statusUser == null) {
            return response()->json(['error' => [__('error_dialog--404')]], 404);
        }
        $dialog = DialogList::find($id);
        $dialogMessages = $dialog->messages()->orderBy('id', 'desc')->forPage($pageNumber, $countMsg)->get();
        $dialogUsers = $dialog->users()->get();
        $usersID = [];
        foreach ($dialogUsers as $item){
            array_push($usersID, $item['idUser']);
        }
        $users = User::whereIn('id',$usersID)->get();
        return response()->json(['messages' => $dialogMessages, 'users' => $users], 200);
    }

    public function listUserInDialog($id){
        $user = Auth::user();
        $statusUser = DialogUsers::where('idUser', $user->id)->where('idDialog', $id)->where('status', 0)->first();
        if ($statusUser == null) {
            return response()->json(['error' => [__('error_dialog--404')]], 404);
        }
        $dialog = DialogList::find($id);
        $dialogUsers = $dialog->users()->get();
        $usersID = [];
        foreach ($dialogUsers as $item){
            array_push($usersID, $item['idUser']);
        }
        $users = User::whereIn('id',$usersID)->get();
        return response()->json(['users' => $users], 200);
    }


    public function newMessage($id, Request $request)
    {
        $message = $request->input('message');
        if ($message == null) {
            return response()->json(['error' => [__('error_dialog--empty-message')]], 422);
        }
        $user = Auth::user();
        $statusUser = DialogUsers::where('idUser', $user->id)->where('idDialog', $id)->where('status', 0)->first();
        if ($statusUser == null) {
            return response()->json(['error' => [__('error_dialog--404')]], 404);
        }
        $dialog = DialogList::find($id);

        $newMessage = $dialog->messages()->create(
            [
                'idDialog' => $id,
                'idUser' => $user->id,
                'text' => $message,
            ]
        );

        foreach ($dialog->users()->get() as $item){
            event(new MessagesEvent($newMessage, $item->idUser));
        }

        $dialog->updated_at = Carbon::now();
        $dialog->save();
        if ($newMessage != null) {
            return response()->json(['id'=>$newMessage->id], 200);
        } else {
            return response()->json([], 422);
        }

    }


    public function newDialog(Request $request)
    {
        return response()->json([$request->input()], 422);
        $user = Auth::user();

        $name = $request->input('name', null);
        $users = array_unique($request->input('users'));
        $owner = $user->id;

        $usersProfiles = User::whereIn('id', $users)->get();

        if (count($users) != count($usersProfiles)) {
            return response()->json([], 422);
        }

        if ($name==null){
            $leth = count($usersProfiles);
            foreach ($usersProfiles as $key => $item){
                if ($leth-1!=$key){
                    $name = $name.$item['nickname'].', ';
                }else{
                    $name = $name.$item['nickname'];
                }

            }
        }

        $dialog = DialogList::create([
            'type' => 'group',
            'name' => $name,
            'owner' => $owner,
        ]);
        $dialogUsers = [];
        foreach ($usersProfiles as $key => $user) {
            $dialogUsers[] = [
                'idUser' => $user['id'],
                'idDialog' => $dialog['id'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ];
        }
        DialogUsers::insert($dialogUsers);
        return response()->json([$dialog], 200);
    }


    public function OpenOrCreate(Request $request)
    {
        $user = Auth::user();
        $this->validate($request, [
            'id' => 'numeric|min:1',
        ]);
        $opponent = User::find($request->input('id'));

        $listDialog = DialogUsers::where('idUser', $user->id)->where('status', 0)->get();

        $arrayDialogId = [];
        foreach ($listDialog as $item) {
            array_push($arrayDialogId, $item['idDialog']);
        }
        $listDialog = DialogList::whereIn('id', $arrayDialogId)->where('type', 'private')->get();
        $privateDialogUser = [];

        foreach ($listDialog as $item) {
            array_push($privateDialogUser, $item['id']);
        }

        $dialog = DialogUsers::whereIn('idDialog', $privateDialogUser)->where('idUser', $opponent->id)->first();

        if ($dialog != null) {
            return response()->json([$dialog], 200);
        }
        $name = "$user->nickname - $opponent->nickname";

        $dialog = DialogList::create([
            'type' => "private",
            'name' => $name,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        $dialogUsers = [];
        array_push($dialogUsers, [
            'idUser' => $user->id,
            'idDialog' => $dialog['id'],
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        array_push($dialogUsers, [
            'idUser' => $opponent->id,
            'idDialog' => $dialog['id'],
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        $dialogUser = DialogUsers::insert($dialogUsers);
        return response()->json([$dialog], 200);
    }


    public function addUser($id, Request $request)
    {
        $this->validate($request, [
            'users' => 'array',
        ]);
        $newUsers = array_unique($request->input('users'));
        $user = Auth::user();
        $statusUser = DialogUsers::where('idUser', $user->id)->where('idDialog', $id)->where('status', 0)->first();
        if ($statusUser==null){
            return response()->json(['error' => [__('error_dialog--404')]], 404);
        }
        $dialog = DialogList::find($id);

        if ($dialog['type'] != 'group'){
            return response()->json(['error' => [__('error_dialog--note-group')]], 422);
        }

        $usersId = [];
        $users = $dialog->users()->get();

        foreach ($users as $item){
            array_push($usersId, $item['idUser']);
        }
        foreach ($newUsers as $key => $item){
            if (in_array(intval($item), $usersId)){
                unset($newUsers[$key]);
            }
        }
        $dialogUsers = [];
        foreach ($newUsers as $key => $item){
            array_push($dialogUsers, [
                'idUser' => $item,
                'idDialog' => $id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }

        $dialogUser = DialogUsers::insert($dialogUsers);

        return response()->json(['users'=>$dialog->users()->get()], 200);
    }


    public function leaveDialog($id)
    {
        $user = Auth::user();
        $statusUser = DialogUsers::where('idUser', $user->id)->where('idDialog', $id)->where('status', 0);
        if ($statusUser->first()==null){
            return response()->json(['error' => [__('error_dialog--404')]], 404);
        }

        $status = $statusUser->update(['status'=>1]);

        return response()->json(['success' => [__('success_dialog--leave-dialog')]], 200);
    }


    public function comeBack($id)
    {
        $user = Auth::user();
        $statusUser = DialogUsers::where('idUser', $user->id)->where('idDialog', $id)->where('status', '<>', 2);
        $userCheck =$statusUser->first();
        if ($userCheck==null){
            return response()->json(['error' => [__('error_dialog--404')]], 404);
        }
        if ($userCheck->status == 0){
            return response()->json(['error' => [__('error_dialog--you-in-dialog')]], 422);
        }

        $status = $statusUser->update(['status'=>0]);
        return response()->json(['success' => [__('success_dialog--come-back-dialog')]], 200);
    }
}

<?php

namespace App\Http\Controllers;

use App\Files;
use Illuminate\Http\Request;
use Storage;

class FilesController extends Controller
{

    public function uploadAvatar(Request $request){
        $this->validate($request, [
//            'img' => 'image',
            'img'=> 'dimensions:min_width=120, min_height=120',

        ]);
        $format = '.'.explode('/', $request->file('img')->getMimeType())[1];
        $name = md5_file($request->file('img'));
        $folder = "$name[0]$name[1]/$name[2]$name[3]";

        $file = Storage::putFileAs(
            'avatar/'.$folder, $request->file('img'), $name.$format
        );

        $saveFile = new Files;
        $saveFile->owner = \Auth::id();
        $saveFile->address = $file;
        $saveFile->save();

        $user = \Auth::user();
        $user->avatar = $file;
        $user->save();

        return response()->json($file, 200);
    }

    public function open(Request $request){
        $name = $request->input('name');
        $file = Storage::get($name);
        $type = Storage::mimeType($name);

        $response= response($file, 200);
        $response->header("Content-Type", $type);
        return $response;
    }


    public function uploadFile($type, Request $request){
        if ($type!='img'){
            return response()->json([], 422);
        }
        $this->validate($request, [
            'img' => 'image'
        ]);

        $file =  Storage::putFile('img', $request->file('img'));

        $saveFile = new Files;
        $saveFile->owner = \Auth::id();
        $saveFile->address = $file;
        $saveFile->save();

        return response()->json($file, 200);
    }
    public function getAllUserFiles(){
        $files = Files::where('owner', \Auth::id())->get();
        return response()->json($files, 200);
    }


}

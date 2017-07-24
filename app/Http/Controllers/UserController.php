<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    /**
     * функция регистрации новых пользоватлей
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function registerUser(Request $request)
    {
        $this->validate($request, [
            'nickname' => 'required|min:3|max:30|unique:users',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6'
        ]);

        $user = new User;
        $user->nickname = $request->input('nickname');
        $user->email = $request->input('email');
        $user->password = \Hash::make($request->input('password'));
        $user->save();

        return response()->json([
            "token" => $user->createToken('mobile1')->accessToken,
        ], 200);
    }


    /**
     * функция обновления профиля пользовтеля
     * @param Request $request
     * @return string
     */
    public function updateProfile(Request $request)
    {


        $this->validate($request, [
            'password' => 'nullable|min:6|confirmed',
            'password_confirmation' => 'nullable|min:6',
            'name' => 'nullable|string|min:1|max:150',
            'last_name' => 'nullable|string|min:1|max:150',
            'phone' => 'nullable|max:16',
            'birthday' => 'nullable|date|before:now',
            'job' => 'nullable|string',
            'gender' => 'nullable|in:man,woman',
            'length' => 'nullable|numeric|min:1|max:400',
            'weight' => 'nullable|numeric|min:1|max:400',
        ]);


        if ($request->input('password') != null) {
            \Auth::user()->password = \Hash::make($request->input('password'));

            \DB::table('oauth_access_tokens')
                ->where('user_id', \Auth::user()->id)
                ->where('revoked', '<>', 1)
                ->update(['revoked' => 1]);
        }
        if ($request->input('name') != null) {
            \Auth::user()->name = $request->input('name');
        }

        if ($request->input('last_name') != null) {
            \Auth::user()->last_name = $request->input('last_name');
        }

        if ($request->input('phone') != null) {
            \Auth::user()->phone = $request->input('phone');
        }

        if ($request->input('birthday') != null) {
            \Auth::user()->birthday = $request->input('birthday');
        }

        if ($request->input('job') != null) {
            \Auth::user()->job = $request->input('job');
        }

        if ($request->input('gender') != null) {
            \Auth::user()->gender = $request->input('gender');
        }

        if ($request->input('length') != null) {
            \Auth::user()->length = $request->input('length');
        }

        if ($request->input('weight') != null) {
            \Auth::user()->weight = $request->input('weight');
        }

        \Auth::user()->save();


        return response()->json(['profile' => [__('success_updateProfile')]], 200);
    }

//    public function getProfile($id)
//    {
//        $profile = User::find($id);
//        $status = Auth::user()->getFriendship($profile);
//
//        if ($profile == null) {
//            return response()->json($profile, 404);
//        }
//        return response()->json($profile, 200);
//    }

    public function getProfile($id)
    {
        $profile = User::find($id);
        $status = Auth::user()->getFriendship($profile);

        if ($profile == null) {
            return response()->json([$profile, $status], 404);
        }
        return response()->json([$profile, $status], 200);
    }

    public function searchProfile(Request $request)
    {
        $countUserInPage = 10;

        if ($request->input('nickname') != '') {
            $profile = User::where('nickname', $request->input('nickname'))->get();
            return response()->json([
                'countPage' => 1,
                'page' => $profile
            ], 200);
        }

        $name = $request->input('name', null);
        $last_name = $request->input('last_name', null);

        $birthday = $request->input('birthday', null);
        $birthday_Max = $request->input('birthday_max', null);
        $birthdayY = $request->input('birthdayY', null);
        $birthdayM = $request->input('birthdayM', null);
        $birthdayD = $request->input('birthdayD', null);


        $gender = $request->input('gender', null);

        $length = $request->input('length', null);
        $length_max = $request->input('length_max', null);
        $weight = $request->input('weight', null);
        $weight_max = $request->input('weight_max', null);

//        return response()->json([$birthday, $birthday_Max],200);
        $numberPage = $request->input('numberPage', 1);

        $profile =
            User::when($name !== null, function ($query) use ($name) {
                return $query->where('name', 'like', "%$name%");
            })
                ->when($last_name !== null, function ($query) use ($last_name) {
                    return $query->where('last_name', 'like', "%$last_name%");
                })
                ->when($gender !== null, function ($query) use ($gender) {
                    return $query->where('gender', $gender);
                })
                ->when($length !== null, function ($query) use ($length, $length_max) {
                    if ($length_max !== null) {
                        return $query->whereBetween('length',
                            [$length, $length_max]
                        );
                    }
                    return $query->where('length', $length);
                })
                ->when($weight !== null, function ($query) use ($weight, $weight_max) {
                    if ($weight_max !== null) {
                        return $query->whereBetween('weight',
                            [
                                date('Y-m-d' . ' 00:00:00', $weight),
                                date('Y-m-d' . ' 00:00:00', $weight_max)
                            ]
                        );
                    }
                    return $query->where('weight', $weight);
                })
                ->when(($birthday !== null)&&($birthday_Max !== null ), function ($query) use ($birthday, $birthday_Max) {
                    return $query->whereBetween('birthday', [$birthday, $birthday_Max]);
                })
                ->when($birthdayY !== null, function ($query) use ($birthdayY) {
                    return $query->whereYear('birthday', $birthdayY);
                })
                ->when($birthdayM !== null, function ($query) use ($birthdayM) {
                    return $query->whereMonth('birthday', $birthdayM);
                })
                ->when($birthdayD !== null, function ($query) use ($birthdayD) {
                    return $query->whereDay('birthday', $birthdayD);
                });

        return response()->json([
            'countPage' => ceil($profile->count() / $countUserInPage),
            'page' => $profile
                ->orderBy('id', 'asc')
                ->forPage($numberPage, $countUserInPage)
                ->get(),
        ], 200);
    }
}

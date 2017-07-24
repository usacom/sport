<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::post('/register', 'UserController@registerUser');

//только для авторизированных пользователей
Route::group(['middleware' => 'auth:api'], function () {

    // user API
    Route::get('/user', function (Request $request) {
        return $request->user();
    });
    Route::put('/update', 'UserController@updateProfile');
    Route::get('/profile/id{id}', 'UserController@getProfile');
//    Route::get('/test/profile/id{id}', 'UserController@getProfileTest');
    Route::get('/search', 'UserController@searchProfile');


    //friendsAPI
    Route::group(['prefix' => 'friend'], function () {
        Route::get('/list', 'FriendsController@getFriends');
        Route::get('/subscribes', 'FriendsController@getSubscribes');
        Route::get('/queryFriends', 'FriendsController@getRequestPending');

        Route::post('/sendRequest', 'FriendsController@sendRequest');
        Route::put('/acceptRequest', 'FriendsController@acceptRequest');
        Route::put('/denyRequest', 'FriendsController@denyRequest');
        Route::post('/removeFriend', 'FriendsController@removeFriend');
    });

    // messages API

    Route::group(['prefix' => 'messages'], function () {
        Route::get('/list', 'MessagesController@dialogList');
        Route::get('/users/{id}', 'MessagesController@listUserInDialog');
        Route::get('/show/{id}', 'MessagesController@showDialog');
        Route::put('/show/{id}', 'MessagesController@newMessage');
        Route::post('/newDialog', 'MessagesController@newDialog');
        Route::post('/openPrivate', 'MessagesController@OpenOrCreate');
        Route::post('/addUser/{id}', 'MessagesController@addUser');
        Route::delete('/leaveDialog/{id}', 'MessagesController@leaveDialog');
        Route::put('/returnDialog/{id}', 'MessagesController@comeBack');
    });

    Route::group(['prefix' => 'file'], function () {
        Route::post('/upload/avatar', 'FilesController@uploadAvatar');
    });

    // events API

    Route::group(['prefix' => 'events'], function () {
        Route::get('/list', 'EventController@index');
        Route::get('/open/{id}', 'EventController@openEvent');
        Route::get('/connect/{id}', 'EventController@connectToEvent');
        Route::post('/makeEvent', 'EventController@makeEvent');
        Route::post('/invite', 'EventController@inviteUser');
        Route::post('/acceptInvite', 'EventController@acceptInvite');
        Route::post('/deniedInvite', 'EventController@deniedInvite');
        Route::delete('/leaveEvent/{id}', 'EventController@leaveEvent');

        Route::delete('/delete/{id}', 'EventController@deleteEvent');

        Route::post('/edit', 'EventController@editEvent');

        Route::get('/return/{id}', 'EventController@comeBack');

        Route::get('/search', 'EventController@searchEvent');

        Route::get('/statusUserInEvent/{id}', 'EventController@statusParticipant');
        Route::get('/historyInEvent/{id}', 'EventController@historyParticipant');

        Route::post('/update', 'EventController@updateStatus');

        Route::get('/identifyWinner/{id}', 'EventController@identifyWinner');

        Route::post('/setWinner/{id}', 'EventController@setWinner');
    });

    // notifications API
    Route::group(['prefix' => 'notification'], function () {
        Route::get('/active', 'NotificationController@getActive');
    });

});

Route::get('/testGPS', 'NotificationController@newPointGPS');
Route::get('/test123', 'NotificationController@testGPS');

Route::get('/file/open', 'FilesController@open');
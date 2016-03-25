<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['api'], 'prefix'=>'api'], function () {
    Route::resource('url', 'Api\UrlController');
});

Route::group(['middleware' => 'web'], function () {

    Route::get('test', function(){
        $url = \App\Entities\Url::findOrNew(2062);
        $url->status;
    });

    Route::auth();

    Route::get('home', ['as'=>'home', 'uses'=>'HomeController@index']);
    Route::get('profile/{slug}', ['as'=>'profile', 'uses'=>'UserController@show']);
    Route::get('folder/{slug}', ['as'=>'folder', 'uses'=>'FolderController@show']);
    Route::get('category/{slug}', ['as'=>'category', 'uses'=>'CategoryController@show']);

    Route::get('live/{user}', ['as'=>'live', 'uses'=>'LiveWidgetController@show']);

    Route::post('url', ['as'=>'new_url', 'uses'=>'UrlController@store']);


    Route::get('auth/twitter', ['as'=>'twitter_login', 'uses'=>'Auth\AuthController@redirectToProvider']);
    Route::get('auth/twitter/callback', ['as'=>'provider', 'uses'=>'Auth\AuthController@handleProviderCallback']);

});

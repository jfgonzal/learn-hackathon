<?php


/*Route::get('/', function () {
    return view('pages.home');
});*/
use Illuminate\Support\Facades\App;

Route::get('/', function() {
    return view('index'); // will return app/views/index.php
});

// API ROUTES ==================================
Route::group(array('prefix' => 'api'), function() {

    // since we will be using this just for CRUD, we won't need create and edit
    // Angular will handle both of those forms
    // this ensures that a user can't access api/create or api/edit when there's nothing there
    Route::resource('comments', 'CommentController',
        array('only' => array('index', 'store', 'destroy')));

});



Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');


Route::any('android/login/{username}/{password}', 'AndroidResponseController@getLogin');

//Route::get('/', 'PagesController@index');
Route::get('partners', 'PagesController@partners');

Route::get('dashboard', 'PagesController@dashboard');
Route::get('angular', 'PagesController@angular');



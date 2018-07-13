<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
        return view('blank');
    });
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth','role:Super-Admin'], function () {
    

    Route::resource('role','roleController');
    Route::resource('permision','permisionController');
    Route::get('akses','hakaksesController@index')->name('akses.index');
    Route::get('akses/{kontent}','hakaksesController@indexf')->name('akses.indexf');
    Route::get('akses/{kontent}/create','hakaksesController@createf')->name('akses.createf');
    Route::post('akses/simpanroleuser','hakaksesController@storeuserrole')->name('akses.storeuserrole');
    Route::post('akses/simpanpermiuser','hakaksesController@storepermisionuser')->name('akses.storepermisionuser');
    Route::post('akses/simpanpermirole','hakaksesController@storepermisionrole')->name('akses.storepermisionrole');
    Route::delete('akses/{kontent}/{role}/{id}','hakaksesController@deletef')->name('akses.deletef');

    Route::get('profile', 'ProfileController@show')->name('profile.show');
    Route::get('profile/edit', 'ProfileController@edit')->name('profile.edit');
    Route::patch('profile', 'ProfileController@update')->name('profile.update');
    Route::get('password', 'ProfileController@editpassword')->name('password.show');
    Route::patch('password', 'ProfileController@storepassword')->name('password.store');
    Route::patch('profile/picture', 'ProfileController@profilePicture')->name('profile.picture');

    Route::post('users/deactivate/{id}', 'UserController@deactivate')->name('users.deactivate');
    Route::post('users/activate/{id}', 'UserController@activate')->name('users.activate');
    Route::resource('users', 'UserController');  
});

Route::group(['middleware' => 'auth','role:administrator'], function () {

    Route::get('profile', 'ProfileController@show')->name('profile.show');
    Route::get('profile/edit', 'ProfileController@edit')->name('profile.edit');
    Route::patch('profile', 'ProfileController@update')->name('profile.update');
    Route::get('password', 'ProfileController@editpassword')->name('password.show');
    Route::patch('password', 'ProfileController@storepassword')->name('password.store');
    Route::patch('profile/picture', 'ProfileController@profilePicture')->name('profile.picture');

    Route::post('users/deactivate/{id}', 'UserController@deactivate')->name('users.deactivate');
    Route::post('users/activate/{id}', 'UserController@activate')->name('users.activate');
    Route::resource('users', 'UserController');  
});

Route::get('image/{type}/{id}', 'FileController@image')->name('get.image');




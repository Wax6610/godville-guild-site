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
    return view('welcome');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('guild-members','GuildMembersController');
Route::get('/add-from-guild-page','GuildMembersController@parse')->name('add-from-guild-page');
Route::post('/add-from-guild-page','GuildMembersController@parse')->name('add-from-guild-page');


Route::get('/check-users-activity','UserStatsController@checkUsersActivity');
Route::get('/get-snapshot','UserStatsController@getSnapshot');
Route::get('/get-one-snapshot','UserStatsController@getOneUserSnapshot');

Route::get('/get-progress/{start?}/{end?}','UserStatsController@getProgress')->name('get-progress');
Route::get('/get-top/{start?}/{end?}','UserStatsController@getTop');

Route::resource('proxy','ProxyController');

Route::get('/show-top', function () {
    return view('guild-progress');
});


Route::get('/clan-progress', function () {
    return view('guild-progress');
});



Route::get('/home', function () {
    return view('birthday');
});

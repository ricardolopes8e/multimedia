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

Route::get('/home', 'HomeController@index');


Route::get('/post',  function (){
return view('post');
});

Route::get('/profile', function () {
    return view('profile');
});


Route::group(['prefix' => 'teams', 'middleware' => ['web','auth']], function() {

    Route::get('', 'TeamController@index')->name('teams.index');
    Route::get('/create', 'TeamController@create')->name('teams.create');
    Route::get('/{team}', 'TeamController@show')->name('teams.show');
    Route::post('', 'TeamController@store')->name('teams.store');
    Route::get('/delete/{team}', 'TeamController@destroy')->name('teams.destroy');
});



Route::group(['prefix' => 'organizations', 'middleware' => ['web','auth']], function() {

    Route::get('', 'OrganizationController@index')->name('organizations.index');
    Route::get('/create', 'OrganizationController@create')->name('organizations.create');
    Route::get('/{organization}', 'OrganizationController@show')->name('organizations.show');
    Route::post('', 'OrganizationController@store')->name('organizations.store');
    Route::get('/delete/{organization}', 'OrganizationController@destroy')->name('organizations.destroy');
});


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

Route::get('/dashboard', function () {
	return view('dashboard');

});

Route::get('/myprofile', function () {
    return view('myprofile');
});

Route::get('/mymail', function () {
    return view('mymail');
});

Route::get('/eoi', function () {
    return view('eoi');
});

Route::get('/intport', function () {
    return view('intport');
});


Route::get('/changepass', function () {
    return view('changepass');
});

Route::get('/changepass2', function () {
    return view('changepass');
});









/*--Profile page routes */

Route::get('/myprofile', 'UserController@myprofile');
Route::post('myprofile', 'UserController@update_avatar');
Route::post('myprofile-update-preferences', 'UserController@myprofileUpdatePreferences');

Route::get('/message/{id}', 'UserController@message');
Route::get('/mymail', 'UserController@inbox');

Route::get('/eoi', 'InternshipController@eoi');
Route::get('/opportunities', 'InternshipController@opportunities');
Route::get('/opportunitydetail/{id}', 'InternshipController@opportunitydetail');
Route::post('add-expression', 'InternshipController@addExpression');

Route::get('/intport', 'InternshipController@intport');
Route::post('intport-qualification', 'InternshipController@addQualification');
Route::post('intport-delete-qualification', 'InternshipController@deleteQualification');
Route::post('intport-experience', 'InternshipController@addExperience');
Route::post('intport-delete-experience', 'InternshipController@deleteExperience');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

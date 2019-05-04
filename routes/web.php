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


/*bookings?*/
Route::get('book', 'BookingsController@create'); //to add route to “create new post form”
Route::post('book/store', 'BookingsController@store');	 //to add route to store method




/*bookings - backend*/









/*backend folder */
Route::get('/logon', function () {
	return view('backend/logon');
});


Route::group( ['middleware' => 'auth.custom' ], function()
{

    
Route::get('/dashboard', function () {
	return view('backend/dashboard');
});



Route::get('/bookings', function () {
    return view('backend/bookings');
});



Route::get('/bookings', function () {
    $name='Deep'; 
	return view('backend.bookings', compact('name'));
});

Route::get('/bookings', function () {
    $bk=DB::table('bookings')->get();
	return view('backend.bookings', compact('bk'));
});


});


Route::get('/myprofile', function () {
    return view('backend/myprofile');
});

Route::get('/mymail', function () {
    return view('backend/mymail');
});

Route::get('/eoi', function () {
    return view('backend/eoi');
});

Route::get('/intport', function () {
    return view('backend/intport');
});


Route::get('/changepass', function () {
    return view('backend/changepass');
});

Route::get('/changepass2', function () {
    return view('changepass');
});






/*everything else */
Route::get('/', function () {
    return view('welcome');
});

Route::get('/book', function () {
    return view('create');
});

Route::get('/betabook', function () {
    return view('betacreate');
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

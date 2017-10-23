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


Route::get('/firsttime', function () {
    return view('layouts.zerodata.zerodataHome');
});


Route::get('/settings/layout', function () {
    return view('layouts.settings.layout');
});

Route::get('/settings/design', function () {
    return view('layouts.settings.design');
});


Route::get('/settings/preview', function () {
    return view('layouts.settings.preview');
});

Route::get('/newclient', function () {
    return view('layouts.newClient.newClient');
});


/* actions routes */

Route::get('/sendfactfind', function () {
    return view('layouts.sendfactfind.sendfactfind');
});

Route::get('/view/clientname', function () {
    return view('layouts.viewfactfind.viewfactfind');
});


/* client factfind */

Route::get('/clientlogin', function () {
    return view('layouts.clientEmail.clientlogin');
});

Route::get('/clientfactfind', function () {
    return view('layouts.clientEmail.clientFactFind');
});

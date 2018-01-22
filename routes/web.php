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


Route::get('/statuses', 'StatusController@index');

 Route::post('/statuses', 'StatusController@store');

 Route::patch('/statuses', 'StatusController@update');



Route::resource('/task', 'TaskController');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/firsttime', function () {
      return view('layouts.zerodata.zerodataHome');
});


/* actions routes */

Route::get('/settings/factfind', function () {
    return view('layouts.settings.naming');
});


Route::get('/settings/layout', 'FactFindSetupController@index');


Route::get('/settings/layout/{section}', function($section){

  $data['questionSection'] = App\Status::find($section)->body;
  $data['questionsText']= App\Status::find($section)->questions->all();

return $data;

//  return $questionsText->with(compact('questionsText', 'questionSection'));


});



Route::get('/settings/design', function () {
    return view('layouts.settings.design');
});


Route::get('/settings/preview', function () {
    return view('layouts.settings.preview');
});


/* actions routes */

Route::get('/newclient', function () {
    return view('layouts.newClient.newClient');
});


/* actions routes */

Route::get('/sendfactfind', function () {
    return view('layouts.sendfactfind.sendfactfind');
});

/* view client name */


Route::get('/view/clientname', 'viewFactFindControler@index');


/* client factfind */

Route::get('/clientlogin', function () {
    return view('layouts.clientEmail.clientlogin');
});

Route::get('/clientfactfind', function () {
    return view('layouts.clientEmail.clientFactFind');
});


Route::get('/testing/{section}', function($section){

  $questionSection = App\Status::find($section)->body;
  $questions = App\Status::find($section)->questions;

  return [$questions, $questionSection];

});


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
Route::resource('responsibles','ResponsibleController');
Route::resource('carriers','CarrierController');

Route::get('/responsibles', 'ResponsibleController@index');
Route::get('/responsibles/create', 'ResponsibleController@create');
Route::get('/carries', 'CarrierController@index');
Route::get('/carries/create', 'CarrierController@create');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
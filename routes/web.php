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

// Route::get('/', function () {
//     return view('welcome');
// });





Auth::routes();

Route::get('/country', 'CountrayController@index');

Route::get('/getStates/{id}', 'CountrayController@getStates');

//product 
Route::get('/country/village', 'CountrayController@countryList');

Route::get('/findStateName', 'CountrayController@findStateName');

//ajax form data store route
Route::get('/message/view', 'HomeController@messageView');
Route::post('/backend/data/store', 'HomeController@ajaxFormSubmit');

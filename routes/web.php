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

Route::resource('admins','AdminController');
//Rahat
Route::resource('specialties','SpecialtyController');
Route::resource('categories','CategoryController');
Route::resource('countries','CountryController');

Route::get('add_patient','AdminController@add_patient')->name('add_patient');
Route::get('/edit_patient/{id}','AdminController@edit_patient');

Route::post('save_patient','AdminController@save_patient')->name('save_patient');

Route::post('/update_patient/{id}','AdminController@update_patient');
Route::get('/delete_patient/{id}','AdminController@delete_patient');
Route::get('active_patient/{id}','AdminController@active_patient');
Route::get('deactive_patient/{id}','AdminController@deactive_patient');

Route::get('all_patient','AdminController@all_patient')->name('patients');
Route::get('patients','AdminController@getPatients')->name('get.patients');

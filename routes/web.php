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


Route::group(['middleware' => 'App\Http\Middleware\AdminMiddleware'], function()
{

Route::resource('admins','AdminController');
//Rahat
Route::resource('specialties','SpecialtyController');
Route::get('/active_specialty/{id}','SpecialtyController@active_specialty');
Route::get('/deactive_specialty/{id}','SpecialtyController@deactive_specialty');

Route::resource('categories','CategoryController');
Route::get('/active_category/{id}','CategoryController@active_category');
Route::get('/deactive_category/{id}','CategoryController@deactive_category');

Route::resource('countries','CountryController');
Route::get('/active_country/{id}','CountryController@active_country');
Route::get('/deactive_country/{id}','CountryController@deactive_country');


Route::get('add_patient','AdminController@add_patient')->name('add_patient');
Route::get('/edit_patient/{id}','AdminController@edit_patient');

Route::post('save_patient','AdminController@save_patient')->name('save_patient');

Route::post('/update_patient/{id}','AdminController@update_patient')->name('update_patient');
Route::get('/delete_patient/{id}','AdminController@delete_patient');

Route::get('active_patient/{id}','AdminController@active_patient');
Route::get('deactive_patient/{id}','AdminController@deactive_patient');

Route::get('active_doctor/{id}','AdminController@active_doctor');
Route::get('deactive_doctor/{id}','AdminController@deactive_doctor');

Route::get('all_patient','AdminController@all_patient')->name('patients');
Route::get('getpatients','AdminController@getPatients')->name('get.patients');

Route::get('all_appointment','AdminController@all_appointment')->name('appointments');
Route::get('appointments','AdminController@getAppointments')->name('get.appointments');



Route::get('add_appointment','AdminController@add_appointment')->name('add_appointment');

});

//Route::get('doctor_schedule/{id}','DoctorController@show_schedule_page');

//Route::post('doctor_schedule','DoctorController@doctor_schedule_update');
Route::get('create_appointment','DoctorController@create_appointment');

Auth::routes();
Route::get('logout', 'Auth\LoginController@logout');

Route::group(['middleware' => 'App\Http\Middleware\PatientMiddleware'], function()
{
Route::resource('patients','PatientController');
Route::post('/update_profile/{id}','PatientController@update_profile')->name('update_patient_profile');
Route::get('/patients_messages','PatientController@show_patients_message');
});

Route::get('/home', 'HomeController@index')->name('home');

//Mahmud



/*Register Doctor Template*/



/* Add Doctors */

Route::get('adddoctor','AdminController@adddoctor')->name('adddoctor');
Route::post('savedoctor','AdminController@savedoctor')->name('savedoctor');

/*All Doctor*/

Route::get('all_doctor','AdminController@all_doctor')->name('doctors');
Route::get('doctors','AdminController@getDoctors')->name('get.doctors');

Route::get('/edit_doctor/{id}','AdminController@edit_doctor');
Route::post('/update_doctor/{id}','AdminController@update_doctor')->name('update_doctor');
Route::get('/delete_doctor/{id}','AdminController@delete_doctor')->name('delete_doctor');

Route::group(['middleware' => 'App\Http\Middleware\DoctorMiddleware'], function()
{

/* Doctor Update Section*/

Route::resource('doctor','DoctorController');

Route::get('/doctor_profile','DoctorController@doctorProfile')->name('doctorProfile');

Route::post('/doctor_update/{id}','DoctorController@doctor_update');
Route::get('doctor_schedule','DoctorController@show_schedule_page');
Route::post('doctor_schedule/{id}','DoctorController@doctor_schedule_update');

});

//Rahat
Route::post('doctor_list','HomeController@show_doctor_list');
//Rahat





/*Map*/
Route::get('map','AdminController@map')->name('map');
/*Test */

Route::post('docpractice', 'DoctorController@docpractice')->name('docpractice');

/*Image Upload */
Route::post('docimageupdate/{id}','DoctorController@docimageupdate')->name('docimageupdate');
Route::post('docimagedelete/{id}','DoctorController@docimagedelete')->name('docimagedelete');

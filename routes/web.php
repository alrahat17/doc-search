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
Route::get('/','HomeController@show_welcome_page');
Route::post('/fetch','HomeController@fetch')->name('fetch');
Route::post('logincheck', 'PatientController@logincheck')->name('logincheck');
Route::get('/show_appointment','HomeController@show_appointment');

//

Route::post('save_appointment','DoctorController@save_appointment');
 

 Route::post('/addcomment', 'DoctorController@addData');






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

Route::get('/add_city','CountryController@add_city');
Route::post('/save_city','CountryController@save_city');
Route::get('/all_city','CountryController@all_city');
Route::get('/active_city/{id}','CountryController@active_city');
Route::get('/deactive_city/{id}','CountryController@deactive_city');
Route::get('/edit_city/{id}/edit','CountryController@edit_city');
Route::post('/update_city/{id}','CountryController@update_city')->name('update_city');


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


/* Add Doctors */

Route::get('adddoctor','AdminController@adddoctor')->name('adddoctor');
Route::post('savedoctor','AdminController@savedoctor')->name('savedoctor');

/*All Doctor*/

Route::get('all_doctor','AdminController@all_doctor')->name('doctors');
Route::get('doctors','AdminController@getDoctors')->name('get.doctors');

Route::get('/edit_doctor/{id}','AdminController@edit_doctor');
Route::post('/doctor_update/{id}','AdminController@doctor_update')->name('doctor_update');
Route::get('/delete_doctor/{id}','AdminController@delete_doctor')->name('delete_doctor');




Route::get('add_appointment','AdminController@add_appointment')->name('add_appointment');

});

//Route::get('doctor_schedule/{id}','DoctorController@show_schedule_page');

//Route::post('doctor_schedule','DoctorController@doctor_schedule_update');

Auth::routes();
Route::get('logout', 'Auth\LoginController@logout');

Route::group(['middleware' => 'App\Http\Middleware\PatientMiddleware'], function()
{
Route::resource('patients','PatientController');
//Added
Route::post('/patients/create', 'PatientController@check')->name('email_available.check');

//Added
Route::post('/update_profile/{id}','PatientController@update_profile')->name('update_patient_profile');
Route::get('/patients_messages','PatientController@show_patients_message');
});

Route::get('/home', 'HomeController@index')->name('home');




//Mahmud



/*Register Doctor Template*/




Route::group(['middleware' => 'App\Http\Middleware\DoctorMiddleware'], function()
{

/* Doctor Update Section*/

Route::resource('doctor','DoctorController');//Rahat
//Rahat
Route::get('/doctor_profile','DoctorController@doctorProfile')->name('doctorProfile');
Route::get('/doctor_dashboard','DoctorController@show_doc_dashboard');


//Route::post('/doctor_update/{id}','DoctorController@doctor_update');
Route::post('/update_doctor/{id}','DoctorController@update_doctor')->name('update_doctor');


Route::get('doctor_schedule','DoctorController@show_schedule_page');
Route::post('doctor_schedule/{id}','DoctorController@doctor_schedule_update');
Route::get('create_appointment','DoctorController@create_appointment');


});

//Rahat
Route::post('doctor_list','HomeController@show_doctor_list');
//Route::get('doctor_details/{id}','HomeController@doctor_details')->name('doctor_details');
//Rahat

Route::get('doctor_view/{id}','HomeController@doctor_view')->name('doctor_view');







/*Map*/
Route::get('map','AdminController@map')->name('map');
/*Test */

Route::post('docpractice', 'DoctorController@docpractice')->name('docpractice');

/*Image Upload */
Route::post('docimageupdate/{id}','DoctorController@docimageupdate')->name('docimageupdate');
Route::post('docimagedelete/{id}','DoctorController@docimagedelete')->name('docimagedelete');

/*Doctor Prising*/

// Route::post('/procedure','DoctorController@procedure')->name('procedure');
Route::post('/doctorprising','DoctorController@procedure')->name('procedure');

/*estabAffliation*/

Route::post('est_affliation','DoctorController@est_affliation')->name('est_affliation');
Route::get('delete_affliation/{id}','DoctorController@delete_affliation')->name('delete_affliation');

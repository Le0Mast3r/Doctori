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



Auth::routes();



// This is for Users & Admin
Route::group(['middleware'=>['web','auth']],function(){
    
    Route::get('/home',function(){
        if(Auth::user()->admin==0){
            return view('home');
        }else{
            // $users['users']=\App\User::all();
            return view('layouts.admin-layout');
        }
    });
    // Route::get('/home', 'HomeController@index')->name('home');
    Route::get('prend-rdv','ViewsController@index1')->name('prend-rdv');
    
    Route::get('/mes-rdv','ViewsController@showDataEvent')->name('mes-rdv');
    
    Route::resource('user', 'TestController');


});
// End is for Users

// Views 
Route::get('get-state-list','ViewsController@getVille');
Route::get('get-city-list','ViewsController@getNom');
Route::get('/','ViewsController@index')->name('index');
Route::get('/faq','ViewsController@faq')->name('faq');
// Route::get('/inscrire-docteur','ViewsController@registerDoctor')->name('registerDoctor');
Route::get('chercher','SearchController@index')->name('chercher');
Route::get('getStates/{id}','SearchController@getStateList')->name('getStates');
Route::get('getData/{id}','SearchController@getData')->name('getData');
// Route::get('dropdownlist','SearchController@index');
// Route::get('get-state-list','SearchController@getStateList');
// Route::get('get-city-list','SearchController@getCityList');
Route::post('/thanks' , 'ContactController@store');


// I dont know what this is
// Route::get('drp','DynamicDependent@index');
// Route::get('get-state-list','DynamicDependent@getStateList');
// Route::get('get-city-list','DynamicDependent@getCityList');
// End of shit

Route::post('enregistrer','ViewsController@enregistrer');



// Route::get('/identifier-docteur','DoctorRegisterController@doctorLogin');
// Route::get('inscrire-docteur','RegisterController@index')->name('registerDoctor');
// Route::post('doctor_action','RegisterController@store')->name('doctor_action');
// Route::post('doctor_check','RegisterController@login')->name('doctor_check');


Route::get('/identifier-docteur',function(){
    return view('login-doctors');
});
Route::get('inscrire-docteur','DoctorRegisterController@index')->name('registerDoctor');
Route::post('doctor_action','DoctorRegisterController@store')->name('doctor_action');
Route::post('doctor_check','DoctorRegisterController@login')->name('doctor_check');
// Doctor Section 



Route::group(['middleware'=>['docteur-middleware']],function(){
    Route::get('docteur-accueil','ViewsController@docteurAccueil')->name('doctor.dashboard');
    Route::get('docteur-non-verifie','ViewsController@doctorNotVerified')->name('docteur-non-verifie');
    Route::get('calendrier','ViewsController@calendarEvenement')->name('calendrier');
    Route::get('docteur-logout','DoctorRegisterController@logout')->name('docteur-logout');
    
});

// Route::get('/test',function(){
//     return view('contact.create');
// });

// This Crud for Contact
Route::get('contact','ContactController@index')->name('contact');
Route::get('contact/create','ContactController@create');
Route::post('contact','ContactController@store');
Route::get('contact/{id}/edit','ContactController@edit');
Route::put('contact/{id}','ContactController@update');
Route::delete('contact/{id}','ContactController@destroy');
//  end for Contact Crud

// This Crud for Users
Route::get('patient','UserController@index')->name('patient');
Route::get('patient/create','UserController@create');
Route::post('patient','UserController@store');
Route::get('patient/{id}/edit','UserController@edit');
Route::put('patient/{id}','UserController@update');
Route::delete('patient/{id}','UserController@destroy');
// End of Crud User

// This Crud for Doctor
Route::get('docteur','DoctorController@index')->name('docteur');
Route::get('docteur/create','DoctorController@create');
Route::post('docteur','DoctorController@store');
Route::get('docteur/{id}/edit','DoctorController@edit');
Route::put('docteur/{id}','DoctorController@update');
Route::delete('docteur/{id}','DoctorController@destroy');

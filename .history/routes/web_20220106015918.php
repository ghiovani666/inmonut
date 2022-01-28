<?php

use Illuminate\Support\Facades\Route;

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

//--------------INICIO DEL WEB-----------
Route::get('/', 'Web\HomeController@viewHome')->name('home');
Route::get('/home', 'Web\HomeController@viewHome')->name('home');
Route::get('/login_register', 'Web\HomeController@viewLogin')->name('login_register');
Route::get('/viewContacto', 'Web\HomeController@viewContacto')->name('viewContacto');

Route::get('/viewServicioFisio', 'Web\HomeController@viewServicioFisio')->name('viewServicioFisio');
Route::get('/viewServicioFitness', 'Web\HomeController@viewServicioFitness')->name('viewServicioFitness');
Route::get('/viewServicioPadel', 'Web\HomeController@viewServicioPadel')->name('viewServicioPadel');
Route::get('/viewServicioTenis', 'Web\HomeController@viewServicioTenis')->name('viewServicioTenis');

Route::get('/logout', 'Auth\LoginController@logout');

Route::group(['middleware' => 'auth'], function() {
    Route::get('/password', 'ProfileController@Password');
    Route::post('/updatePassword', 'ProfileController@updatePassword');
    Route::get('/thankyou', function() {
        return view('profile.thankyou');
    });
    Route::get('/mail', 'HomeController@sendmail');
});

Auth::routes();
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'admin']], function() {

    //================ADMINISTRATOR==================
    Route::get('/homes', 'Admin\AdminController@homes');
    Route::get('/slider', 'Admin\AdminController@slider');
    Route::get('/clases', 'Admin\AdminController@clases');
    Route::get('/fitness', 'Admin\AdminController@fitness');
    Route::get('/entrenador', 'Admin\AdminController@entrenador');

    Route::post('/dashboard_home_edit_imagen','Admin\AdminController@dashboard_home_edit_imagen');
    Route::post('/dashboard_home_actualizar_imagen','Admin\AdminController@dashboard_home_actualizar_imagen');
    Route::post('/dashboard_home_actualizar_footer','Admin\AdminController@dashboard_home_actualizar_footer');

    Route::get('/indexs', 'Admin\AdminController@index');

    Route::post('/clases_guardar_descripcion','Admin\AdminController@clases_guardar_descripcion');
    Route::post('/fitness_guardar_descripcion','Admin\AdminController@fitness_guardar_descripcion');
    Route::post('/entrenador_guardar_descripcion','Admin\AdminController@entrenador_guardar_descripcion');


    Route::get('/adminServicioTenis', 'Admin\AdminController@adminServicioTenis');
    Route::get('/adminServicioPadel', 'Admin\AdminController@adminServicioPadel');
    Route::get('/adminServicioFisio', 'Admin\AdminController@adminServicioFisio');
    Route::get('/adminServicioFitness', 'Admin\AdminController@adminServicioFitness');

    Route::post('/saveServiciosTraining','Admin\AdminController@saveServiciosTraining');
    Route::post('/imagenServiciosTraining','Admin\AdminController@imagenServiciosTraining');



});
Route::get('/logout', 'Auth\LoginController@logout');
//ENVIAR EMAILs
Route::post('enviar_email_informacion', 'Web\HomeControlle@enviar_email_informacion');

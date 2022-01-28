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
Route::get('/viewPacks', 'Web\HomeController@viewPacks')->name('viewPacks');
Route::get('/viewServices1', 'Web\HomeController@viewServices1')->name('viewServices1');
Route::get('/viewServices2', 'Web\HomeController@viewServices2')->name('viewServices2');
Route::get('/viewServices3', 'Web\HomeController@viewServices3')->name('viewServices3');
Route::get('/viewServices4', 'Web\HomeController@viewServices4')->name('viewServices4');
Route::get('/viewServices5', 'Web\HomeController@viewServices5')->name('viewServices5');
Route::get('/viewServices6', 'Web\HomeController@viewServices6')->name('viewServices6');

Route::get('/viewEquipos', 'Web\HomeController@viewEquipos')->name('viewEquipos');

Route::get('/viewEvento', 'Web\HomeController@viewEvento')->name('viewEvento');
Route::get('/viewBono', 'Web\HomeController@viewBono')->name('viewBono');
Route::get('/viewNoticia', 'Web\HomeController@viewNoticia')->name('viewNoticia');
Route::get('/viewReto', 'Web\HomeController@viewReto')->name('viewReto');
Route::get('/viewAbout', 'Web\HomeController@viewAbout')->name('viewAbout');
Route::get('/viewLocation', 'Web\HomeController@viewLocation')->name('viewLocation');


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

    Route::get('/novedadEvento','Admin\AdminController@novedadEvento');
    Route::get('/novedadBono','Admin\AdminController@novedadBono');
    Route::get('/novedadNoticia','Admin\AdminController@novedadNoticia');
    Route::get('/novedadReto','Admin\AdminController@novedadReto');
    Route::post('/saveServiciosNovedad','Admin\AdminController@saveServiciosNovedad');
    Route::post('/imagenServiciosNovedad','Admin\AdminController@imagenServiciosNovedad');


});
Route::get('/logout', 'Auth\LoginController@logout');
//ENVIAR EMAILs
// Route::post('enviar_email_informacion', 'Web\HomeControlle@enviar_email_informacion');
Route::post('/enviar_email_informacion', 'Web\HomeController@enviar_email_informacion')->name('enviar_email_informacion');
<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can registers web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
    Route::group(['middleware' => 'auth'], function() {
        Route::get('/password',        'ProfileController@Password');
        Route::post('/updatePassword', 'ProfileController@updatePassword');
        Route::get('/thankyou', function() {
            return view('profile.thankyou');
        });
        Route::get('/mail', 'HomeController@sendmail');
    });
    Route::get('/logout', 'Auth\LoginController@logout');
    //::::::::::::::::::::::: HOME ::::::::::::::::::::::::::
    Route::get('/',                          'Web\HomeController@viewHome')->name('home');
    Route::get('/home',                      'Web\HomeController@viewHome')->name('home');
    Route::get('/login_register',            'Web\HomeController@viewLogin')->name('login_register');
    Route::post('/enviar_email_informacion', 'Web\HomeController@enviar_email_informacion')->name('enviar_email_informacion');
    //::::::::::::::::::::::: CONTROLLER ABOUT ::::::::::::::::::::::::::
    Route::get('/viewAbout', 'Web\AboutController@viewAbout')->name('viewAbout');
    //::::::::::::::::::::::: CONTROLLER LOCATION ::::::::::::::::::::::::::
    Route::get('/viewLocation', 'Web\LocationController@viewLocation')->name('viewLocation');
    //::::::::::::::::::::::: CONTROLLER CONTACTO ::::::::::::::::::::::::::
    Route::get('/viewContacto', 'Web\ContactoController@viewContacto')->name('viewContacto');
    //::::::::::::::::::::::: CONTROLLER SERVICIO ::::::::::::::::::::::::::
    Route::get('/viewServicioFisio',   'Web\ServicioController@viewServicioFisio')->name('viewServicioFisio');
    Route::get('/viewServicioFitness', 'Web\ServicioController@viewServicioFitness')->name('viewServicioFitness');
    Route::get('/viewServicioPadel',   'Web\ServicioController@viewServicioPadel')->name('viewServicioPadel');
    Route::get('/viewServicioTenis',   'Web\ServicioController@viewServicioTenis')->name('viewServicioTenis');
    //::::::::::::::::::::::: CONTROLLER PACK ::::::::::::::::::::::::::
    Route::get('/viewPacks',     'Web\PackController@viewPacks')->name('viewPacks');
    Route::get('/viewServices1', 'Web\PackController@viewServices1')->name('viewServices1');
    Route::get('/viewServices2', 'Web\PackController@viewServices2')->name('viewServices2');
    Route::get('/viewServices3', 'Web\PackController@viewServices3')->name('viewServices3');
    Route::get('/viewServices4', 'Web\PackController@viewServices4')->name('viewServices4');
    Route::get('/viewServices5', 'Web\PackController@viewServices5')->name('viewServices5');
    Route::get('/viewServices6', 'Web\PackController@viewServices6')->name('viewServices6');
    //::::::::::::::::::::::: CONTROLLER EQUIPO ::::::::::::::::::::::::::
    Route::get('/viewEquipos', 'Web\EquipoController@viewEquipos')->name('viewEquipos');
    //::::::::::::::::::::::: CONTROLLER NOVEDADES ::::::::::::::::::::::::::
    Route::get('/viewEvento',  'Web\NovedadesController@viewEvento')->name('viewEvento');
    Route::get('/viewBono',    'Web\NovedadesController@viewBono')->name('viewBono');
    Route::get('/viewNoticia', 'Web\NovedadesController@viewNoticia')->name('viewNoticia');
    Route::get('/viewReto',    'Web\NovedadesController@viewReto')->name('viewReto');

    Auth::routes();
    Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'admin']], function() {


        Route::post('/dashboard_home_edit_imagen',       'Admin\AdminController@dashboard_home_edit_imagen');
        Route::post('/dashboard_home_actualizar_imagen','Admin\AdminController@dashboard_home_actualizar_imagen');
        Route::post('/dashboard_home_actualizar_footer','Admin\AdminController@dashboard_home_actualizar_footer');

        Route::get('/indexs', 'Admin\AdminController@index');

        Route::post('/clases_guardar_descripcion',      'Admin\AdminController@clases_guardar_descripcion');
        Route::post('/fitness_guardar_descripcion',     'Admin\AdminController@fitness_guardar_descripcion');
        Route::post('/entrenador_guardar_descripcion',  'Admin\AdminController@entrenador_guardar_descripcion');



        Route::post('/changeServicioTraining','Admin\AdminController@changeServicioTraining');
        Route::post('/saveServiciosTraining','Admin\AdminController@saveServiciosTraining');
        Route::post('/imagenServiciosTraining','Admin\AdminController@imagenServiciosTraining');

        Route::get('/novedadEvento','Admin\AdminController@novedadEvento');
        Route::get('/novedadBono','Admin\AdminController@novedadBono');
        Route::get('/novedadNoticia','Admin\AdminController@novedadNoticia');
        Route::get('/novedadReto','Admin\AdminController@novedadReto');
       

        

        Route::post('/saveServiciosNovedad','Admin\AdminController@saveServiciosNovedad');
        Route::post('/imagenServiciosNovedad','Admin\AdminController@imagenServiciosNovedad');



        //::::::::::::::::::::::: CONTROLLER HOME ::::::::::::::::::::::::::
        Route::get('/homes',      'Admin\HomeController@homes');
        Route::get('/bienvenidos','Admin\HomeController@bienvenidos');
        Route::get('/quienesSomos','Admin\HomeController@quienesSomos');
        Route::get('/localizacion','Admin\HomeController@localizacion');
        Route::get('/slider',     'Admin\HomeController@slider');
        Route::get('/clases',     'Admin\HomeController@clases');
        Route::get('/fitness',    'Admin\HomeController@fitness');
        Route::get('/entrenador', 'Admin\HomeController@entrenador');

        //::::::::::::::::::::::: CONTROLLER SERVICIO ::::::::::::::::::::::::::
        Route::get('/adminServicioTenis',   'Admin\ServicioController@adminServicioTenis');
        Route::get('/adminServicioPadel',   'Admin\ServicioController@adminServicioPadel');
        Route::get('/adminServicioFisio',   'Admin\ServicioController@adminServicioFisio');
        Route::get('/adminServicioFitness', 'Admin\ServicioController@adminServicioFitness');

        //::::::::::::::::::::::: CONTROLLER SERVICIO: CRUD DE SERVICIOS ::::::::::::::::::::::::::
        Route::get('/adminServicioHello', 'Admin\AdminController@adminServicioHello');
        Route::post('/createServicioTraining','Admin\AdminController@createServicioTraining');
        Route::post('/editServicioTraining','Admin\AdminController@editServicioTraining');
        Route::get('/listarDataTable','Admin\AdminController@listarDataTable');

        //::::::::::::::::::::::: CONTROLLER SERVICIO: CRUD DE TITULO ::::::::::::::::::::::::::
        Route::get('/adminServicioTitulo', 'Admin\AdminController@adminServicioTitulo');
        Route::get('/listarDataTableTitulo','Admin\AdminController@listarDataTableTitulo');
        Route::post('/servicioGrabarTitulo','Admin\AdminController@servicioGrabarTitulo');
        Route::post('/servicioEditarTitulo','Admin\AdminController@servicioEditarTitulo');

    });



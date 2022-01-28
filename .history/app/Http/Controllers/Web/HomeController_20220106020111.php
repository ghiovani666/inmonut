<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;

//ENVIAR CORREOS
use Mail;
use App\Mail\EnviarCorreosInfo;

class HomeController extends Controller
{
    //Para inciar la pagina del index al ser llamado
    public function viewHome(){
        $slider_ = DB::table('home_slider')->get();
        $clases_ = DB::table('home_clases')->get();
        $fitness_ = DB::table('home_fitness')->get();
        $entrenador_ = DB::table('home_entrenador')->get();

    	return view('web.layouts.pages.index')->with(compact('clases_'))->with(compact('slider_'))->with(compact('fitness_'))->with(compact('entrenador_'));
    }
    public function viewContacto(){
    	return view('web.layouts.pages.contacto');
    }
    public function viewServicioTenis(){
        $rowData_ = DB::table('servicio_training')->get();
    	return view('web.layouts.pages.servicioTenis')->with(compact('rowData_'));
    }
    public function viewServicioPadel(){
        $rowData_ = DB::table('servicio_training')->get();
    	return view('web.layouts.pages.servicioPadel')->with(compact('rowData_'));
    }
    public function viewServicioFisio(){
        $rowData_ = DB::table('servicio_training')->get();
    	return view('web.layouts.pages.servicioFisio')->with(compact('rowData_'));
    }
    public function viewServicioFitness(){
        $rowData_ = DB::table('servicio_training')->get();
    	return view('web.layouts.pages.servicioFitness')->with(compact('rowData_'));
    }


    public function viewLogin(){
    	return view('web.layouts.pages.login');
    }

    //ENVIAR CORREO DE INFORMACION
    public function enviar_email_informacion(Request $request)
    {

    var_dump($request);

    }
    
}

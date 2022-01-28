<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;
use Session;
//ENVIAR CORREOS
use Mail;
use App\Mail\EnviarCorreosInfo;

class HomeController extends Controller
{
    //Para inciar la pagina del index al ser llamado
    public function viewHome(){
        $slider_ = DB::table('web_home')->get();
        $clases_ = DB::table('web_home')->where('id_home', '>', 6)->get();
        $fitness_ = DB::table('web_home')->where('id_home', '>', 12)->get();
        $entrenador_ = DB::table('web_home')->where('id_home', '>', 16)->get();

    	return view('web.layouts.pages.index')->with(compact('clases_'))->with(compact('slider_'))->with(compact('fitness_'))->with(compact('entrenador_'));
    }




    public function viewServices1(){
    	return view('web.layouts.pages.servicio1');
    }
    public function viewServices2(){
    	return view('web.layouts.pages.servicio2');
    }
    public function viewServices3(){
    	return view('web.layouts.pages.servicio3');
    }
    public function viewServices4(){
    	return view('web.layouts.pages.servicio4');
    }
    public function viewServices5(){
    	return view('web.layouts.pages.servicio5');
    }
    public function viewServices6(){
    	return view('web.layouts.pages.servicio6');
    }
    public function viewEquipos(){
    	return view('web.layouts.pages.equipos');
    }

    public function viewEvento(){
    	return view('web.layouts.pages.servicio_evento');
    }
    public function viewBono(){
    	return view('web.layouts.pages.servicio_bonos');
    }
    public function viewNoticia(){
    	return view('web.layouts.pages.servicio_noticias');
    }
    public function viewReto(){
    	return view('web.layouts.pages.servicio_retos');
    }





    public function viewLogin(){
    	return view('web.layouts.pages.login');
    }

    //ENVIAR CORREO DE INFORMACION
    public function enviar_email_informacion(Request $request)
    {
        Mail::to('ghiovani999@gmail.com')
        ->send(new EnviarCorreosInfo([
            'txt_nombre' => $request->txt_nombre,
            'txt_email' => $request->txt_email,
            'txt_telefono' => $request->txt_telefono,
            'txt_asunto' => $request->txt_asunto,
            'txt_descripcion' => $request->txt_descripcion,
        ])); 
        return response()->json(['data' => '<p class="alert alert-success">El formulario de contacto se envio correctamente</p> ']);
    }

}
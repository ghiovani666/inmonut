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
    public function viewHome(){
        $slider_ = DB::table('web_home')->get();
        $clases_ = DB::table('web_home')->where('id_home', '>', 6)->get();
        $fitness_ = DB::table('web_home')->where('id_home', '>', 12)->get();
        $entrenador_ = DB::table('web_home')->where('id_home', '>', 16)->get();
    	return view('web.layouts.pages.index')->with(compact('clases_'))->with(compact('slider_'))->with(compact('fitness_'))->with(compact('entrenador_'));
    }
    public function viewLogin(){
    	return view('web.layouts.pages.login');
    }
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
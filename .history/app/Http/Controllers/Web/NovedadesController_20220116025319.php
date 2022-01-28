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

class NovedadesController extends Controller
{
    public function viewEvento(){
    	return view('web.layouts.pages.novedades.servicio_evento');
    }
    public function viewBono(){
    	return view('web.layouts.pages.novedades.servicio_bonos');
    }
    public function viewNoticia(){
    	return view('web.layouts.pages.novedades.servicio_noticias');
    }
    public function viewReto(){
    	return view('web.layouts.pages.novedades.servicio_retos');
    }
}
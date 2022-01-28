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

class PackController extends Controller
{

    public function viewPacks(){
    	return view('web.layouts.pages.pack.packs');
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

}
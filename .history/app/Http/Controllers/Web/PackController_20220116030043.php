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
    	return view('web.layouts.pages.pack.servicio1');
    }
    public function viewServices2(){
    	return view('web.layouts.pages.pack.servicio2');
    }
    public function viewServices3(){
    	return view('web.layouts.pages.pack.servicio3');
    }
    public function viewServices4(){
    	return view('web.layouts.pages.pack.servicio4');
    }
    public function viewServices5(){
    	return view('web.layouts.pages.pack.servicio5');
    }
    public function viewServices6(){
    	return view('web.layouts.pages.pack.servicio6');
    }

}
<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;

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
   

    public function viewLogin(){
    	return view('web.layouts.pages.login');
    }

}

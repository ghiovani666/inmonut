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




    public function viewAbout(){
        $rowData_ = DB::table('web_novedad')->where("id_servicio",5)->get();
        return view('web.layouts.pages.quienes_somos')->with(compact('rowData_'));
    }



}
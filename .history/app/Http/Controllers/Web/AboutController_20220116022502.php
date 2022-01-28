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

class AboutController extends Controller
{
    public function viewAbout(){
        $rowData_ = DB::table('web_novedad')->where("id_servicio",5)->get();
        return view('web.layouts.pages.about.quienes_somos')->with(compact('rowData_'));
    }
}
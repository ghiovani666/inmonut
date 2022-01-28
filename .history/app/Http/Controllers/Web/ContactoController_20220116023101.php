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

class ContactoController extends Controller
{
        public function viewLocation(){
            $rowData_ = DB::table('web_novedad')->where("id_servicio",6)->get();
            return view('web.layouts.pages.location.localizacion')->with(compact('rowData_'));
        }
}
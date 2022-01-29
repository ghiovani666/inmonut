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
    public function viewContacto(){
    	return view('web.layouts.pages.contacto.contacto');
    }

    public function contactaAhora(){
        $rowData_ = DB::table('web_novedad')->where("id_servicio",8)->get();
        return view('web.layouts.pages.contacto.contactaAhora')->with(compact('rowData_'));
    }
}
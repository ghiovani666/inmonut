<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Storage;
use Image;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Filesystem\Filesystem;


class ServicioController extends Controller {

  public function adminServicioTenis() {
    $clases_ = DB::table('web_servicio')->where("id_servicio",1)->get();
    return view('admin.servicios.servicioTenis')->with(compact('clases_'));
  }

  public function adminServicioPadel() {
    $clases_ = DB::table('web_servicio')->where("id_servicio",2)->get();
    return view('admin.servicios.servicioPadel')->with(compact('clases_'));
  }
  public function adminServicioFisio() {
    $clases_ = DB::table('web_servicio')->where("id_servicio",3)->get();
    return view('admin.servicios.servicioFisio')->with(compact('clases_'));
  }
  public function adminServicioFitness() {
    $clases_ = DB::table('web_servicio')->where("id_servicio",4)->get();
    return view('admin.servicios.servicioFitness')->with(compact('clases_'));
  }

}
<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Storage;
use Image;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Filesystem\Filesystem;


class HomeController extends Controller {

  public function homes() {
    return view('admin.home.homes');
  }
  public function bienvenidos () {
    $clases_ = DB::table('web_novedad')->where("id_servicio",5)->get();
    return view('admin.home.bienvenidos')->with(compact('clases_'));
  }
  public function quienesSomos () {
    $clases_ = DB::table('web_novedad')->where("id_servicio",5)->get();
    return view('admin.home.quienesSomos')->with(compact('clases_'));
  }
  public function localizacion () {
    $clases_ = DB::table('web_novedad')->where("id_servicio",6)->get();
    return view('admin.home.localizacion')->with(compact('clases_'));
  }
}
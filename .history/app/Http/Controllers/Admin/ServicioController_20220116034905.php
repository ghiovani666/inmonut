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

    public function bienvenidos () {
      $clases_ = DB::table('servicio_novedad')->where("id_servicio",5)->get();
      return view('admin.home.bienvenidos')->with(compact('clases_'));
    }

}
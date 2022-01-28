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

    public function index() {
      return view('admin.index');
    }

    public function homes() {
      return view('admin.homes');
    }

    public function slider() {
      $slider_ = DB::table('home_slider')->where("id_home",">",1)->get();
      $slider_xx = DB::table('home_slider')->get();
      $footer_ = DB::table('home_footer')->get();
      return view('admin.slider')->with(compact('footer_'))->with(compact('slider_'))->with(compact('slider_xx'));
    }

    

    public function bienvenidos () {
      $clases_ = DB::table('servicio_novedad')->where("id_servicio",5)->get();
      return view('admin.home.bienvenidos')->with(compact('clases_'));
    }

}
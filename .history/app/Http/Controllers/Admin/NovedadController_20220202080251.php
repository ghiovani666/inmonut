<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Storage;
use Image;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Filesystem\Filesystem;


class NovedadController extends Controller {

 // ::::::::::::::::::::::::: NOVEDADES :::::::::::::::::::::::::::::  
 public function novedadEvento() {
  $clases_ = DB::table('web_novedad')->where("id_servicio",1)->get();
  return view('admin.novedades.novedadEvento')->with(compact('clases_'));
}
public function novedadBono() {
  $clases_ = DB::table('web_novedad')->where("id_servicio",2)->get();
  return view('admin.novedades.novedadBono')->with(compact('clases_'));
}
public function novedadNoticia() {
  $clases_ = DB::table('web_novedad')->where("id_servicio",3)->get();
  return view('admin.novedades.novedadNoticia')->with(compact('clases_'));
}
public function novedadReto() {
  $clases_ = DB::table('web_novedad')->where("id_servicio",4)->get();
  return view('admin.novedades.novedadReto')->with(compact('clases_'));
}

public function saveServiciosNovedad(Request $request) 
{       
  
      try {
        DB::table('web_novedad')
        ->where("id_servicio",$request->txt_values)
        ->update([
          'superior_titulo1' => $request->superior_titulo1,
          'superior_titulo2' => $request->superior_titulo2,
          'inferior_titulo' => $request->inferior_titulo,
          'inferior_descripcion' => $request->inferior_descripcion,
          'inferior_url_image' => $request->inferior_url_image
        ]); 

        dd( $request->txt_values);
      } catch (\Throwable $th) {
        //throw $th;
  }
        return back()->with('message','Se Actualizo');
}

public function imagenServiciosNovedad(Request $request) 
{        
        $file = $request->file('image');

        switch($request->txt_values) {
          case 'superior': 
            
                if($file){
                  $url_imagen =  DB::table('web_novedad')->where('id_servicio', '=', $request->txt_id_home)->get();
                 
                  if(file_exists(str_replace('/template_admin/', 'template_admin/',  $url_imagen[0]->superior_url_image))){
                    unlink(str_replace('/template_admin/', 'template_admin/',  $url_imagen[0]->superior_url_image));
                  }
                  
                    $filename  =  time() .'_'.$file->getClientOriginalName(); 
                    $path = "template_admin/img";
                    $file->move($path,$filename); 
      
                    DB::table('web_novedad')
                      ->where("id_servicio",$request->txt_id_home)
                      ->update([
                      'superior_url_image' => '/template_admin/img/'.$filename, 
                      ]); 
    
                  }
                      $data=  DB::table('web_novedad')->where('id_servicio', '=', $request->txt_id_home)->get();
                      $html='';
                      $html.='
                      <img class="card-img-top" src="'.$data[0]->superior_url_image.'" alt="Photo">
                    ';
                    return [$html,$request->txt_values];//SI ES SUPERIOR O INFERIOR

                break;
          case 'inferior': 
            
            if($file){
              $url_imagen =  DB::table('web_novedad')->where('id_servicio', '=', $request->txt_id_home)->get();
             
              if(file_exists(str_replace('/template_admin/', 'template_admin/',  $url_imagen[0]->inferior_url_image))){
                unlink(str_replace('/template_admin/', 'template_admin/',  $url_imagen[0]->inferior_url_image));
              }
              
                $filename  =  time() .'_'.$file->getClientOriginalName(); 
                $path = "template_admin/img";
                $file->move($path,$filename); 
  
                DB::table('web_novedad')
                  ->where("id_servicio",$request->txt_id_home)
                  ->update([
                  'inferior_url_image' => '/template_admin/img/'.$filename, 
                  ]); 

              }
                  $data=  DB::table('web_novedad')->where('id_servicio', '=', $request->txt_id_home)->get();
                  $html='';
                  $html.='
                  <img class="card-img-top" src="'.$data[0]->inferior_url_image.'" alt="Photo">
                ';
                  return [$html,$request->txt_values];//SI ES SUPERIOR O INFERIOR

                  break;
          
      }
}


}
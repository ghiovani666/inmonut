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
  public function slider() {
    $slider_ = DB::table('web_home')->where("id_home",">",1)->where("id_home","<",6)->get();
    $slider_xx = DB::table('web_home')->get();
    $footer_ = DB::table('web_footer')->get();
    return view('admin.home.slider')->with(compact('footer_'))->with(compact('slider_'))->with(compact('slider_xx'));
  }
  public function clases() {
    $clases_ = DB::table('web_home')->where("id_home",">",6)->where("id_home","<",13)->get();
    return view('admin.home.clases')->with(compact('clases_'));
  }
  public function fitness() {
    $clases_ = DB::table('web_home')->where("id_home",">",12)->where("id_home","<",17)->get();
    return view('admin.home.fitness')->with(compact('clases_'));
  }
  public function entrenador() {
    $clases_ = DB::table('web_home')->where("id_home",">",16)->where("id_home","<",21)->get();
    return view('admin.home.entrenador')->with(compact('clases_'));
  }
    // EXTRAER DATOS DASHBOARD HOME
    public function dashboard_home_edit_imagen(Request $request) 
    {        
      if($request->txt_isclass=="slider"){
        $result = DB::table('web_home')
        ->where("id_home",$request->txt_id_home)
        ->get();
        return json_encode($result);
      }else if($request->txt_isclass=="clases"){
        $result = DB::table('web_home')
        ->where("id_home",$request->txt_id_home)
        ->get();
        return json_encode($result);
      }

    }

    

  // ACTUALIZAR IMAGEN DASHBOARD HOME
  public function dashboard_home_actualizar_imagen(Request $request) 
  {        
          $file = $request->file('image');

          switch($request->txt_values) {
            case 'slider': 
              
                  if($file){
                    $url_imagen =  DB::table('web_home')->where('id_home', '=', $request->txt_id_home)->get();
                   
                    if(file_exists(str_replace('/template_admin/', 'template_admin/',  $url_imagen[0]->url_image))){
                      unlink(str_replace('/template_admin/', 'template_admin/',  $url_imagen[0]->url_image));
                    }
                    
                    $filename  =  time() .'_'.$file->getClientOriginalName(); // name of file
                    $path = "template_admin/img";
                    $file->move($path,$filename); // save to our local folder
      
                    DB::table('web_home')
                      ->where("id_home",$request->txt_id_home)
                      ->update([
                      'title1' => $request->txt_titulo1,
                      'title2' => $request->txt_titulo2,
                      'url_image' => '/template_admin/img/'.$filename, 
                      ]); 
      
                    }else{
                      DB::table('web_home')
                        ->where("id_home",$request->txt_id_home)
                        ->update([
                        'title1' => $request->txt_titulo1,
                        'title2' => $request->txt_titulo2,
                        ]); 
          
                    }
      
                        $data=  DB::table('web_home')->where('id_home', '=', $request->txt_id_home)->get();
                        $html='';
                        $html.='
                        <img class="card-img-top" src="'.$data[0]->url_image.'" alt="Photo">
                        <h6>'.$data[0]->title1.'</h6>
                        <h6>'.$data[0]->title2.'</h6>
                      ';
                        return [$html,$data[0]->id_home];

                  break;
            case 'clases': 
              
                  if($file){
                    $url_imagen =  DB::table('web_home')->where('id_home', '=', $request->txt_id_home)->get();
                    
                    if(file_exists(str_replace('/template_admin/', 'template_admin/',  $url_imagen[0]->url_image))){
                        unlink(str_replace('/template_admin/', 'template_admin/',  $url_imagen[0]->url_image));
                      }

                      $filename  =  time() .'_'.$file->getClientOriginalName(); // name of file
                      $path = "template_admin/img";
                      $file->move($path,$filename); // save to our local folder

                    DB::table('web_home')
                      ->where("id_home",$request->txt_id_home)
                      ->update([
                      'title1' => $request->txt_titulo1,
                      'title2' => $request->txt_titulo2,
                      'url_image' => '/template_admin/img/'.$filename, 
                      ]); 
      
                    }else{
                      DB::table('web_home')
                        ->where("id_home",$request->txt_id_home)
                        ->update([
                        'title1' => $request->txt_titulo1,
                        'title2' => $request->txt_titulo2,
                        ]); 
          
                    }
      
                      $data=  DB::table('web_home')->where('id_home', '=', $request->txt_id_home)->get();
                      $html='';
                      $html.='
                      <img class="card-img-top" src="'.$data[0]->url_image.'" alt="Photo">
                      <h6>'.$data[0]->title1.'</h6>
                      <h6>'.$data[0]->title2.'</h6>
                    ';
                    return [$html,$data[0]->id_home];
                    break;

            case 'fitness': 
      
              if($file){
                $url_imagen =  DB::table('web_home')->where('id_home', '=', $request->txt_id_home)->get();
                
                if(file_exists(str_replace('/template_admin/', 'template_admin/',  $url_imagen[0]->url_image))){
                    unlink(str_replace('/template_admin/', 'template_admin/',  $url_imagen[0]->url_image));
                  }

                  $filename  =  time() .'_'.$file->getClientOriginalName(); // name of file
                  $path = "template_admin/img";
                  $file->move($path,$filename); // save to our local folder

                DB::table('web_home')
                  ->where("id_home",$request->txt_id_home)
                  ->update([
                  'title1' => $request->txt_titulo1,
                  'title2' => $request->txt_titulo2,
                  'url_image' => '/template_admin/img/'.$filename, 
                  ]); 

                }else{
                  DB::table('web_home')
                    ->where("id_home",$request->txt_id_home)
                    ->update([
                    'title1' => $request->txt_titulo1,
                    'title2' => $request->txt_titulo2,
                    ]); 
      
                }

                  $data=  DB::table('web_home')->where('id_home', '=', $request->txt_id_home)->get();
                  $html='';
                  $html.='
                  <img class="card-img-top" src="'.$data[0]->url_image.'" alt="Photo">
                  <h6>'.$data[0]->title1.'</h6>
                  <h6>'.$data[0]->title2.'</h6>
                ';
                return [$html,$data[0]->id_home];
                break;

          case 'entrenador': 

            if($file){
              $url_imagen =  DB::table('web_entrenador')->where('id_home', '=', $request->txt_id_home)->get();
              
              if(file_exists(str_replace('/template_admin/', 'template_admin/',  $url_imagen[0]->url_image))){
                  unlink(str_replace('/template_admin/', 'template_admin/',  $url_imagen[0]->url_image));
                }

                $filename  =  time() .'_'.$file->getClientOriginalName(); // name of file
                $path = "template_admin/img";
                $file->move($path,$filename); // save to our local folder

              DB::table('web_entrenador')
                ->where("id_home",$request->txt_id_home)
                ->update([
                'title1' => $request->txt_titulo1,
                'title2' => $request->txt_titulo2,
                'url_image' => '/template_admin/img/'.$filename, 
                ]); 

              }else{
                DB::table('web_entrenador')
                  ->where("id_home",$request->txt_id_home)
                  ->update([
                  'title1' => $request->txt_titulo1,
                  'title2' => $request->txt_titulo2,
                  ]); 
    
              }

                $data=  DB::table('web_entrenador')->where('id_home', '=', $request->txt_id_home)->get();
                $html='';
                $html.='
                <img class="card-img-top" src="'.$data[0]->url_image.'" alt="Photo">
                <h6>'.$data[0]->title1.'</h6>
                <h6>'.$data[0]->title2.'</h6>
              ';
              return [$html,$data[0]->id_home];
              break;
            
        }
  }

    // ACTUALIZAR IMAGEN DASHBOARD HOME
    public function dashboard_home_actualizar_footer(Request $request) 
    {        
          $file = $request->file('txt_footer_image');
            if($file){
                $url_imagen =  DB::table('web_footer')->where('id_footer', '=',1)->get();
 
                if(file_exists(str_replace('/template_admin/', 'template_admin/',  $url_imagen[0]->url_image))){
                 unlink(str_replace('/template_admin/', 'template_admin/',  $url_imagen[0]->url_image));
               }
 
                $filename  =  time() .'_'.$file->getClientOriginalName();
                $path = "template_admin/img";
                $file->move($path,$filename);
  
                DB::table('web_footer')
                  ->where("id_footer",1)
                  ->update([
                  'descripcion' => $request->txt_footer_descripcion_logo,
                  'horario' => $request->txt_footer_horario,
                  'direccion' => $request->txt_footer_direccion,
                  'telefono' => $request->txt_footer_telefono,
                  'web' => $request->txt_footer_web,
                  'boletin' => $request->txt_footer_boletin,
 
                  'red_social_facebook' => $request->txt_footer_facebook,
                  'red_social_instagram' => $request->txt_footer_instagram,
                  'red_social_tweter' => $request->txt_footer_tweter,
                  'email' => $request->txt_footer_email,
 
                  'url_image' => '/template_admin/img/'.$filename, 
                  'updated_at' =>date("Y-m-d H:i:s")
                  ]); 
  
            }else{
              DB::table('web_footer')
                ->where("id_footer",1)
                ->update([
                 'descripcion' => $request->txt_footer_descripcion_logo,
                 'horario' => $request->txt_footer_horario,
                 'direccion' => $request->txt_footer_direccion,
                 'telefono' => $request->txt_footer_telefono,
                 'web' => $request->txt_footer_web,
                 'boletin' => $request->txt_footer_boletin,
                 'red_social_facebook' => $request->txt_footer_facebook,
                 'red_social_instagram' => $request->txt_footer_instagram,
                 'red_social_tweter' => $request->txt_footer_tweter,
                 'email' => $request->txt_footer_email,
 
                 'updated_at' =>date("Y-m-d H:i:s")
                ]); 
  
            }
  
            return back()->with('message','Se Actualizo');
  
    }
    public function clases_guardar_descripcion(Request $request) 
    {        
           DB::table('web_home')
           ->where("id_home",7)
           ->update(['descripcion' => $request->txt_descripcion]); 
           return back()->with('message','Se Actualizo');
     }
 
}
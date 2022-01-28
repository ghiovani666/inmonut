<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Storage;
use Image;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Filesystem\Filesystem;


class AdminController extends Controller {

    public function index() {
      return view('admin.index');
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

  public function clases_guardar_descripcion(Request $request) 
   {        
          DB::table('web_home')
          ->where("id_home",7)
          ->update(['descripcion' => $request->txt_descripcion]); 
          return back()->with('message','Se Actualizo');
    }

  public function fitness_guardar_descripcion(Request $request) 
  {        
          DB::table('web_home')
          ->where("id_home",1)
          ->update(['descripcion' => $request->txt_descripcion]); 
          return back()->with('message','Se Actualizo');
    }

    public function entrenador_guardar_descripcion(Request $request) 
    {        
            DB::table('web_entrenador')
            ->where("id_home",1)
            ->update(['descripcion' => $request->txt_descripcion]); 
            return back()->with('message','Se Actualizo');
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




  public function saveServiciosTraining(Request $request) 
  {        
          DB::table('web_servicio')
          ->where("id_servicio",$request->txt_values)
          ->update([
            'superior_titulo1' => $request->superior_titulo1,
            'superior_titulo2' => $request->superior_titulo2,
            'inferior_titulo' => $request->inferior_titulo,
            'inferior_descripcion' => $request->inferior_descripcion,
          ]); 
          return back()->with('message','Se Actualizo');
  }

    public function imagenServiciosTraining(Request $request) 
    {        
            $file = $request->file('image');
  
            switch($request->txt_values) {
              case 'superior': 
                
                    if($file){
                      $url_imagen =  DB::table('web_servicio')->where('id_servicio', '=', $request->txt_id_home)->get();
                     
                      if(file_exists(str_replace('/template_admin/', 'template_admin/',  $url_imagen[0]->superior_url_image))){
                        unlink(str_replace('/template_admin/', 'template_admin/',  $url_imagen[0]->superior_url_image));
                      }
                      
                        $filename  =  time() .'_'.$file->getClientOriginalName(); 
                        $path = "template_admin/img";
                        $file->move($path,$filename); 
          
                        DB::table('web_servicio')
                          ->where("id_servicio",$request->txt_id_home)
                          ->update([
                          'superior_url_image' => '/template_admin/img/'.$filename, 
                          ]); 
        
                      }
                          $data=  DB::table('web_servicio')->where('id_servicio', '=', $request->txt_id_home)->get();
                          $html='';
                          $html.='
                          <img class="card-img-top" src="'.$data[0]->superior_url_image.'" alt="Photo">
                        ';
                        return [$html,$request->txt_values];//SI ES SUPERIOR O INFERIOR
  
                    break;
              case 'inferior': 
                
                if($file){
                  $url_imagen =  DB::table('web_servicio')->where('id_servicio', '=', $request->txt_id_home)->get();
                 
                  if(file_exists(str_replace('/template_admin/', 'template_admin/',  $url_imagen[0]->inferior_url_image))){
                    unlink(str_replace('/template_admin/', 'template_admin/',  $url_imagen[0]->inferior_url_image));
                  }
                  
                    $filename  =  time() .'_'.$file->getClientOriginalName(); 
                    $path = "template_admin/img";
                    $file->move($path,$filename); 
      
                    DB::table('web_servicio')
                      ->where("id_servicio",$request->txt_id_home)
                      ->update([
                      'inferior_url_image' => '/template_admin/img/'.$filename, 
                      ]); 
    
                  }
                      $data=  DB::table('web_servicio')->where('id_servicio', '=', $request->txt_id_home)->get();
                      $html='';
                      $html.='
                      <img class="card-img-top" src="'.$data[0]->inferior_url_image.'" alt="Photo">
                    ';
                      return [$html,$request->txt_values];//SI ES SUPERIOR O INFERIOR

                      break;
              
          }
    }
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
            if($request->inferior_url_image==null || $request->inferior_url_image==''){
                DB::table('web_novedad')
                ->where("id_servicio",$request->txt_values)
                ->update([
                  'superior_titulo1' => $request->superior_titulo1,
                  'superior_titulo2' => $request->superior_titulo2,
                  'inferior_titulo' => $request->inferior_titulo,
                  'inferior_descripcion' => $request->inferior_descripcion,
                  
                  
                ]); 
              }else{
                DB::table('web_novedad')
                ->where("id_servicio",$request->txt_values)
                ->update([
                  'superior_titulo1' => $request->superior_titulo1,
                  'superior_titulo2' => $request->superior_titulo2,
                  'inferior_titulo' => $request->inferior_titulo,
                  'inferior_descripcion' => $request->inferior_descripcion,
                  'inferior_url_image' => $request->inferior_url_image,
                ]); 
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
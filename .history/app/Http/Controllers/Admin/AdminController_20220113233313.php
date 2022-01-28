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

    public function homes() {
      return view('admin.homes');
    }

    public function slider() {
      $slider_ = DB::table('home_slider')->where("id_home",">",1)->get();
      $slider_xx = DB::table('home_slider')->get();
      $footer_ = DB::table('home_footer')->get();
      return view('admin.slider')->with(compact('footer_'))->with(compact('slider_'))->with(compact('slider_xx'));
    }

    public function clases() {
      $clases_ = DB::table('home_clases')->get();

      return view('admin.clases')->with(compact('clases_'));
    }

    public function fitness() {
      $clases_ = DB::table('home_fitness')->get();

      return view('admin.fitness')->with(compact('clases_'));
    }

    public function entrenador() {
      $clases_ = DB::table('home_entrenador')->get();

      return view('admin.entrenador')->with(compact('clases_'));
    }


  // EXTRAER DATOS DASHBOARD HOME
    public function dashboard_home_edit_imagen(Request $request) 
    {        
      if($request->txt_isclass=="slider"){
        $result = DB::table('home_slider')
        ->where("id_home",$request->txt_id_home)
        ->get();
        return json_encode($result);
      }else if($request->txt_isclass=="clases"){
        $result = DB::table('home_clases')
        ->where("id_clases",$request->txt_id_home)
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
                    $url_imagen =  DB::table('home_slider')->where('id_home', '=', $request->txt_id_home)->get();
                   
                    if(file_exists(str_replace('/template_admin/', 'template_admin/',  $url_imagen[0]->url_image))){
                      unlink(str_replace('/template_admin/', 'template_admin/',  $url_imagen[0]->url_image));
                    }
                    
                    $filename  =  time() .'_'.$file->getClientOriginalName(); // name of file
                    $path = "template_admin/img";
                    $file->move($path,$filename); // save to our local folder
      
                    DB::table('home_slider')
                      ->where("id_home",$request->txt_id_home)
                      ->update([
                      'title1' => $request->txt_titulo1,
                      'title2' => $request->txt_titulo2,
                      'url_image' => '/template_admin/img/'.$filename, 
                      ]); 
      
                    }else{
                      DB::table('home_slider')
                        ->where("id_home",$request->txt_id_home)
                        ->update([
                        'title1' => $request->txt_titulo1,
                        'title2' => $request->txt_titulo2,
                        ]); 
          
                    }
      
                        $data=  DB::table('home_slider')->where('id_home', '=', $request->txt_id_home)->get();
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
                    $url_imagen =  DB::table('home_clases')->where('id_clases', '=', $request->txt_id_home)->get();
                    
                    if(file_exists(str_replace('/template_admin/', 'template_admin/',  $url_imagen[0]->url_image))){
                        unlink(str_replace('/template_admin/', 'template_admin/',  $url_imagen[0]->url_image));
                      }

                      $filename  =  time() .'_'.$file->getClientOriginalName(); // name of file
                      $path = "template_admin/img";
                      $file->move($path,$filename); // save to our local folder

                    DB::table('home_clases')
                      ->where("id_clases",$request->txt_id_home)
                      ->update([
                      'title1' => $request->txt_titulo1,
                      'title2' => $request->txt_titulo2,
                      'url_image' => '/template_admin/img/'.$filename, 
                      ]); 
      
                    }else{
                      DB::table('home_clases')
                        ->where("id_clases",$request->txt_id_home)
                        ->update([
                        'title1' => $request->txt_titulo1,
                        'title2' => $request->txt_titulo2,
                        ]); 
          
                    }
      
                      $data=  DB::table('home_clases')->where('id_clases', '=', $request->txt_id_home)->get();
                      $html='';
                      $html.='
                      <img class="card-img-top" src="'.$data[0]->url_image.'" alt="Photo">
                      <h6>'.$data[0]->title1.'</h6>
                      <h6>'.$data[0]->title2.'</h6>
                    ';
                    return [$html,$data[0]->id_clases];
                    break;

            case 'fitness': 
      
              if($file){
                $url_imagen =  DB::table('home_fitness')->where('id_fitness', '=', $request->txt_id_home)->get();
                
                if(file_exists(str_replace('/template_admin/', 'template_admin/',  $url_imagen[0]->url_image))){
                    unlink(str_replace('/template_admin/', 'template_admin/',  $url_imagen[0]->url_image));
                  }

                  $filename  =  time() .'_'.$file->getClientOriginalName(); // name of file
                  $path = "template_admin/img";
                  $file->move($path,$filename); // save to our local folder

                DB::table('home_fitness')
                  ->where("id_fitness",$request->txt_id_home)
                  ->update([
                  'title1' => $request->txt_titulo1,
                  'title2' => $request->txt_titulo2,
                  'url_image' => '/template_admin/img/'.$filename, 
                  ]); 

                }else{
                  DB::table('home_fitness')
                    ->where("id_fitness",$request->txt_id_home)
                    ->update([
                    'title1' => $request->txt_titulo1,
                    'title2' => $request->txt_titulo2,
                    ]); 
      
                }

                  $data=  DB::table('home_fitness')->where('id_fitness', '=', $request->txt_id_home)->get();
                  $html='';
                  $html.='
                  <img class="card-img-top" src="'.$data[0]->url_image.'" alt="Photo">
                  <h6>'.$data[0]->title1.'</h6>
                  <h6>'.$data[0]->title2.'</h6>
                ';
                return [$html,$data[0]->id_fitness];
                break;

          case 'entrenador': 

            if($file){
              $url_imagen =  DB::table('home_entrenador')->where('id_entrenador', '=', $request->txt_id_home)->get();
              
              if(file_exists(str_replace('/template_admin/', 'template_admin/',  $url_imagen[0]->url_image))){
                  unlink(str_replace('/template_admin/', 'template_admin/',  $url_imagen[0]->url_image));
                }

                $filename  =  time() .'_'.$file->getClientOriginalName(); // name of file
                $path = "template_admin/img";
                $file->move($path,$filename); // save to our local folder

              DB::table('home_entrenador')
                ->where("id_entrenador",$request->txt_id_home)
                ->update([
                'title1' => $request->txt_titulo1,
                'title2' => $request->txt_titulo2,
                'url_image' => '/template_admin/img/'.$filename, 
                ]); 

              }else{
                DB::table('home_entrenador')
                  ->where("id_entrenador",$request->txt_id_home)
                  ->update([
                  'title1' => $request->txt_titulo1,
                  'title2' => $request->txt_titulo2,
                  ]); 
    
              }

                $data=  DB::table('home_entrenador')->where('id_entrenador', '=', $request->txt_id_home)->get();
                $html='';
                $html.='
                <img class="card-img-top" src="'.$data[0]->url_image.'" alt="Photo">
                <h6>'.$data[0]->title1.'</h6>
                <h6>'.$data[0]->title2.'</h6>
              ';
              return [$html,$data[0]->id_entrenador];
              break;
            
        }
  }

  public function clases_guardar_descripcion(Request $request) 
   {        
          DB::table('home_clases')
          ->where("id_clases",1)
          ->update(['descripcion' => $request->txt_descripcion]); 
          return back()->with('message','Se Actualizo');
    }

  public function fitness_guardar_descripcion(Request $request) 
  {        
          DB::table('home_fitness')
          ->where("id_fitness",1)
          ->update(['descripcion' => $request->txt_descripcion]); 
          return back()->with('message','Se Actualizo');
    }

    public function entrenador_guardar_descripcion(Request $request) 
    {        
            DB::table('home_entrenador')
            ->where("id_entrenador",1)
            ->update(['descripcion' => $request->txt_descripcion]); 
            return back()->with('message','Se Actualizo');
      }

      // ACTUALIZAR IMAGEN DASHBOARD HOME
   public function dashboard_home_actualizar_footer(Request $request) 
   {        
         $file = $request->file('txt_footer_image');
           if($file){
               $url_imagen =  DB::table('home_footer')->where('id_footer', '=',1)->get();
               unlink(str_replace('/template_admin/', 'template_admin/',  $url_imagen[0]->url_image));
               $filename  =  time() .'_'.$file->getClientOriginalName(); // name of file
               $path = "template_admin/img";
               $file->move($path,$filename); // save to our local folder
 
               DB::table('home_footer')
                 ->where("id_footer",1)
                 ->update([
                 'descripcion' => $request->txt_footer_descripcion_logo,
                 'horario' => $request->txt_footer_horario,
                 'direccion' => $request->txt_footer_direccion,
                 'telefono' => $request->txt_footer_telefono,
                 'web' => $request->txt_footer_web,
                 'boletin' => $request->txt_footer_boletin,
                 'url_image' => '/template_admin/img/'.$filename, 
                 ]); 
 
           }else{
             DB::table('home_footer')
               ->where("id_footer",1)
               ->update([
                'descripcion' => $request->txt_footer_descripcion_logo,
                'horario' => $request->txt_footer_horario,
                'direccion' => $request->txt_footer_direccion,
                'telefono' => $request->txt_footer_telefono,
                'web' => $request->txt_footer_web,
                'boletin' => $request->txt_footer_boletin,
               ]); 
 
           }
 
           return back()->with('message','Se Actualizo');
 
   }

  //::::::::::::::::::::::::::::::::::::::SERVICIOS TRAININNG
   public function adminServicioTenis() {
    $clases_ = DB::table('servicio_training')->where("id_servicio",1)->get();
    $rowData_cb = DB::table('servicio_training_titulo')->get();
    $rowData_ = DB::table('servicio_training_titulo')->join('servicio_training_descripcion', 'servicio_training_titulo.id_titulo', '=', 'servicio_training_descripcion.id_titulo')->where('servicio_training_descripcion.id_servicio', '=', 1)->get()->toArray();




   
      // return Datatables::of($rowData_)
      // ->addIndexColumn()
      // ->addColumn('action', function($row){
      
      //     $action = '<a class="btn btn-info" id="show-user" data-toggle="modal" data-id='.$row->id.'>Show</a>
      //     <a class="btn btn-success" id="edit-user" data-toggle="modal" data-id='.$row->id.'>Edit </a>
      //     <meta name="csrf-token" content="{{ csrf_token() }}">
      //     <a id="delete-user" data-id='.$row->id.' class="btn btn-danger delete-user">Delete</a>';
      
      //     return $action;
      
      // }) ->rawColumns(['action'])->make(true);

      
      // return view('users');



    return view('admin.servicioTenis')->with(compact('clases_'))->with(compact('rowData_'))->with(compact('rowData_cb'));
  }
  public function adminServicioPadel() {
    $clases_ = DB::table('servicio_training')->where("id_servicio",2)->get();
    return view('admin.servicioPadel')->with(compact('clases_'));
  }
  public function adminServicioFisio() {
    $clases_ = DB::table('servicio_training')->where("id_servicio",3)->get();
    return view('admin.servicioFisio')->with(compact('clases_'));
  }
  public function adminServicioFitness() {
    $clases_ = DB::table('servicio_training')->where("id_servicio",4)->get();
    return view('admin.servicioFitness')->with(compact('clases_'));
  }

  public function saveServiciosTraining(Request $request) 
  {        
          DB::table('servicio_training')
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
                      $url_imagen =  DB::table('servicio_training')->where('id_servicio', '=', $request->txt_id_home)->get();
                     
                      if(file_exists(str_replace('/template_admin/', 'template_admin/',  $url_imagen[0]->superior_url_image))){
                        unlink(str_replace('/template_admin/', 'template_admin/',  $url_imagen[0]->superior_url_image));
                      }
                      
                        $filename  =  time() .'_'.$file->getClientOriginalName(); 
                        $path = "template_admin/img";
                        $file->move($path,$filename); 
          
                        DB::table('servicio_training')
                          ->where("id_servicio",$request->txt_id_home)
                          ->update([
                          'superior_url_image' => '/template_admin/img/'.$filename, 
                          ]); 
        
                      }
                          $data=  DB::table('servicio_training')->where('id_servicio', '=', $request->txt_id_home)->get();
                          $html='';
                          $html.='
                          <img class="card-img-top" src="'.$data[0]->superior_url_image.'" alt="Photo">
                        ';
                        return [$html,$request->txt_values];//SI ES SUPERIOR O INFERIOR
  
                    break;
              case 'inferior': 
                
                if($file){
                  $url_imagen =  DB::table('servicio_training')->where('id_servicio', '=', $request->txt_id_home)->get();
                 
                  if(file_exists(str_replace('/template_admin/', 'template_admin/',  $url_imagen[0]->inferior_url_image))){
                    unlink(str_replace('/template_admin/', 'template_admin/',  $url_imagen[0]->inferior_url_image));
                  }
                  
                    $filename  =  time() .'_'.$file->getClientOriginalName(); 
                    $path = "template_admin/img";
                    $file->move($path,$filename); 
      
                    DB::table('servicio_training')
                      ->where("id_servicio",$request->txt_id_home)
                      ->update([
                      'inferior_url_image' => '/template_admin/img/'.$filename, 
                      ]); 
    
                  }
                      $data=  DB::table('servicio_training')->where('id_servicio', '=', $request->txt_id_home)->get();
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
      $clases_ = DB::table('servicio_novedad')->where("id_servicio",1)->get();
      return view('admin.novedades.novedadEvento')->with(compact('clases_'));
    }
    public function novedadBono() {
      $clases_ = DB::table('servicio_novedad')->where("id_servicio",2)->get();
      return view('admin.novedades.novedadBono')->with(compact('clases_'));
    }
    public function novedadNoticia() {
      $clases_ = DB::table('servicio_novedad')->where("id_servicio",3)->get();
      return view('admin.novedades.novedadNoticia')->with(compact('clases_'));
    }
    public function novedadReto() {
      $clases_ = DB::table('servicio_novedad')->where("id_servicio",4)->get();
      return view('admin.novedades.novedadReto')->with(compact('clases_'));
    }
    public function quienesSomos () {
      $clases_ = DB::table('servicio_novedad')->where("id_servicio",5)->get();
      return view('admin.novedades.quienesSomos')->with(compact('clases_'));
    }
    public function localizacion () {
      $clases_ = DB::table('servicio_novedad')->where("id_servicio",6)->get();
      return view('admin.novedades.localizacion')->with(compact('clases_'));
    }

    public function saveServiciosNovedad(Request $request) 
    {       
            if($request->inferior_url_image==null || $request->inferior_url_image==''){
                DB::table('servicio_novedad')
                ->where("id_servicio",$request->txt_values)
                ->update([
                  'superior_titulo1' => $request->superior_titulo1,
                  'superior_titulo2' => $request->superior_titulo2,
                  'inferior_titulo' => $request->inferior_titulo,
                  'inferior_descripcion' => $request->inferior_descripcion,
                  
                  
                ]); 
              }else{
                DB::table('servicio_novedad')
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
                      $url_imagen =  DB::table('servicio_novedad')->where('id_servicio', '=', $request->txt_id_home)->get();
                     
                      if(file_exists(str_replace('/template_admin/', 'template_admin/',  $url_imagen[0]->superior_url_image))){
                        unlink(str_replace('/template_admin/', 'template_admin/',  $url_imagen[0]->superior_url_image));
                      }
                      
                        $filename  =  time() .'_'.$file->getClientOriginalName(); 
                        $path = "template_admin/img";
                        $file->move($path,$filename); 
          
                        DB::table('servicio_novedad')
                          ->where("id_servicio",$request->txt_id_home)
                          ->update([
                          'superior_url_image' => '/template_admin/img/'.$filename, 
                          ]); 
        
                      }
                          $data=  DB::table('servicio_novedad')->where('id_servicio', '=', $request->txt_id_home)->get();
                          $html='';
                          $html.='
                          <img class="card-img-top" src="'.$data[0]->superior_url_image.'" alt="Photo">
                        ';
                        return [$html,$request->txt_values];//SI ES SUPERIOR O INFERIOR
  
                    break;
              case 'inferior': 
                
                if($file){
                  $url_imagen =  DB::table('servicio_novedad')->where('id_servicio', '=', $request->txt_id_home)->get();
                 
                  if(file_exists(str_replace('/template_admin/', 'template_admin/',  $url_imagen[0]->inferior_url_image))){
                    unlink(str_replace('/template_admin/', 'template_admin/',  $url_imagen[0]->inferior_url_image));
                  }
                  
                    $filename  =  time() .'_'.$file->getClientOriginalName(); 
                    $path = "template_admin/img";
                    $file->move($path,$filename); 
      
                    DB::table('servicio_novedad')
                      ->where("id_servicio",$request->txt_id_home)
                      ->update([
                      'inferior_url_image' => '/template_admin/img/'.$filename, 
                      ]); 
    
                  }
                      $data=  DB::table('servicio_novedad')->where('id_servicio', '=', $request->txt_id_home)->get();
                      $html='';
                      $html.='
                      <img class="card-img-top" src="'.$data[0]->inferior_url_image.'" alt="Photo">
                    ';
                      return [$html,$request->txt_values];//SI ES SUPERIOR O INFERIOR

                      break;
              
          }
    }

    //:::::::::::::::::::::::::: CRUD DE SERVICIOS ::::::::::::::::::::::::::

   // ACTUALIZAR IMAGEN DASHBOARD HOME
   public function createServicioTraining(Request $request) 
   {        
         $file = $request->file('image');

           switch($request->isValues) {
            case 'CREAR': 
              
              if($file != NULL){
                  $filename  =  time() .'_'.$file->getClientOriginalName();
                  $path = "template_admin/img";
                  $file->move($path,$filename);
 
                  $result = DB::table('servicio_training_descripcion')->insert([
                      'id_titulo' => $request->txt_titulo_principal, 
                      'id_servicio' => $request->txt_id_servicio, 
                      'title' => $request->txt_sub_titulo, 
                      'descripcion' => $request->txt_descripcion,
                      'url_link' => $request->txt_url_link,
                      'url_image' => '/template_admin/img/'.$filename, 
                      'created_at' => date("Y-m-d H:i:s"),
                      'updated_at' =>date("Y-m-d H:i:s")
                    ]);
                    return json_encode($result);
              }else{
                    return json_encode(['data' => 'error']);
                  }

                  break;
            case 'ACTUALIZAR': 

              var_dump("1111111111111111111"); exit();
              
                  if($file != NULL){
                    $url_imagen =  DB::table('servicio_training_descripcion')->where('id_descripcion', '=', $request->txt_id_descripcion)->get();
                  
                    if(file_exists(str_replace('/template_admin/', 'template_admin/',  $url_imagen[0]->url_image))){
                      unlink(str_replace('/template_admin/', 'template_admin/',  $url_imagen[0]->url_image));
                    }
                    
                      $filename  =  time() .'_'.$file->getClientOriginalName(); 
                      $path = "template_admin/img";
                      $file->move($path,$filename); 
        
                      $result  =  DB::table('servicio_training_descripcion')
                        ->where("id_descripcion",$request->txt_id_descripcion)
                        ->update([

                          'id_titulo' => $request->txt_titulo_principal, 
                          'id_servicio' => $request->txt_id_servicio, 
                          'title' => $request->txt_sub_titulo, 
                          'descripcion' => $request->txt_descripcion,
                          'url_link' => $request->txt_url_link,
                          'url_image' => '/template_admin/img/'.$filename, 
                          'updated_at' =>date("Y-m-d H:i:s")
                          
                        ]); 
                        return json_encode(['data' => '/template_admin/img/'.$filename,'state'=> $result]);
                    }else{
                      $result  =  DB::table('servicio_training_descripcion')
                      ->where("id_descripcion",$request->txt_id_descripcion)
                      ->update([

                        'id_titulo' => $request->txt_titulo_principal, 
                        'id_servicio' => $request->txt_id_servicio, 
                        'title' => $request->txt_sub_titulo, 
                        'descripcion' => $request->txt_descripcion,
                        'url_link' => $request->txt_url_link,
                        'updated_at' =>date("Y-m-d H:i:s")
                      ]); 
                      return json_encode(['data' => '/template_admin/img/'.$filename,'state'=> $result]);
                    }
                     

                    break;

                    case 'ELIMINAR': 
              
                      // if($file){
                      //   $url_imagen =  DB::table('servicio_novedad')->where('id_servicio', '=', $request->txt_id_home)->get();
                       
                      //   if(file_exists(str_replace('/template_admin/', 'template_admin/',  $url_imagen[0]->inferior_url_image))){
                      //     unlink(str_replace('/template_admin/', 'template_admin/',  $url_imagen[0]->inferior_url_image));
                      //   }
                        
                      //     $filename  =  time() .'_'.$file->getClientOriginalName(); 
                      //     $path = "template_admin/img";
                      //     $file->move($path,$filename); 
            
                      //     DB::table('servicio_novedad')
                      //       ->where("id_servicio",$request->txt_id_home)
                      //       ->update([
                      //       'inferior_url_image' => '/template_admin/img/'.$filename, 
                      //       ]); 
          
                      //   }
                      //       $data=  DB::table('servicio_novedad')->where('id_servicio', '=', $request->txt_id_home)->get();
                      //       $html='';
                      //       $html.='
                      //       <img class="card-img-top" src="'.$data[0]->inferior_url_image.'" alt="Photo">
                      //     ';
                      //       return [$html,$request->txt_values];//SI ES SUPERIOR O INFERIOR
        
                            break;

            
        }



   }

   public function editServicioTraining(Request $request) {
    $result = DB::table('servicio_training_descripcion')->where("id_descripcion", $request->txt_id_descripcion)->get();
    return json_encode($result);
   }

}
<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Storage;
use Image;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Filesystem\Filesystem;


class GaleriaController extends Controller {

    //:::::::::::::::::::::::::: CRUD DE GALERIAS ::::::::::::::::::::::::::

    public function galeriaPrincipal() {
      $rowData_ = DB::table('web_producto_galeria')
      ->get()->toArray();
      return view('admin.galeria.servicioGaleria')->with(compact('rowData_'));
    }

    public function listarGaleriaDataTable(Request $request) {
      
      if(intval($request->txt_id_servicio) > 0){
        $rowData_ = DB::table('web_producto_galeria')
        ->where("web_producto_galeria.id_menu", $request->txt_id_servicio)
        ->get()->toArray();
      }else{
        $rowData_ = DB::table('web_producto_galeria')
        ->get()->toArray();
      }
      return view('admin.galeria.ajax.tablaServicio')->with(compact('rowData_'));
    }


    public function changeServicioTraining(Request $request)
    {
        $variable = DB::table('web_servicio_titulo')->where("id_servicio", $request->txt_id_servicio)->get();
          $html="";
          foreach ($variable as $key => $value) {
          $html.=' <option value="'.$value->id_titulo.'">'.$value->titulo_principal.'</option>';
          }
        return $html;
    }
    
 public function createServicioGaleria(Request $request) 
 {        
         switch($request->isValues) {
          case 'CREAR': 
            $file = $request->file('image');
            
            if($file != NULL){
                $filename  =  time() .'_'.$file->getClientOriginalName();
                $path = "template_inmonut/img/".$request->txt_id_menu;
                $file->move($path,$filename);

                $result = DB::table('web_producto_galeria')->insert([
                    'id_menu' => $request->txt_id_menu, 
                    'titulo' => $request->txt_titulo, 
                    'sub_titulo' => $request->txt_sub_titulo, 
                    'descripcion' => $request->txt_descripcion,
                    'url_link' => $request->txt_url_link,
                    'url_image' => '/template_inmonut/img/'.$request->txt_id_menu.'/'.$filename, 
                    'created_at' => date("Y-m-d H:i:s"),
                    'updated_at' =>date("Y-m-d H:i:s")
                  ]);
                  return json_encode(['data' => 'Creado el registro correctamente!','state' => 'ok']);
            }else{
                  return json_encode(['data' => 'Error : subir imagen!','state' => 'error']);
                }

                break;
          case 'ACTUALIZAR': 
                  $file = $request->file('image');

                if($file != NULL){
                  $url_imagen =  DB::table('web_servicio_descripcion')->where('id_descripcion', '=', $request->txt_id_descripcion)->get();
                
                  if(file_exists(str_replace('/template_inmonut/', 'template_inmonut/',  $url_imagen[0]->url_image))){
                    unlink(str_replace('/template_inmonut/', 'template_inmonut/',  $url_imagen[0]->url_image));
                  }
                  
                    $filename  =  time() .'_'.$file->getClientOriginalName(); 
                    $path = "template_inmonut/img";
                    $file->move($path,$filename); 
      
                    $result  =  DB::table('web_servicio_descripcion')
                      ->where("id_descripcion",$request->txt_id_descripcion)
                      ->update([

                        'id_titulo' => $request->txt_titulo_principal__, 
                        'title' => $request->txt_sub_titulo, 
                        'descripcion' => $request->txt_descripcion,
                        'url_link' => $request->txt_url_link,
                        'url_image' => '/template_inmonut/img/'.$filename, 
                        'updated_at' =>date("Y-m-d H:i:s")
                        
                      ]); 
     
                      return json_encode(['data' => 'Actualizado el registro correctamente!','state' => 'ok','src' => '/template_inmonut/img/'.$filename]);

                  }else{
                    $result  =  DB::table('web_servicio_descripcion')
                    ->where("id_descripcion",$request->txt_id_descripcion)
                    ->update([

                      'id_titulo' => $request->txt_titulo_principal__, 
                      'title' => $request->txt_sub_titulo, 
                      'descripcion' => $request->txt_descripcion,
                      'url_link' => $request->txt_url_link,
                      'updated_at' =>date("Y-m-d H:i:s")
                    ]); 
                    return json_encode(['data' => 'Actualizado el registro correctamente!','state' => 'ok']);
                  }

                  break;

                  case 'ELIMINAR': 

                    DB::table('web_servicio_descripcion')->where('id_descripcion', '=', $request->txt_id_descripcion)->delete();
                    return json_encode(['data' => 'Elimino el registro correctamente!','state' => 'ok']);
      
                  break;
      }
 }




    public function editServicioTraining(Request $request) {
      $rowData_ = DB::table('web_servicio_titulo')
      ->join('web_servicio_descripcion', 'web_servicio_titulo.id_titulo', '=', 'web_servicio_descripcion.id_titulo')
      ->join('web_servicio', 'web_servicio_titulo.id_servicio', '=', 'web_servicio.id_servicio')
      ->where("web_servicio_descripcion.id_descripcion", $request->txt_id_descripcion)
      ->get()->toArray();
      return json_encode($rowData_);
    }



    //:::::::::::::::::::::::::: CRUD DE TITULOS ::::::::::::::::::::::::::



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
                   
                    if(file_exists(str_replace('/template_inmonut/', 'template_inmonut/',  $url_imagen[0]->superior_url_image))){
                      unlink(str_replace('/template_inmonut/', 'template_inmonut/',  $url_imagen[0]->superior_url_image));
                    }
                    
                      $filename  =  time() .'_'.$file->getClientOriginalName(); 
                      $path = "template_inmonut/img";
                      $file->move($path,$filename); 
        
                      DB::table('web_servicio')
                        ->where("id_servicio",$request->txt_id_home)
                        ->update([
                        'superior_url_image' => '/template_inmonut/img/'.$filename, 
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
               
                if(file_exists(str_replace('/template_inmonut/', 'template_inmonut/',  $url_imagen[0]->inferior_url_image))){
                  unlink(str_replace('/template_inmonut/', 'template_inmonut/',  $url_imagen[0]->inferior_url_image));
                }
                
                  $filename  =  time() .'_'.$file->getClientOriginalName(); 
                  $path = "template_inmonut/img";
                  $file->move($path,$filename); 
    
                  DB::table('web_servicio')
                    ->where("id_servicio",$request->txt_id_home)
                    ->update([
                    'inferior_url_image' => '/template_inmonut/img/'.$filename, 
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

}
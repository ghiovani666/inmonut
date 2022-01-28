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

  //:::::::::::::::::::::::::: CRUD DE SERVICIOS ::::::::::::::::::::::::::

  public function adminServicioHello() {
    $rowData_cb_ = DB::table('web_servicio')->get();
    $rowData_cb = DB::table('web_servicio_titulo')->get();
    $rowData_ = DB::table('web_servicio_titulo')
    ->join('web_servicio_descripcion', 'web_servicio_titulo.id_titulo', '=', 'web_servicio_descripcion.id_titulo')
    ->join('web_servicio', 'web_servicio_titulo.id_servicio', '=', 'web_servicio.id_servicio')
    ->get()->toArray();
    return view('admin.servicios.servicioHello')->with(compact('rowData_'))->with(compact('rowData_cb'))->with(compact('rowData_cb_'));
  }

 public function createServicioTraining(Request $request) 
 {        
         switch($request->isValues) {
          case 'CREAR': 
            $file = $request->file('image');
            
            if($file != NULL){
                $filename  =  time() .'_'.$file->getClientOriginalName();
                $path = "template_admin/img";
                $file->move($path,$filename);

                $result = DB::table('web_servicio_descripcion')->insert([
                    'id_titulo' => $request->txt_titulo_principal, 
                   
                    'title' => $request->txt_sub_titulo, 
                    'descripcion' => $request->txt_descripcion,
                    'url_link' => $request->txt_url_link,
                    'url_image' => '/template_admin/img/'.$filename, 
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
                
                  if(file_exists(str_replace('/template_admin/', 'template_admin/',  $url_imagen[0]->url_image))){
                    unlink(str_replace('/template_admin/', 'template_admin/',  $url_imagen[0]->url_image));
                  }
                  
                    $filename  =  time() .'_'.$file->getClientOriginalName(); 
                    $path = "template_admin/img";
                    $file->move($path,$filename); 
      
                    $result  =  DB::table('web_servicio_descripcion')
                      ->where("id_descripcion",$request->txt_id_descripcion)
                      ->update([

                        'id_titulo' => $request->txt_titulo_principal__, 
                        'title' => $request->txt_sub_titulo, 
                        'descripcion' => $request->txt_descripcion,
                        'url_link' => $request->txt_url_link,
                        'url_image' => '/template_admin/img/'.$filename, 
                        'updated_at' =>date("Y-m-d H:i:s")
                        
                      ]); 
     
                      return json_encode(['data' => 'Actualizado el registro correctamente!','state' => 'ok','src' => '/template_admin/img/'.$filename]);

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

    public function listarDataTable(Request $request) {
      
      if(intval($request->txt_id_servicio) > 0){
        $rowData_ = DB::table('web_servicio_titulo')
        ->join('web_servicio_descripcion', 'web_servicio_titulo.id_titulo', '=', 'web_servicio_descripcion.id_titulo')
        ->join('web_servicio', 'web_servicio_titulo.id_servicio', '=', 'web_servicio.id_servicio')
        ->where("web_servicio.id_servicio", $request->txt_id_servicio)
        ->get()->toArray();
      }else{
        $rowData_ = DB::table('web_servicio_titulo')
        ->join('web_servicio_descripcion', 'web_servicio_titulo.id_titulo', '=', 'web_servicio_descripcion.id_titulo')
        ->join('web_servicio', 'web_servicio_titulo.id_servicio', '=', 'web_servicio.id_servicio')
        ->get()->toArray();
      }
     
      return view('admin.servicios.ajax.tablaServicio')->with(compact('rowData_'));
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
    
    //:::::::::::::::::::::::::: CRUD DE TITULOS ::::::::::::::::::::::::::
    public function adminServicioTitulo() {
      $rowData_cb_ = DB::table('web_servicio')->get();
      $rowData_ = DB::table('web_servicio_titulo')
      ->join('web_servicio', 'web_servicio_titulo.id_servicio', '=', 'web_servicio.id_servicio')
      ->orderBy('web_servicio_titulo.id_titulo', 'desc')
      ->get()->toArray();
      return view('admin.servicios.servicioTitulo')->with(compact('rowData_'))->with(compact('rowData_cb_'));
    }

    public function listarDataTableTitulo() {
      $rowData_ = DB::table('web_servicio_titulo')
      ->join('web_servicio', 'web_servicio_titulo.id_servicio', '=', 'web_servicio.id_servicio')
      ->get()->toArray();
      return view('admin.servicios.ajax.tablaTitulo')->with(compact('rowData_'));
    }

    public function servicioGrabarTitulo(Request $request) 
    {        
        switch($request->isValues) {
              case 'CREAR': 
                    $result = DB::table('web_servicio_titulo')->insert([
                              'id_servicio' => $request->txt_id_servicio, 
                              'titulo_principal' => $request->txt_titulo_principal, 
                              'created_at' => date("Y-m-d H:i:s"),
                              'updated_at' =>date("Y-m-d H:i:s")
                            ]);

                    return json_encode(['data' => 'Creado el registro correctamente!','state' => 'ok']);

                    break;

              case 'ACTUALIZAR': 
                    $result  =  DB::table('web_servicio_titulo')
                      ->where("id_titulo",$request->txt_id_titulo)
                      ->update([
                        'id_servicio' => $request->txt_id_servicio, 
                        'titulo_principal' => $request->txt_titulo_principal, 
                        'updated_at' =>date("Y-m-d H:i:s")
                      ]); 
      
                      return json_encode(['data' => 'Actualizado el registro correctamente!','state' => 'ok']);

                    break;

              case 'ELIMINAR': 

                    DB::table('web_servicio_titulo')->where('id_titulo', '=', $request->txt_id_titulo)->delete();
                    return json_encode(['data' => 'Elimino el registro correctamente!','state' => 'ok']);

                  break;
          }
    }

    public function servicioEditarTitulo(Request $request) {
      $result = DB::table('web_servicio_titulo')->where("id_titulo", $request->txt_id_titulo)->get();
      return json_encode($result);
    }


}
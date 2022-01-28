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
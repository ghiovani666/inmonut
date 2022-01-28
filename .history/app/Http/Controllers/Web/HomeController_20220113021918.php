<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;
use Session;
//ENVIAR CORREOS
use Mail;
use App\Mail\EnviarCorreosInfo;

class HomeController extends Controller
{
    //Para inciar la pagina del index al ser llamado
    public function viewHome(){
        $slider_ = DB::table('home_slider')->get();
        $clases_ = DB::table('home_clases')->get();
        $fitness_ = DB::table('home_fitness')->get();
        $entrenador_ = DB::table('home_entrenador')->get();

    	return view('web.layouts.pages.index')->with(compact('clases_'))->with(compact('slider_'))->with(compact('fitness_'))->with(compact('entrenador_'));
    }
    public function viewContacto(){
    	return view('web.layouts.pages.contacto');
    }
    public function viewPacks(){
    	return view('web.layouts.pages.packs');
    }
    public function viewServices1(){
    	return view('web.layouts.pages.servicio1');
    }
    public function viewServices2(){
    	return view('web.layouts.pages.servicio2');
    }
    public function viewServices3(){
    	return view('web.layouts.pages.servicio3');
    }
    public function viewServices4(){
    	return view('web.layouts.pages.servicio4');
    }
    public function viewServices5(){
    	return view('web.layouts.pages.servicio5');
    }
    public function viewServices6(){
    	return view('web.layouts.pages.servicio6');
    }
    public function viewEquipos(){
    	return view('web.layouts.pages.equipos');
    }

    public function viewEvento(){
    	return view('web.layouts.pages.servicio_evento');
    }
    public function viewBono(){
    	return view('web.layouts.pages.servicio_bonos');
    }
    public function viewNoticia(){
    	return view('web.layouts.pages.servicio_noticias');
    }
    public function viewReto(){
    	return view('web.layouts.pages.servicio_retos');
    }


    function objectToArray($d) 
    {
        if (is_object($d)) {
            // Gets the properties of the given object
            // with get_object_vars function
            $d = get_object_vars($d);
        }
    
        if (is_array($d)) {
            /*
            * Return array converted to object
            * Using __FUNCTION__ (Magic constant)
            * for recursive call
            */
            return array_map(__FUNCTION__, $d);
        } else {
            // Return array
            return $d;
        }
    }


    public function viewServicioTenis(){
        $rowData_ = DB::table('servicio_training')->get();
        $rowData_titulo = DB::table('servicio_training_titulo')->get();
        $rowData_opciones = DB::table('servicio_training_titulo')->join('servicio_training_descripcion', 'servicio_training_titulo.id_titulo', '=', 'servicio_training_descripcion.id_titulo')->where('servicio_training_descripcion.id_servicio', '=', 1)->get()->toArray();
        // $result = array();
        // foreach ($rowData_opciones as $element) {
        // //    $result[$element->id_titulo][] = $element;
        //     var_dump((object)$element);
        // }

        $this->objectToArray($rowData_opciones)

        // var_dump( $result );
        exit;
     return view('web.layouts.pages.servicioTenis')->with(compact('rowData_'))->with(compact('rowData_titulo'))->with(compact('rowData_opciones'));
    }
    public function viewServicioPadel(){
        $rowData_ = DB::table('servicio_training')->get();
    	return view('web.layouts.pages.servicioPadel')->with(compact('rowData_'));
    }
    public function viewServicioFisio(){
        $rowData_ = DB::table('servicio_training')->get();
    	return view('web.layouts.pages.servicioFisio')->with(compact('rowData_'));
    }
    public function viewServicioFitness(){
        $rowData_ = DB::table('servicio_training')->get();
    	return view('web.layouts.pages.servicioFitness')->with(compact('rowData_'));
    }


    public function viewLogin(){
    	return view('web.layouts.pages.login');
    }

    //ENVIAR CORREO DE INFORMACION
    public function enviar_email_informacion(Request $request)
    {
        Mail::to('ghiovani999@gmail.com')
        ->send(new EnviarCorreosInfo([
            'txt_nombre' => $request->txt_nombre,
            'txt_email' => $request->txt_email,
            'txt_telefono' => $request->txt_telefono,
            'txt_asunto' => $request->txt_asunto,
            'txt_descripcion' => $request->txt_descripcion,
        ])); 
        return response()->json(['data' => '<p class="alert alert-success">El formulario de contacto se envio correctamente</p> ']);
    }
        // ::::::::::::::::::::::::: NOVEDADES (tambien esta quienes somos?) :::::::::::::::::::::::::::::  
        public function viewAbout(){
            $rowData_ = DB::table('servicio_novedad')->where("id_servicio",5)->get();
            return view('web.layouts.pages.quienes_somos')->with(compact('rowData_'));
        }
        public function viewLocation(){
            $rowData_ = DB::table('servicio_novedad')->where("id_servicio",6)->get();
            return view('web.layouts.pages.localizacion')->with(compact('rowData_'));
        }
}

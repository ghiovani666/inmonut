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

class ProductosController extends Controller
{

    public function productCategory($id_item) {     
        try {
            
        $Products = DB::table('web_producto_menu')
        ->join('web_producto_categoria', 'web_producto_menu.id_item', '=', 'web_producto_categoria.id_item')
        ->join('web_producto_imagen', 'web_producto_categoria.id', '=', 'web_producto_imagen.id_product')
        ->where('web_producto_imagen.check', '=',1)
        ->where('web_producto_categoria.id_item', $id_item)
        ->paginate(12);
   
        return view('web.layouts.pages.productos.productoCategoria', compact('Products'));

        } catch (\Throwable $th) {
            return back()->with('msg', 'No se encuentra Registro');
        }

    }

    public function listProducts($id_cat) {

        $Products = DB::table('web_producto_categoria')
        ->join('web_producto_menu', 'web_producto_menu.id_item', '=', 'web_producto_categoria.id_item')
        ->join('web_producto_imagen', 'web_producto_categoria.id', '=', 'web_producto_imagen.id_product')
        ->join('medidas', 'web_producto_imagen.id_medida', '=', 'medidas.id_medida')
        ->where('web_producto_imagen.check', '=',1)
        ->where('web_producto_menu.id_cat', '=', $id_cat)
        ->paginate(12);
         return view('front.componets', compact('Products'));

    }


    public function loadmore(Request $request){

        $productsx = DB::table('web_producto_menu')
        ->join('web_producto_categoria', 'web_producto_menu.id_item', '=', 'web_producto_categoria.id_item')
        ->join('web_producto_imagen', 'web_producto_categoria.id', '=', 'web_producto_imagen.id_product')
        ->where('web_producto_imagen.check', '=',1)
        ->where('web_producto_categoria.id_item', 1)
        ->limit($request['limit'])
        ->offset($request['start'])
        ->get();
    
        foreach ($productsx as $key) {
          echo '<div class="card">
                    <img src="'.$key->url_image.'" alt="image">
                    <div class="card-body">
                        <h5 class="card-title">'.$key->pro_name.'</h5>
                    </div>
                </div>'; 
    
        }
      }




    function load_data(Request $request){

        if($request->id > 0)
        {
            $data = DB::table('web_producto_menu')
            ->join('web_producto_categoria', 'web_producto_menu.id_item', '=', 'web_producto_categoria.id_item')
            ->join('web_producto_imagen', 'web_producto_categoria.id', '=', 'web_producto_imagen.id_product')
            ->where('web_producto_imagen.check', '=',1)
            ->where('web_producto_categoria.id_item', 1)
            ->where('id_imagen', '<', $request->id)
            ->orderBy('id_imagen', 'DESC')
            ->limit(5)
            ->get();
        }
        else
        {
            $data = DB::table('web_producto_menu')
            ->join('web_producto_categoria', 'web_producto_menu.id_item', '=', 'web_producto_categoria.id_item')
            ->join('web_producto_imagen', 'web_producto_categoria.id', '=', 'web_producto_imagen.id_product')
            ->where('web_producto_imagen.check', '=',1)
            ->where('web_producto_categoria.id_item', 1)
            ->orderBy('id_imagen', 'DESC')
            ->limit(5)
            ->get();
        }
      $output = '';
      $last_id = '';
      
      if(!$data->isEmpty()) {
        foreach($data as $row){
            $output .= '
            <div class="row">
            <div class="col-md-12">
            <img src="'.$row->url_image.'" alt="image">
            <p>'.$row->post_description.'</p>
            </div>         
            </div>
            ';
            $last_id = $row->id_imagen;
        }
            $output .= '
            <div id="load_more">
                <button type="button" name="load_more_button" class="btn btn-success form-control" data-id="'.$last_id.'" id="load_more_button">Load More</button>
            </div>
            ';
      }else{
            $output .= '
            <div id="load_more">
                <button type="button" name="load_more_button" class="btn btn-info form-control">No Data Found</button>
            </div>
            ';
        }
      echo $output;


    }

    
}
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

    // public function componets_web() {
    //     return view('front.componets');
    // }

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

        // dd($Products);
        // exit();
         return view('front.componets', compact('Products'));

    }



    
}
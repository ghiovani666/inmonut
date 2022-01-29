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

    /* //INFINITY SCROLLING SCROLL
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
    */
    function productCategoryLoad(Request $request){
        if($request->ajax())
        {
        if($request->id > 0)
        {
            $data = DB::table('web_producto_menu')
            ->join('web_producto_categoria', 'web_producto_menu.id_item', '=', 'web_producto_categoria.id_item')
            ->join('web_producto_imagen', 'web_producto_categoria.id', '=', 'web_producto_imagen.id_product')
            ->where('web_producto_imagen.check', '=',1)
            ->where('web_producto_categoria.id_item', 1)
            ->where('id_imagen', '<', $request->id)
            ->orderBy('id_imagen', 'DESC')
            ->limit(8)
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
            ->limit(8)
            ->get();
        }
      $output = '';
      $last_id = '';
      
      if(!$data->isEmpty()) {
        foreach($data as $row){
            $output .= '
            <div  class="col-lg-3 col-lg-offset-0 col-md-3 col-md-offset-0 col-sm-4 col-sm-offset-0 col-xs-12 col-xs-offset-0 mix">
                <div class="wa-products">
                    <div class="wa-products-thumbnail wa-item">
                        <img src="'.$row->url_image.'" alt="">
                        <div class="caption" style="cursor: pointer;"
                            onclick="productDetail__('.$row->id.')">
                            <div class="caption-text">
                                <ul class="wa-products-icon">
                                    <li><a href="#" title="Add to wishlist"><i class="fa fa-heart-o"></i></a></li>
                                    <li><a href="/productDetail/'.$row->id.'" class="quickview-box-btn" title="Quick View"><i class="fa fa-eye"></i></a>
                                    </li>
                                    <li><a href="#" title="Add to cart"><i class="fa fa-shopping-basket"></i></a>
                                    </li>
                                </ul>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                    <div class="wa-products-caption">
                        <h2>
                            <a href="/productDetail/'.$row->id.'" style="font-weight: normal !important;">'.$row->pro_name.'</a>
                        </h2>
                    </div>
                </div>
            </div>
            <script type="text/javascript"> function productDetail__(params){ window.location.href="/productDetail/"+params; }</script>
            ';

            $last_id = $row->id_imagen;
        }
            $output .= '
            <div id="load_more">
                <button type="button" name="load_more_button" style="background-color: #000000;border-color: #000000;" class="btn btn-success form-control" data-id="'.$last_id.'" id="load_more_button">Ver Más</button>
            </div>
            ';
      }else{
            $output .= '
            <div id="load_more">
                <button type="button" name="load_more_button" style="background-color: #000000;border-color: #000000;" class="btn btn-info form-control">No se encontraron datos</button>
            </div>
            ';
        }
      echo $output;
        }
    }


    Public function productDetail($idDetalle) {
        $Products = DB::table('web_producto_menu')
        ->join('web_producto_categoria', 'web_producto_menu.id_item', '=', 'web_producto_categoria.id_item')
        ->join('web_producto_imagen', 'web_producto_categoria.id', '=', 'web_producto_imagen.id_product')
        ->where('web_producto_imagen.check', '=',1)
        ->where('web_producto_categoria.id', $idDetalle)->get();
        return view('web.layouts.pages.productos.productoDetalle', compact('Products'));

    }

    Public function productoGaleriaLoad(Request $request) {
        if($request->ajax())
        {
        if($request->id > 0)
        {
            $data = DB::table('web_producto_galeria')
            ->where('id_gallery', '<', $request->id)
            ->orderBy('id_gallery', 'DESC')
            ->limit(6)
            ->get();
        }
        else
        {
            $data = DB::table('web_producto_galeria')
            ->orderBy('id_gallery', 'DESC')
            ->limit(6)
            ->get();
        }
      $output = '';
      $last_id = '';
      
      if(!$data->isEmpty()) {
        foreach($data as $row){
            $output .= '
            <div class="col-lg-4 col-md-6 portfolio-item  '.$row->type_filter.'">
                <img src="'.$row->url_image.'" class="img-fluid" alt="">
                <div class="portfolio-info">
                    <h4>'.$row->names.'</h4>
                    <p>'.$row->description.'</p>
                    <a href="'.$row->url_image.'" data-gall="portfolioGallery" class="venobox preview-link"
                        title="'.$row->names.'"><i class="bx bx-plus"></i></a>
                    <a href="#" class="details-link" title="Mas Detalles"><i class="bx bx-link"></i></a>
                </div>
            </div>
            ';

            $last_id = $row->id_imagen;
        }
            $output .= '
            <div id="load_more">
                <button type="button" name="load_more_button" style="background-color: #000000;border-color: #000000;" class="btn btn-success form-control" data-id="'.$last_id.'" id="load_more_button">Ver Más</button>
            </div>
            ';
      }else{
            $output .= '
            <div id="load_more">
                <button type="button" name="load_more_button" style="background-color: #000000;border-color: #000000;" class="btn btn-info form-control">No se encontraron datos</button>
            </div>
            ';
        }
      echo $output;
        }


    }
   
}
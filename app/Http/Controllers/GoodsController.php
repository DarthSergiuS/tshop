<?php

namespace App\Http\Controllers;

use App\Goods;
use Illuminate\Http\Request;

class GoodsController extends Controller
{
    public function productAction($id){
        $product = Goods::find($id);
        if($product){
            return view('product',['good'=>$product]);
        }
    }
}

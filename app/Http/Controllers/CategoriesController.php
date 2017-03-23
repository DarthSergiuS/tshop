<?php

namespace App\Http\Controllers;

use App\Categories;
use App\Goods;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoriesController extends Controller
{
    public function categoryAction($id){
        $category=Categories::find($id);
        $goods=null;
        if($category) {
            $goods = Goods::where('category_id',$category->id)->get();
        }
        return view('goods',['goods'=>$goods]);

    }
}

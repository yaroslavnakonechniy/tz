<?php

namespace App\Http\Controllers\Product;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;

class FilterController extends Controller
{
    public function __invoke(Request $request){

        if($request->input('filter_by') === "price"){
            
            $products = Product::orderBy("price")->get();
           
        }else if($request->input('filter_by') === "date"){
            
            $products = Product::latest()->get();
            
        }

        return view('product.index', compact('products'));
    }
}

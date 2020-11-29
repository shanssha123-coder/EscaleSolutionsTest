<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    //
   public function create(Request $request){
       $product = new Product();
       $product->user_id = $request->input('user_id');
       $product->business_id = $request->input('business_id');
       $product->name = $request->input('name');
       $product->mrp = $request->input('mrp');
       $product->discription = $request->input('discription');
       $product->save();
       return response()->json($product);

   }

   public function fetchProducts(){
       $products = Product::with('user')->with('business')->get();
       return response()->json($products);
   }

   public function fetchProductById($id){
    $products = Product::find($id);
    if ($product == null){
        return response()->json(["error" => "not found"]);

    }
    return response()->json($products);
}

public function updateProduct($id,Request $request){
        $product = Product::find($id);
        if ($product == null){
            return response()->json(["error" => "does not exists"]);

        }
        $product->name = $request->input('name');
        $product->mrp = $request->input('mrp');
        $product->discription = $request->input('discription');
        $product->save();
        return response()->json($product);
    }

    public function deleteProduct($id,Request $request){
        $product = Product::find($id);
        if ($product == null){
            return response()->json(["error" => "not found"]);

        }
        $product->delete();
        return response()->json(["success" =>  "ok"]);
       
      
    }

}

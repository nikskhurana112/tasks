<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function list()
    {   
        $products = Product::orderBy("id","DESC")->paginate(10);
        return view("product.list")->with(['products' => $products]);
    }
    public function delete(Request $req){
        Product::where('id', '=', $req->id)->delete();
        return redirect()->back();
    }
    public function edit(Request $req){
        
        $product = Product::find($req->id);
        return view("product.edit")->withProduct($product);
    }
    public function update(Request $req){
     
        // $product = Product::whereId($req->id)->update([
        //     'product_name' => $req->product_name,
        //     'product_price' => $req->product_price,
        //     'stock' => $req->stock
        // ]);
        $product = Product::find($req->id);
        $product->product_name = $req->product_name;
        $product->product_price = $req->product_price;
        $product->stock = $req->stock;

        $product->save();
        return redirect()->route("product.list");
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view("index")->with(
            'products', $products
        );
    }

    public function create(){
        return view("products");
    }

    public function store(Request $request){
        $product = new Product();
        $product->nama = $request->nama_product;
        $product->stock = $request-> stock;
        $product->save();
        return redirect(route("product.index"));
    }
    public function edit($id){
        $detail = Product::find($id);
        return view("edit", compact("detail"));
    }

    public function update($id, Request $request){
        $cek = Product::find($id);
        if($cek){
            $cek->nama = $request->nama_product;
            $cek->stock = $request-> stock;
            $cek->save();
        }else{
            echo "Data tidak ditemukan";
        }
        return redirect(route("product.index"));
    }
    public function destroy($id){
        Product::find($id)->delete();
        return redirect(route("product.index"));
    }
}

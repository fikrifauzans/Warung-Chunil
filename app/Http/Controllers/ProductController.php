<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    //
    public function index(){
        $no = 0;
        $products = Product::all();
        return view('user.product' , [
            'products' => $products,
            'number' => $no
        ]);
    }

    public function create(){
        return view('user.create');
    }

    public function store(Request $request){
        $product = new Product;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->qty = $request->qty;
        $product->category_id = Category::where('name', $request->category)->first()->id;
        $product->purchase_price = $request->purchase_price;
        $product->selling_price = $request->selling_price;
        $product->save();
        return redirect('/product');
    }

    public function show(Product $product) {
        return view('user.update', [
            'product' => $product
        ]);
    }

    public function update(Request $request, Product $product){
        $product->name = $request->name;
        $product->description = $request->description;
        $product->qty = $request->qty;
        $product->category_id = Category::where('name', $request->category)->first()->id;
        $product->purchase_price = $request->purchase_price;
        $product->selling_price = $request->selling_price;
        $product->update();
        return redirect('/product');
    }

    public function destroy(Product $product) {
        $product->delete();
       return  redirect('/product');
    }
}

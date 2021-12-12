<?php

namespace App\Http\Controllers;

use App\Models\Product;
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

    public function post(Request $request){
        return view('welcome' , dd($request));
    }

}

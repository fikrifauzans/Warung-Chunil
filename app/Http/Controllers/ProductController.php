<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Collection;

class ProductController extends Controller
{

    public function index(Request $request)
    {

        $category = Category::where('name', 'like', '%' . $request['search'] .  '%')->get();
        $category_id = $category->collect()->first()->id;

        $products = Product::latest();

        if ($category_id !== null) {
            $products->where('category_id', 'like', '%' . $category_id . '%');
        } else  {
            $products
                ->Where('description', 'like', '%' . $request['search'] . '%')
                ->orWhere('name', 'like', '%' . $request['search'] . '%');
        }
        session()->flashInput($request->input());
        return view('user.product', [
            'products' => $products->paginate(5)->withQueryString(),

        ]);
    }

    public function create()
    {
        return view('user.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'category' => 'required',
            'purchase_price' => 'required',
            'selling_price' => 'required'
        ]);


        $product = new Product;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->category_id = Category::where('name', $request->category)->first()->id;
        $product->purchase_price = $request->purchase_price;
        $product->selling_price = $request->selling_price;
        $product->save();
        return redirect('/product');
    }

    public function show(Product $product)
    {
        return view('user.update', [
            'product' => $product
        ]);
    }

    public function update(Request $request, Product $product)
    {
        $product->name = $request->name;
        $product->description = $request->description;
        $product->category_id = Category::where('name', $request->category)->first()->id;
        $product->purchase_price = $request->purchase_price;
        $product->selling_price = $request->selling_price;
        $product->update();
        return redirect('/product');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return  redirect('/product');
    }
}

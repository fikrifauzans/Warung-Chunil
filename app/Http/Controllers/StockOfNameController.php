<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\StockOfName;
use App\Models\StockOfNameProduct;
use Illuminate\Http\Request;
use DB;

class StockOfNameController extends Controller
{

    public function index()
    {
        $stockofname = StockOfName::latest()->paginate(6);
        $number = 0;
        // dd($products);
        return view('user.stockofname', [
            'stockofname' => $stockofname,
            'number' => $number
        ]);
    }

    public function create()
    {

        return view('user.createStockOfName', [
            'products' => Product::all()
        ]);
    }

    public function post(Request $request)
    {

        try {
            DB::beginTransaction();

            $name           = $request->name;
            $qty            = $request->qty;
            $category       = $request->category;
            $purchase_price = $request->purchase_price;
            $selling_price  = $request->selling_price;
            $newsot = new StockOfName();
            $newsot->save();

            for ($i = 0; $i < count($name); $i++) {
                $sot = new StockOfNameProduct();
                $sot->name                  = $name[$i];
                $sot->qty                   = $qty[$i];
                $sot->category              = $category[$i];
                $sot->purchase_price        = $purchase_price[$i];
                $sot->selling_price         = $selling_price[$i];
                $sot->totalsellingprice     = $selling_price[$i] * $qty[$i];
                $sot->profit                = $sot->selling_price - $sot->purchase_price;
                $sot->totalpurchaseprice    = $purchase_price[$i] * $qty[$i];
                $sot->margin                = $sot->totalsellingprice - $sot->totalpurchaseprice;
                $sot->stockofname_id        = $newsot->id;
                $sot->save();
            }

            DB::commit();
        } catch (\Throwable $th) {
            \Log::info('error di controller stock of name');
            DB::rollback();
            return back()->with('error', 'Error bro');
        }


        return redirect('/stockofname/post/' . $newsot->id);
    }

    public function show(StockOfName $stockofname)
    {
        $stockOfName = $stockofname;

        return view('user.resultstockofname', [
            'sotProducts' => $stockOfName
        ]);
    }

    public function destroy(StockOfName $stockofname)
    {
        $stockofnameproducts = StockOfNameProduct::where('stockofname_id', $stockofname->id)
            ->get();
        foreach($stockofnameproducts as $product){
            $product->delete();
        }
        $stockofname->delete();
        return redirect('/stockofname');
    }
}

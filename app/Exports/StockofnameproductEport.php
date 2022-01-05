<?php

namespace App\Exports;

use App\Models\StockOfNameProduct;
use Maatwebsite\Excel\Concerns\FromCollection;

class StockofnameproductEport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return StockOfNameProduct::all();
    }
}

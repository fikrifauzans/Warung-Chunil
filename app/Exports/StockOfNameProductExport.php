<?php

namespace App\Exports;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\FromCollection;

class StockOfNameProductExport implements FromView
{
    /**
     * @return \Illuminate\Support\Collection
     */


    protected $StockOfName;
    public function __construct($StockOfName)
    {
        $this->StockOfName = $StockOfName;
    }

    // public function collection()
    // {
    //     return StockOfNameProduct::where('stockofname_id', $this->StockOfName)->get();
    // }

    public function view(): View
    {

        $SOT = $this->StockOfName;
        return view('user.excel.ExportStockOfNameProduct' , [
            'sotProducts' => $SOT
        ]);
    }


}




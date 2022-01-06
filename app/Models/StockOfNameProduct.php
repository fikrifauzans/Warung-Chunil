<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StockOfNameProduct extends Model
{
    use HasFactory;

    protected $fillable =
    ['name' ,

    'qty',
    'category',
    'purchase_price',
    'selling_price',
    'profit',
    'totalsellingprice',
    'totalpurchaseprice',
    'margin',
    'stockofname_id'		];

    /**
     * Get the user that owns the StockOfNameProduct
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function stockofname()
    {
        return $this->belongsTo(StockOfName::class, 'stockofname_id','id');
    }



}

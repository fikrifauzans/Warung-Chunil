<?php

namespace App\Models;
use App\Models\StockOfNameProduct;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StockOfName extends Model
{
    use HasFactory;
    protected $fillable = [];


    /**
     * Get all of the comments for the StockOfName
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function stockofnameproducts()
    {
        return $this->hasMany(StockOfNameProduct::class,'stockofname_id' ,'id');
    }
}

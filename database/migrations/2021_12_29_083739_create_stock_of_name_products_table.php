<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStockOfNameProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stock_of_name_products', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('category')->nullable();
            $table->integer('qty')->nullable();
            $table->integer('purchase_price')->nullable();
            $table->integer('selling_price')->nullable();
            $table->integer('profit')->nullable();
            $table->integer('totalsellingprice')->nullable();
            $table->integer('totalpurchaseprice')->nullable();
            $table->integer('margin')->nullable();
            $table->integer('stockofname_id')->nullable();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stock_of_name_products');
    }
}

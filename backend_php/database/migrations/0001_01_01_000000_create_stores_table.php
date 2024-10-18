<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('name');
            $table->float('price');
            $table->string('toppings');
        });

        Schema::create('stores', function(Blueprint $table){
            $table->integer('id')->primary();
            $table->string('name');
        });

        Schema::create('storeproducts', function(Blueprint $table){
            $table->integer('id')->primary();
            $table->integer('shop')->unsigned(); 
            $table->integer('product')->unsigned(); 

            $table->foreign('shop')->references('id')->on('stores')->onDelete('cascade'); 
            $table->foreign('product')->references('id')->on('products')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        
        Schema::dropIfExists('sessions');
        Schema::dropIfExists('storeproducts');
        Schema::dropIfExists('stores');
        Schema::dropIfExists('products');
    }
};

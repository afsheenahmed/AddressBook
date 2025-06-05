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
            $table->id();
            $table->string('ProductName');
            $table->text('ProductDescription');
            $table->decimal('ProductPrice', 10, 2);
            $table->integer('ProductStock');
            $table->string('ProductImage');
            $table->integer('ProductCategory');
            $table->foreign('ProductCategory')->references('id')->on('categories');
            $table->integer('ProductVendor');
            $table->foreign('ProductVendor')->references('id')->on('vendors');
            $table->string('ProductStatus')->default('Available');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};

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
        Schema::create('addtocarts', function (Blueprint $table) {
            $table->id();
            $table->integer('ProductId');
            $table->integer('UserId');
            $table->integer('Quantity')->default(1);
            $table->integer('TotalPrice');
            $table->foreign('ProductId')->references('id')->on('products');
            $table->foreign('UserId')->references('id')->on('users');
           

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('addtocarts');
    }
};

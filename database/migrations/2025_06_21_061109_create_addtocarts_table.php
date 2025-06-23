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
        //
        Schema::create('addtocarts', function (Blueprint $table) {
    $table->id();
    $table->unsignedBigInteger('ProductId');
    $table->unsignedBigInteger('UserId');
    $table->integer('Quantity')->default(1);
    $table->decimal('TotalPrice', 10, 2);
   
    $table->timestamps();

    $table->foreign('ProductId')->references('id')->on('products')->onDelete('cascade');
    $table->foreign('UserId')->references('id')->on('users')->onDelete('cascade');
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};

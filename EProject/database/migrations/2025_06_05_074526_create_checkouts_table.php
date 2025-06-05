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
        Schema::create('checkouts', function (Blueprint $table) {
            $table->id();
            $table->integer('UserId');
            $table->integer('AddToCartId');
            $table->integer('TotalPrice');
            $table->string('PaymentMethod');
            $table->string('ShippingAddress');
            $table->string('ShippingCity');
            $table->string('ShippingState');
            $table->string('ShippingZip');
            $table->string('ShippingCountry');
            $table->string('Payment_status')->default('Pending');
            $table->string('Status')->default('Pending');
            $table->foreign('UserId')->references('id')->on('users');
            $table->foreign('AddToCartId')->references('id')->on('addtocarts');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('checkouts');
    }
};

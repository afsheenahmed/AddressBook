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
        Schema::create('vendors', function (Blueprint $table) {
            $table->id();
            $table->string('VendorName');
            $table->string('VendorEmail');
            $table->string('VendorPhone');
            $table->string('VendorAddress');
            $table->string('VendorCity');
            $table->string('VendorState');
            $table->string('VendorZip');
            $table->string('VendorCountry');
            $table->string('VendorContactPhone');
            $table->string('VendorProfilePicture')->nullable();
            $table->string('VendorStatus')->default('Not Approved');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vendors');
    }
};

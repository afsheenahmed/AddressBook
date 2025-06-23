<?php

// app/Models/Vendor.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    protected $fillable = [
        'VendorName',
        'VendorEmail',
        'VendorPhone',
        'VendorAddress',
        'VendorCity',
        'VendorCountry',
        'VendorPassword',
        'VendorProfilePicture',
        'VendorStatus'
    ];

    protected $hidden = [
        'VendorPassword'
    ];

    public function products()
    {
        return $this->hasMany(Product::class, 'ProductVendor', 'id');
    }
}

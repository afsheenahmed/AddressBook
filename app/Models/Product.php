<?php

namespace App\Models;


    //
    // app/Models/Product.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    
    // Add all fields that can be mass-assigned
    protected $fillable = [
        'ProductName',
        'ProductDescription',
        'ProductPrice',
        'ProductStock',
        'ProductImage',
        'ProductCategory',
        'ProductVendor',
        'ProductStatus'
    ];

    // Define relationships (if any)
    public function category()
    {
        return $this->belongsTo(Category::class, 'ProductCategory');
    }

    public function vendor()
    {
        return $this->belongsTo(Vendor::class, 'ProductVendor');
    }
// app/Models/Product.php

public function isNew()
{
    return $this->created_at > now()->subDays(30); // "New" if created in last 30 days
}

public function hasDiscount()
{
    return $this->originalPrice > $this->ProductPrice;
}

public function discountPercentage()
{
    return round((($this->originalPrice - $this->ProductPrice) / $this->originalPrice) * 100);
}
public function cartItems()
{
    return $this->hasMany(AddToCart::class, 'ProductId');
}
}

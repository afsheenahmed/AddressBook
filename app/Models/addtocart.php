<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class addtocart extends Model
{
    //
    protected $table = 'addtocarts';

protected $fillable = [
    'ProductId',
    'UserId',
    'Quantity',
    'TotalPrice'
];

public function user()
{
    return $this->belongsTo(User::class, 'UserId');
}

public function product()
{
    return $this->belongsTo(Product::class, 'ProductId');
}
}

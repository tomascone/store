<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartProduct extends Model
{
    use HasFactory;

    protected $guarded = [];
    
    public function cart()
    {
        return $this->belongsTo(Cart::class);
    }
    
    public function products()
    {
        return $this->belongsTo(Product::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
      protected $fillable = [
        'product_name',
        'product_details',
        'product_price',
        'product_image',
        'commission',
    ];
   public function category()
{
    return $this->belongsTo(Category::class);
}
}

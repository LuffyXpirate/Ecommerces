<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    protected $fillable = [
        'name',
        'description',
        'price',
        'discount',
        'image',
        'stock',
        'seller_id',
    ];    
    protected $casts =[
        'image' => "array"
    ];
     
    public function seller(): BelongsTo
    {
        return $this->belongsTo(Seller::class,);
    }

   
    public function product_info(): HasMany
    {
        return $this->hasMany(ProductInfo::class,);
    }
}

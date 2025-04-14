<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProductInfo extends Model
{
   protected $fillable = [
    'title',
    'description'
   ];
    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class,);
    }
}

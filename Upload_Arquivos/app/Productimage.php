<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Productimage extends Model
{
    protected $table = 'products_images';
    public $timestamps = false;

    public function product(){
        return $this->belongsTo(Product::class, 'product', 'id');
    }
}

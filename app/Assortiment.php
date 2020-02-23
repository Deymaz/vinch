<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assortiment extends Model
{
    protected $table = 'assortiment';

    protected $fillable = [
        'product_id',
        'created_at',
        'updated_at',
        'content',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}

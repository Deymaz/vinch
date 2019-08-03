<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    protected $table = 'products';

    protected $fillable = [
        'category_id',
        'name',
        'file_url',
        'description_ru',
        'description_ua',
        'description_en'
    ];

    /**
     * @return HasMany
     */
    public function assortiment(): HasMany
    {
        return $this->hasMany(Assortiment::class);
    }

    /**
     * @return BelongsTo
     */
    public function category(): BelongsTo
    {
       return $this->belongsTo(Category::class);
    }
}

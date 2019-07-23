<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    protected $table = 'products';

    protected $fillable = [
        'category_id',
        'name_ru',
        'name_ua',
        'name_en',
        'description_ru',
        'description_ua',
        'description_en'
    ];

    /**
     * @return HasMany
     */
    public function attributes()
    {
        return $this->hasMany('App/Attributes');
    }
}

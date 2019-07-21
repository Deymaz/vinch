<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Attribute extends Model
{
    /**
     * @return BelongsTo
     */
    public function product()
    {
        return $this->belongsTo('App\Product');
    }
}

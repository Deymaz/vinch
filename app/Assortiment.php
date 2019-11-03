<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assortiment extends Model
{
    protected $table = 'assortiment';

    protected $fillable = [
        'name',
        'product_id',
        'created_at',
        'updated_at',
        'fao',
        'type',
        'usage',
        'crop_potential',
        'drought_tolerance',
        'sufficient_moisture',
        'insufficient_moisture',
        'optimal_moisture',
        'processing',
        'ripeness_group',
        'sow_time',
        'details',
        'vegetation_period_days',
        'intensity',
        'herbicides_tolerance',
        'oleic_acid_content',
        'variety',
        'disinfectant',
        'origin',
        'protein_content',
        'group',
        'active_substance',
        'cost_rate_hectare',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateAssortimentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'product_id' => 'integer',
            'name' => 'required|string|max:200',
            'fao' => 'integer',
            'type' => 'string|max:200',
            'usage' => 'string|max:200',
            'crop_potential' => 'string|max:200',
            'drought_tolerance' => 'string|max:200',
            'sufficient_moisture' => 'string|max:200',
            'insufficient_moisture' => 'string|max:200',
            'optimal_moisture' => 'string|max:200',
            'processing' => 'string|max:200',
            'ripeness_group' => 'string|max:200',
            'sow_time' => 'string|max:200',
            'details' => 'string|max:400',
            'vegetation_period_days' => 'integer',
            'intensity' => 'string|max:200',
            'herbicides_tolerance' => 'string|max:200',
            'oleic_acid_content' => 'string|max:200',
            'variety' => 'string|max:200',
            'disinfectant' => 'string|max:150',
            'origin' => 'string|max:200',
            'protein_content' => 'string|max:150',
            'group' => 'string|max:100',
            'active_substance' => 'string|max:150',
            'cost_rate_hectare' => 'string|max:80',
        ];
    }
}

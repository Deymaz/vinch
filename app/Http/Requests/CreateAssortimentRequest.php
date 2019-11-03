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
            'fao' => 'integer|nullable',
            'type' => 'string|max:200|nullable',
            'usage' => 'string|max:200|nullable',
            'crop_potential' => 'string|max:200|nullable',
            'drought_tolerance' => 'string|max:200|nullable',
            'sufficient_moisture' => 'string|max:200|nullable',
            'insufficient_moisture' => 'string|max:200|nullable',
            'optimal_moisture' => 'string|max:200|nullable',
            'processing' => 'string|max:200|nullable',
            'ripeness_group' => 'string|max:200|nullable',
            'sow_time' => 'string|max:200|nullable',
            'details' => 'string|max:400|nullable',
            'vegetation_period_days' => 'integer|nullable',
            'intensity' => 'string|max:200|nullable',
            'herbicides_tolerance' => 'string|max:200|nullable',
            'oleic_acid_content' => 'string|max:200|nullable',
            'variety' => 'string|max:200|nullable',
            'disinfectant' => 'string|max:150|nullable',
            'origin' => 'string|max:200|nullable',
            'protein_content' => 'string|max:150|nullable',
            'group' => 'string|max:100|nullable',
            'active_substance' => 'string|max:150|nullable',
            'cost_rate_hectare' => 'string|max:80|nullable',
        ];
    }
}

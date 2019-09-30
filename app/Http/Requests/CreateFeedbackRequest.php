<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateFeedbackRequest extends FormRequest
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
            'id' => 'integer',
            'name' => 'required|string|max:200',
            'email' => 'required|string|max:200',
            'phone' => 'required|string|max:50',
            'question' => 'required|string|max:1000',
            'is_processed' =>  'bool',
        ];
    }
}

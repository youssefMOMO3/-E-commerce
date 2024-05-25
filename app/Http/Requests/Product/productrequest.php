<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class productrequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'avatar' => 'image|mimes:jpeg,png,jpg|max:2048',
            'size' => 'required|string|max:255',
            'price' => 'required|string|max:55',
            'Qte' => 'required|string|max:255',
            'description' => 'required|string',      
            'marke' => 'required|string|max:100',
           
        ];
    }
}

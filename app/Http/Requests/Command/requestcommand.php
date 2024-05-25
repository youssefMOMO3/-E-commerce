<?php

namespace App\Http\Requests\Command;

use Illuminate\Foundation\Http\FormRequest;

class requestcommand extends FormRequest
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
                'name' => 'required|string|max:55',
                'phone' => 'required|string|max:55',
                'adriss' => 'required|string|max:255',
                'product_title' => 'required|string|max:150',
                'qte' => 'required|string|max:55',
                'price' => 'required|string|max:255',
                'statuscmd' => 'required|string|max:255',      
                'statuspay' => 'required|string|max:100',
                'dateLiv' => 'required|string|max:100',
                'marke' => 'required|string|max:100',
                'size' => 'required|string|max:150',
                'idpro' => 'required|string|max:150',
            ];
    }
}

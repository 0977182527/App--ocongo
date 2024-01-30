<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nom' => ['required'],
            'email' =>['required', 'email'],
            'telephone' => ['required'],
            'province'=>['required'],
            'ville' =>['required'],
            'quartier'=>['required'],
            'commune' =>['required'],
            'avenue_rue'=>['required'],
            'numero'=>['required'],
            'image'=>['required'],
        ];
    }
}

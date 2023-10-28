<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidadorFormBiblioteca extends FormRequest
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
     *  'txtpaginas' => 'required|numeric', 'txtemail' => 'required|email'
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'txtisbn' => 'required|size:13',
            'txtTitulo' => 'required',
            'txtautor' => 'required',
            'txtpaginas' => 'required|numeric',
            'txteditorial' => 'required',
            'txtemail' => 'required|email'
        ];
    }
}

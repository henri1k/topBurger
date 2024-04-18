<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class FormRequestCliente extends FormRequest
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

            'nome' => 'required|max:200|min:5|',
            'email' => 'required|max:200|min:10|unique:cliente_models,email',
            'endereco' => 'required|max:150|',
            'cpf' => 'required|max:11|min:11|',
            'telefone' => 'required|max:11|min:11|',
            'password' => 'required|max:100|min:5|'
            
        ];
    }

    public function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json([
            'success' => false,
            'error' => $validator->errors()
        ]));
    }

    public function messages()
    {
        return[
            'nome.required' => 'O campo nome é obrigatorio',
            'nome.max' => 'O campo nome deve conter no maximo 200 caracteres',
            'nome.min' => 'O campo nome deve conter no minimo 5 caracteres',
            

            'email.required' => 'O campo email é obrigatorio',
            'email.max' => 'O campo email deve conter no maximo 200 caracteres',
            'email.min' => 'O campo email deve conter no minimo 10 caracteres',
            'email.unique' => "O email desse cliente ja foi registrado",

            'numero.required' => 'O campo numero é obrigatorio',
            'numero.max' => 'O campo numero deve conter no maximo 4 caracteres',
            'numero.min' => 'O campo numero deve conter no minimo 4 caracteres',
            
            'preco.required' => 'preço obrigatoria',
            'preco.decimal' => 'O formato de preço é invalido'

            
        ];
    }

}

 
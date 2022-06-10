<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class ContatoStoreRequest extends FormRequest
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
    public function rules()
    {
        return [
            'nome' => 'required|regex:/[a-zA-Z]/',
            'email' => 'required|email',
            'cidade' => 'required|regex:/[a-zA-Z]/',
            'estado' => 'required|regex:/[a-zA-Z]/',
            'telefone' => 'required|regex:/[0-9]/',
            'mensagem' => 'required|regex:/[a-zA-Z0-9]/'
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CadastroFormRequest extends FormRequest
{

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
            'nome' => 'required',
            'email' => 'required',
            'telefone' => 'required',
            'email' => 'email:rfc,dns',
            'endereco' => 'required',
            'curriculo' => 'max:500|required|mimes:doc,docx,pdf,txt'

        ];
    }

    public function messages()
    {
        return [
            'required' => 'O campo :attribute é obrigatório...',
            'curriculo.mimes' => 'O arquivo precisa ser do tipo PDF, DOC, DOCX ou TXT',
            'curriculo.size' => 'O arquivo precisa ter tamanho máximo  de 500kb',
            'email.email' => "O e-mail precisa ser válido"


        ];
    }
}

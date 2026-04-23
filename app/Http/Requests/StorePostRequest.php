<?php

namespace App\Http\Requests;

use App\Rules\CpfValidator;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StorePostRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $id = '';
        if($this->id) $id = decrypt($this->id);
        // dd($id);
        // Rule::unique('users')->ignore($this->id);
        $rules = [
            'name'  => ['required', 'string', 'max:255'],
            'birth' => ['required', 'date', 'before:today'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,'.$id],
            'cpf'   => ['required', 'string', 'unique:users,cpf,'.$id, new CpfValidator()],
        ];

        return $rules;
    }

    public function messages(): array
    {
        // dd($this->email);
        return [
            'name.required' => 'O campo nome é obrigatório.',
            'name.string' => 'O campo nome deve ser uma string.',
            'name.max' => 'O campo nome deve ter no máximo 255 caracteres.',
            'birth.required' => 'O campo data de nascimento é obrigatório.',
            'birth.date' => 'O campo data de nascimento deve ser uma data válida.',
            'birth.before' => 'O campo data de nascimento deve ser uma data anterior a hoje.',
            'email.required' => 'O campo email é obrigatório.',
            'email.string' => 'O campo email deve ser uma string.',
            'email.email' => 'O campo email deve ser um endereço de email válido.',
            'email.max' => 'O campo email deve ter no máximo 255 caracteres.',
            'email.unique' => 'O email já está em uso.',
            'cpf.required' => 'O campo CPF é obrigatório.',
            'cpf.string' => 'O campo CPF deve ser uma string.',
            'cpf.unique' => 'O CPF já está em uso.',
        ];
    }
}

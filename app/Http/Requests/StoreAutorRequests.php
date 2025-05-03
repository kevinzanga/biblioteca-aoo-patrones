<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAutorRequests extends FormRequest
{
    public function authorize(): bool{
        return true;
    }
    public function rules(): array{
        $rules =[
            'nombre'=>'required|string|max:100|unique:autor,nombre'
        ];

        return $rules;
    }
}

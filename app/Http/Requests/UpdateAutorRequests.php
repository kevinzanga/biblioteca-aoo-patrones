<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAutorRequests extends StoreAutorRequests
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array{
        $rules = parent::rules();
        $rules['nombre'] = [
            'required',
            'string',
            'max:100',
            'unique:autor,nombre,'.$this->route('id')->id,
        ];
        return $rules;
    }
}

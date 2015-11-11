<?php

namespace App\Http\Requests\TemaRequest;

use App\Http\Requests\Request;

class StoreTema extends Request
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
            'unidad'    => 'required | integer | unique:temas,unidad',
            'tema'      => 'required | string',
            'materia_id' => 'required',
            'fecha'     => 'required'
        ];
    }
}

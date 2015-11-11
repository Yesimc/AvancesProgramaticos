<?php

namespace App\Http\Requests\SubtemaRequest;
use App\Http\Requests\Request;

class StoreSubtema extends Request
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
            'tema_id'   => 'required | exists:temas,id',
            'subtemas'  => 'required',
            'fecha'     => 'required'
        ];
    }
}

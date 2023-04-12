<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatebookRequest extends FormRequest
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
            'Numero_local' => 'required|string|max:255',
            'Numero_central' => 'required|string|max:255',
            'ISBN' => 'required|string|max:255',
            'Titre' => 'required|string|max:255',
            'Nombre_de_page' => 'required|integer',
            'category_id' => 'required',
            'author_id' => 'required',
            'publisher_id' => 'required',
        ];
    }
}

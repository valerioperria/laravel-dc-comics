<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateComicRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required|min:5|max:250',
            'thumb' => 'required',
            'price' => 'required',
            'series' => 'nullable',
            'type' => 'required',
            'sale_date' => 'nullable',
            'description' => 'nullable'
        ];
    }
    public function messages() {
        return [
            'title.required' => 'Il titolo è obbligatorio',
            'title.min' => 'Il titolo deve essere lungo almeno :min caratteri',
            'tile.max' => 'Il titolo deve essere lungo massimo :max caratteri',
            'thumb.required' => 'la immagine è obbligatoria',
            'price.required' => 'il prezzo è obbligatorio',
            'type.required' => 'la tipologia è obbligatoria'
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComicRequest extends FormRequest
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
            'title' => 'required|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'series' => 'required|max:255',
            'sale_date' => 'required|string',
            'type' => 'required|max:255',
            'thumb' => 'url',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Inserisci il titolo',
            'price.required' => 'Inserisci il prezzo',
            'description.required' => 'Inserisci la descrizione',
            'sale_date.required' => 'Inserisci la data',
            'series.required' => 'Inserisci la serie',
            'type.required' => 'Inserisci il tipo',
            'thumb.url' => 'Inserisci un percorso valido'
        ];
    }
}

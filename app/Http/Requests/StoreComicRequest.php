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
            'type' => 'required|max:255'
        ];
    }

    public function messages()
    {
        return [
            'price.numeric' => 'inserisci numero',
            'sale_date.date_equals' => 'inserisci data',
        ];
    }
}

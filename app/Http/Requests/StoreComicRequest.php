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
            'description' => 'nullable',
            'thumb' => 'nullable|url',
            'price' => 'required|string',
            'series' => 'required|max:255',
            'sale_date' => 'required|date',
            'type' => 'required|max:100',
            'artists' => 'nullable|max:255',
            'writers' => 'nullable|max:255',
        ];
    }

    /**
     * Get custom messages for validation errors.
     *
     * @return array<string, mixed>
     */
    public function messages()
    {
        return [
            'title.required' => 'Il titolo è obbligatorio.',
            'title.max' => 'Il titolo non può superare i 255 caratteri.',
            'thumb.url' => "L'URL della miniatura non è valido.",
            'price.required' => 'Il prezzo è obbligatorio.',
            'series.required' => 'La serie è obbligatoria.',
            'series.max' => 'La serie non può superare i 255 caratteri.',
            'sale_date.required' => 'La data di vendita è obbligatoria.',
            'sale_date.date' => 'La data di vendita deve essere una data valida.',
            'type.required' => 'Il tipo è obbligatorio.',
            'type.max' => 'Il tipo non può superare i 100 caratteri.',
            'artists.max' => 'Gli artisti non possono superare i 255 caratteri.',
            'writers.max' => 'Gli scrittori non possono superare i 255 caratteri.',
        ];
    }
}

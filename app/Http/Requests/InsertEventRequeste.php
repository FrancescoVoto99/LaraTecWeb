<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InsertEventRequeste extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        // Nella form non mettiamo restrizioni d'uso su base utente
        // Gestiamo l'autorizzazione ad un altro livello
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        return [
            'nomeEvento' => 'required|max:25',
            'categoria' => 'required',
            'bigliettiDisponibili' => 'required|integer|min:0',
            'image' => 'image|max:1024',
            'prezzo' => 'required|numeric|min:0',
            'discountPerc' => 'required|integer|min:0|max:100',
            'discounted' => 'required',
            'descLong' => 'required|max:2500'
        ];
    }
}

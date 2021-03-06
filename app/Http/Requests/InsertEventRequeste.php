<?php

namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;

use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;
use Symfony\Component\HttpFoundation\Response;

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
            'id'=>'',
            'nomeEvento' => 'required|max:25',
            'categoria' => 'required',
            'dataOra' => 'after:today',
            'bigliettiDisponibili' => 'required|integer|min:0',
            'prezzo' => 'required|numeric|min:0',
            'sconto' => 'required|integer|min:0|max:100',
            'insconto' => 'required',
            'descrizione' => 'required|max:2500',
            'luogo' => 'required|max:2500',
            'regione' => 'required',
            'raggiungere'=>'required',
            'image' => 'file|mimes:jpeg,png|max:1024',
            
        ];
    }
    
     protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response($validator->errors(), Response::HTTP_UNPROCESSABLE_ENTITY));
    }
}

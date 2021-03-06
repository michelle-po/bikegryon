<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InscriptionRequest extends FormRequest
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
            'nom'=>'required|min:2|max:20|alpha',
            'prenom'=>'required|min:2|max:20|alpha',
            'birthday'=>'required|date|before:14 years ago',
            'email1'=>'required|email',
        /*  'vendredi' => 'required_without_all: samedi, dimanche',
        'samedi'=> 'required_without_all: vendredi, dimanche',
        'dimanche'=> 'required_without_all: vendredi, samedi',  */
        ];
    }
}

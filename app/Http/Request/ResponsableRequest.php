<?php
namespace App\Http\Request;

use App\Http\Request\BaseFromRequest;

class OffreCategRequest extends BaseFromRequest{

    public function authorize(){
        return true;
    }

    public function rules(){
        return [
            'name'=>'required|string',
            'adress'=>'required|string',
            'phone'=>'required|string',
            'agence_id'=>'required|integer'

        ];
    }

    public function messages(){
        return [
            'name.required'=>'Votre nom est obligatoire',
            'adress.required'=>'Votre adresse est obligatoire',
             'phone.required'=>'Votre phone est obligatoire',
             'agence_id.required'=>'L\'agence est obligatoire '
        ];
    }
}
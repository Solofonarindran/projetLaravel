<?php
namespace App\Http\Request;

use App\Http\Request\BaseFromRequest;

class ClientRequest extends BaseFromRequest{

    public function authorize(){
        return true;
    }

    public function rules(){
        return [
            'name'=>'required|string',
            'adress'=>'required|string',
            'cin'=>'required|string',
            'workspace'=>'required|string'

        ];
    }

    public function messages(){
        return [
            'name.required'=>'Votre nom est obligatoire',
            'adress.required'=>'Votre adresse est obligatoire',
             'cin.required'=>'Votre phone est obligatoire',
             'workspace.required'=>'Votre poste de travail est obligatoire'
        ];
    }
}

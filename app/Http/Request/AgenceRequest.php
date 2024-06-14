<?php
namespace App\Http\Request;

class AgenceRequest extends BaseFromRequest{
    
    public function authorize(){
        return true;
    }

    public function rules(){
        return [
            'libelle'=>'required|string',
            'code'=>'required|alpha_num',
            'province'=>'required|string'
        ];
    }

    public function messages(){
        return [
            'libelle.required'=>'Le champ libellé est obligatoire',
            'libelle.string'=>'Le champ doit être chaîne de caractère',
            'province.required'=>'Le champ province est obligatoire',
            'province.string'=>'Ne supporte qu\'un chaîne'
        ];
    }
}
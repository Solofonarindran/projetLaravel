<?php
namespace App\Http\Request;

use App\Http\Request\BaseFromRequest;

class TerrainRequest extends BaseFromRequest{
    public function authorize(){
        return true;
    }
    public function rules(){
        return [
            'numero'=>'required|string',
            'superficie'=>'required|integer'
        ];
    }
    public function messages(){
        return [
            'numero.required'=>'Numéro est un champ obligatoire',
            'superficie.required'=>'Superficie est un champ obligatoire',
            'superficie.integer'=>'La valeur doit être numérique'
        ];
    }
}
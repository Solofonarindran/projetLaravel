<?php
namespace App\Http\Request;

class LogementRequest extends BaseFromRequest{

    public function authorize(){
        return true;
    }
    public function rules(){
        return [

                'numero'=>'required|alpha_num',
                'typevente'=>'required|string',
                'prix'=>'required',
                'cite_id'=>'required|integer',
                'terrain_id'=>'required|integer'

    ];
    }

    public function messages(){
        return [
            'numero.required'=>'Ajouter le numéro',
            'numero.alpha_num'=>'Le numéro doit être en alphanumérique',
            'typevente.required'=>'Champ obligatoire',
            'prix.required'=>'Saisir le prix de logement',
            'cite_id.required'=>'Entrer le cité',
            'terrain_id.required'=>'Votre terrain est obligatoire'
        ];
    }
}
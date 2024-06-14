<?php
namespace App\Http\Request;

use App\Http\Request\BaseFromRequest;

class CiteRequest extends BaseFromRequest{

    public function authorize(){
        return true;
    }

    public function rules(){
        return [
            'libelle'=>'required|string',
            'agence_id'=>'required|integer',
        
            
        ];
    }

    public function messages(){
        return [
            'libelle.required'=>'Le libellé est obligatoire',
            'agence_id.required'=>'L\'agence correspondant est obligatoire',            
            'agence_id.integer'=>'Selectioner un Agence'
        ];
    }
    
}
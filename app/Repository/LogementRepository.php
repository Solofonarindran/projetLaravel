<?php

namespace App\Repository;
use App\Models\Agence;
use App\Models\Logement;



class LogementRepository extends AbstractRepository{

    protected $agencemodel;
    public function __Construct(Logement $logement,Agence $agencemodel){
        $this->model=$logement;
        $this->agencemodel=$agencemodel;
        $this->relation=['cite','terrain','client','contrat','agence'];
    }

    public function getAll(){
        return $this->model
                    ->newQuery()
                    ->where('client_id',null)
                    ->get();
    }

    public function getByIdAgence($id){
        return $this->agencemodel
                    ->newQuery()
                    ->where('id',$id)
                    ->get();
    }

    public function getByIdAgenceWithrelation($id){
        return $this->model
                    ->newQuery()
                    ->where('agence_id',$id)
                    ->with($this->relation)
                    ->get();
    }





    public function TotalgetByAgenceId($id){
        return $this->model
                    ->newQuery()
                    ->where('agence_id',$id)
                    ->sum('prix');
                  
    }



    //nonvendu
    public function NonvendugetByAgenceId($id){
        return $this->model
                    ->newQuery()
                    ->where('agence_id',$id)
                    ->where('client_id',null)
                    ->get();
                  
    }
    public function TotalNonvendugetByAgenceId($id){
        return $this->model
                    ->newQuery()
                    ->where('agence_id',$id)
                    ->where('client_id',null)
                    ->sum('prix');
                  
    }




    //credit
    public function CreditgetByAgenceId($id){
        return $this->model
                    ->newQuery()
                    ->where('agence_id',$id)
                    ->wherenot('client_id',null)
                    ->where('typevente','credit')
                    ->get();
                  
    }

    public function TotalCreditgetByAgenceId($id){
        return $this->model
                    ->newQuery()
                    ->with($this->relation)
                    ->where('agence_id',$id)
                    ->wherenot('client_id',null)
                    ->where('typevente','credit')
                    ->sum('prix');
                  
    }


     //paye
     public function payegetByAgenceId($id){
        return $this->model
                    ->newQuery()
                    ->where('agence_id',$id)
                    ->wherenot('client_id',null)
                    ->where('typevente','paye')
                    ->get();
                  
    }

    public function TotalPayegetByAgenceId($id){
        return $this->model
                    ->newQuery()
                    ->where('agence_id',$id)
                    ->wherenot('client_id',null)
                    ->where('typevente','paye')
                    ->sum('prix');
                  
    }
   


    public function getCredit(){
        return $this->model
                    ->newQuery()
                    ->with($this->relation)
                    ->wherenot('client_id',null)
                    ->where('typevente','credit')
                    ->get();
    }

    public function getPaye(){
        return $this->model
                    ->newQuery()
                    ->with($this->relation)
                    ->wherenot('client_id',null)
                    ->where('typevente','paye')
                    ->get();
    }


    //summe of the lodge paye

    public function sumPaye(){
        return $this->model
                    ->newQuery()
                    ->where('typevente','paye')
                    ->sum('prix');
    }

    //summe of the lodge no paye

    public function sumCredit(){
        return $this->model
                    ->newQuery()
                    ->where('typevente','credit')
                    ->sum('prix');
    }

    public function sumTotal(){
        return $this->model
                    ->newQuery()
                    ->sum('prix');
    }


    //summe total non vendu

    public function sumNonVendu(){
        return $this->model
                    ->newQuery()
                    ->where('client_id',null)
                    ->sum('prix');
    }

    

}
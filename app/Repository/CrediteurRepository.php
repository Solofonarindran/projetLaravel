<?php

namespace App\Repository;

use App\Models\Abonnez;
use App\Models\Logement;

class CrediteurRepository extends AbstractRepository{

    protected $abonnezmodel;
    
    public  function __Construct(Logement $logement,Abonnez $abonnez){

        $this->model=$logement;
        $this->abonnezmodel=$abonnez;
        $this->relation=['client','agence','abonnezs','contrat'];

    }

    public function getAll(){

        return $this->model
                    ->newQuery()
                    ->with($this->relation)
                    ->wherenot('contrat_id',null)
                    ->where('contratfinish',false)
                    ->get();
    }

    public function getByIdLodge($id){
        return $this->model
                    ->newQuery()
                    ->with($this->relation)
                    ->where('id',$id)
                    ->get();
    }


}


?>
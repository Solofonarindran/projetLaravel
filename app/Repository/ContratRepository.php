<?php
namespace App\Repository;

use App\Models\Contrat;

class ContratRepository extends AbstractRepository{

    public function __Construct(Contrat $contrat){
        $this->model=$contrat;

    }

    public function getIdBetweenBudget($budget){
        return $this->model
                    ->newQuery()
                    ->where(function($query) use ($budget){
                        $query->where('minority','<',$budget)
                              ->orwhere('minority','=',$budget);
                    })  
                    ->where('majority','>',$budget)
                    ->get();

    }
}

?>
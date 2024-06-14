<?php
namespace App\Repository;
use App\Models\Responsable;

 class ResponsableRepository extends AbstractRepository{
    

        public function __Construct(Responsable $responsable){
            $this->model=$responsable;
            $this->relation=['agence'];
        }

        public function getByIdAgence($id){

            return $this->model
                        ->newQuery()
                        ->where('agence_id',$id)
                        ->get();
        }

 }


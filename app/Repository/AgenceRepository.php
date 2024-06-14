<?php
namespace App\Repository;

use App\Models\Agence;


class AgenceRepository extends AbstractRepository{

    public function __Construct(Agence $agence){
        $this->model=$agence;
        $this->relation=['responsables'];
    }

    public function getByName($province){

        return $this->model
                    ->newQuery()
                    ->where('province',$province)
                    ->get();
    }
   
}

?>
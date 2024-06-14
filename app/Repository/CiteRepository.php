<?php
namespace App\Repository;
use App\Models\Cite;

class CiteRepository extends AbstractRepository{

    public function __Construct(Cite $cite){
        $this->model=$cite;
        $this->relation=['agence','logements'];
    }

  
}
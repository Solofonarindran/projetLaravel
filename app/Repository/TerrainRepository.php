<?php
namespace App\Repository;
use App\Models\Terrain;

    class TerrainRepository extends AbstractRepository{

        public function __Construct(Terrain $terrain){
            $this->model=$terrain;
            $this->relation=['logements'];
        }
    }
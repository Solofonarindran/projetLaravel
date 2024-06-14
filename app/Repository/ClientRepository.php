<?php
namespace App\Repository;
use App\Models\Client;

class ClientRepository extends AbstractRepository{

    public function __Construct(Client $client){
        $this->model=$client;
        $this->relation=['logements'];
    }
}
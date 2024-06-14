<?php
namespace App\Repository;

use App\Models\User;


class UserRepository extends AbstractRepository{

    public function __Construct(User $user){
        $this->model=$user;
    
    }

    
   
}

?>
<?php
    namespace App\Repository;

    use App\Models\Abonnez;

    class AbonnezRepository extends AbstractRepository{

        public function __Construct(Abonnez $abonnez){
            $this->model=$abonnez;
            $this->relation=['logement'];
        }

    }

?>
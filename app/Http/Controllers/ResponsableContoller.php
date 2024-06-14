<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repository\ResponsableRepository;

class ResponsableContoller extends Controller
{
    protected $repository;

    public function __Construct(ResponsableRepository $responsableRepo ){

        $this->repository=$responsableRepo;
    }

    public function getById($id)
    {
        return $this->repository
                    ->getById(id);
    }
    public function getAll()
    {
        return $this->repository
                    ->getAll();
    }

    public function edit(RulesRequest $request,$id=null)
    {
        $request->validated();
        return $this->repository
                    ->edit($id,$request->input());
    }

    public function delete($id=null)
    {
        return $this->repository
                    ->delete($id);
    }

}

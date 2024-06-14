<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TerrainController extends Controller
{
    //

    protected $repository;

    public function __Construct(TerrainRepository $terrainRepo){

        $this->repository=$terrainRepo;
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

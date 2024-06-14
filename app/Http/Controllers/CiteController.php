<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repository\CiteRepository;

class CiteController extends Controller
{
    //
    protected $repository;

    public function __Construct(CiteRepository $citerepo){

        $this->repository=$citerepo;
    }

    public function getById($id)
    {
        return $this->repository
                    ->getById(id);
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

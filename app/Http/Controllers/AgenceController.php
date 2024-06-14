<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repository\AgenceRepository;
use App\Repository\ResponsableRepository;

class AgenceController extends Controller
{
    //
    protected $repository,
               $responsablerepo;


    public function __Construct(AgenceRepository $agencerepo,
                                ResponsableRepository $responsablerepo){
        $this->repository=$agencerepo;
        $this->responsablerepo=$responsablerepo;
    }

    
    public function getById($id)
    {
        $agence= $this->repository
                      ->getById($id);

        
        $agence=$agence[0];
        //$responsable=$this->responsablerepo->getByIdAgence($agence['id']);
        return view('front_office/detail_agence',compact('agence'));
       
    }




    public function getAll()
    {
        $agences= $this->repository
                    ->getAll();

       
        return $agences;
       // return view('front_office/agence',compact('agences'));
        
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

?>
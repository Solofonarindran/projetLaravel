<?php

namespace App\Http\Controllers;

use App\Repository\AbonnezRepository;
use Illuminate\Http\Request;
use App\Repository\CrediteurRepository;

class CrediteurController extends Controller
{
     protected $repository,$abonnezRepo;

     public function __Construct(CrediteurRepository $creditRepo,AbonnezRepository $abonnezRepo){

         $this->repository=$creditRepo;
         $this->abonnezRepo=$abonnezRepo;

     }

     public function listeAll(){

        $crediteurs=$this->repository->getAll();
       
      
        return view('front_office/crediteur',compact('crediteurs'));
     }

     public function detail($id=null){
        
        $crediteur=$this->repository->getByIdLodge($id);

        //return response()->json($crediteur);
        return view('front_office/detail_crediteur',compact('crediteur'));
     }

     public function edit(Request $request){

        $request=$request->input();
        $id_lodge=$request['logement_id'];
        $request['mounth']='En attente';
        $this->abonnezRepo->edit($id=null,$request);

        $logement=$this->repository->getByIdLodge($id_lodge);
        $compte=($logement[0]->compte)+$request['count'];

        $logement=$this->repository->edit($id_lodge,['compte'=>$compte]);
        return response()->json($logement);



     }
}

<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Repository\AgenceRepository;
use App\Repository\ClientRepository;
use App\Repository\ContratRepository;
use App\Repository\LogementRepository;

class LogementStatController extends Controller
{
    //

    protected $repository;
    protected $clientrepo;
    protected $agencerepo;
    protected $contratrepo;

    public function __Construct(LogementRepository $logeRepository,
                                ClientRepository $clientrepo,
                                AgenceRepository $agencerepo,
                                ContratRepository $contratrepo){

        $this->repository=$logeRepository;
        $this->clientrepo=$clientrepo;
        $this->agencerepo=$agencerepo;
        $this->contratrepo=$contratrepo;
            

    }



    
    public function getByAgenceId($id){
        //somme général getByAgenceId
        $sommeTotal= $this->repository
                          ->TotalgetByAgenceId($id);


        $agence=$this->repository
                     -> getByIdAgence($id);

        

        //----------------------non vendu par num agence
            //liste 
            $nonvendu= $this->repository
                            ->NonvendugetByAgenceId($id);
            //somme
            $totalnonvendu=$this->repository
                                ->TotalNonvendugetByAgenceId($id);
            


        //-----------------------à crédit par num agence
              //liste
              $listecredit=$this->repository
                                ->CreditgetByAgenceId($id);
              //somme
              $credit=$this->repository
                           ->TotalCreditgetByAgenceId($id);


        //-----------------------payé par num agence  
               //liste
               $listepaye=$this->repository
                               ->payegetByAgenceId($id);  
                //somme
               $paye=$this->repository
                           ->TotalPayegetByAgenceId($id);      

        
        return view('front_office/lodge_agence',compact('agence','nonvendu','totalnonvendu',
                                                        'sommeTotal','credit','listecredit',
                                                        'listepaye','paye'
                                                        ));
        
        
    }


    //vente lodge avec un client

    public function buy(Request $request){

        $data=$request->input(); 
      
        $client=$this->clientrepo->edit($id=null,$data);
        $arrayclient= $client->getOriginal();
    

      
      
        
        if($data['typevente']=="paye"){
            $facture='facture/facturebuy';
        }else{

      
            $contrat=$this->contratrepo->getIdBetweenBudget($data['prix']);
            $contrat=$contrat[0]->getOriginal();
            $contrat_id=$contrat['id'];
            $data['contrat_id']=$contrat_id;

            $facture='facture/contratbuy';
        }

        
        //get id client and update a data lodge
        $data['client_id']=$arrayclient["id"];
        $response=$this->repository->edit($data["id"],$data);
        
        //return response()->json($response);
        return view($facture,compact('response','client'));
        
    }

    

    //contrat  lodge by client

    public function contrat($id){
        $lodges= $this->repository
                      ->getById($id);
        

        
        return view('facture/contrat',compact('lodges'));
    }



     //facture lodge by client

     public function factured($id){
        $lodge= $this->repository
                    ->getById($id);
  
       
     return view('facture/facture',compact('lodge'));
    }
  

    //list lodge crédit

    public function listecredit(){

        $lodges=$this->repository
                     ->getCredit();
        
        
        return view('front_office/credit',compact('lodges'));
    }
 
    public function listepaye(){

        $lodges=$this->repository
                     ->getPaye();
        
        
        return view('front_office/paye',compact('lodges'));
    }
    

}
?>
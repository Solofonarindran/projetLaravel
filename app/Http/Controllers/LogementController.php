<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Repository\AgenceRepository;
use App\Repository\ClientRepository;
use App\Repository\LogementRepository;

class LogementController extends Controller
{
    //

    protected $repository;
    protected $clientrepo;
    protected $agencerepo;

    public function __Construct(LogementRepository $logeRepository,
                                ClientRepository $clientrepo,
                                AgenceRepository $agencerepo){

        $this->repository=$logeRepository;
        $this->clientrepo=$clientrepo;
        $this->agencerepo=$agencerepo;
    }

    public function getById($id)
    {
        $lodge= $this->repository
                    ->getById($id);

   
        $lodge=$lodge[0];
        return view('front_office/detail_lodge',compact('lodge'));
    }




    //return all (non vendue) with home page view
    public function getAll()
    {
         $all= $this->repository->getAll();
         

        return view('front_office/home_page',compact('all'));
    }

   

   
    public function research(Request $request){
       
        $province=$request->input();
        $province=$province['province'];
        $agence=$this->agencerepo->getByName($province);
        
        
        if(count($agence)!=0){
            $agence_id=$agence[0]->getOriginal();
        
            $lodge_link=$this->repository->getByIdAgenceWithrelation($agence_id["id"]);
        
            return view('front_office/recherche_province',compact('lodge_link','agence'));
        }else{
            $erreur="Aucun résultat trouvé!! Veuillez ressayer";
            return to_route('lodge')->with('erreur',$erreur);
        }
       
    }


    public function edit(Request $request,$id=null)
    {
       
        $file= $request->file('image');
        $name_file=$file->getClientOriginalName();
        $file->move(public_path('uploads'),$name_file);
        
        $path='/uploads/'.$name_file;

        $data=$request->input();
        $data['path']='/uploads/'.$name_file;

        
         $this->repository
              ->edit($id,$data);
        
        return  to_route('accueil');
    }

    

}
?>
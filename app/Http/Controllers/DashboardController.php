<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repository\LogementRepository;

class DashboardController extends Controller
{
    
    protected $logementRepo;

    public function __Construct(LogementRepository $logementRepo){
        
        $this->logementRepo=$logementRepo;
    }

    public function dashboard(){

       $sumPaye= $this->logementRepo->sumPaye();
       $sumCredit=$this->logementRepo->sumCredit();
       $sumTotal=$this->logementRepo->sumTotal();
       
       // summe credit by agenceid
       $tabcredit=array();
       $tabpaye=array();

       $i=1;

       while($i<=4){

            $credit=$this->logementRepo->TotalCreditgetByAgenceId($i);
            $paye=$this->logementRepo->TotalPayegetByAgenceId($i);

            $tabpaye[$i]=$paye;
            $tabcredit[$i]=$credit;
            $i++;
       }
       

      
       return view('facture/dashboard',compact('sumPaye','sumCredit','sumTotal','tabpaye','tabcredit'));
    }
}

<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;


class AuthClient extends AuthController{

    public function customlogin(){

         $this->request->validate([
            'email'=>'required|email',
            'password'=>'required|string'
        ]); 

        $array_request=$this->request->only('email','password');
        
    
        if(Auth::attempt($array_request)){
       
            return redirect()->route('accueil');
        }
        return to_route('login')->with('failed','Permission Failed!!');
    }

    public function customRegistration(){
        
          $this->request->validate(
            [
                'email'=>'required|email',
                'password'=>'required|string',
            ]
        ); 
        // API repository
        $this->repository->edit($id,$this->request->input());
        return redirect()->route('login');


    }

    public function logout(){
      
        Session::flush();
        $this->auth::logout();
        $this->request->session()->regenerateToken();
        return to_route('login');
    }
}
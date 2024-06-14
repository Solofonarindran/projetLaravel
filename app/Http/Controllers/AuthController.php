<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repository\UserRepository;
use App\Repository\MediaRepository;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth as authentication;


abstract class AuthController extends Controller
{
   protected $request,
             $auth,
             $repository,
             $userRequest,
             $mediaRepo;
   public function __Construct(Request $requests,
                               authentication $auth,
                               UserRepository $userRepository,
                              
                               ){
      
      $this->request=$requests;
      $this->auth=$auth;
      $this->repository=$userRepository;
 
     

   }

   abstract public function customlogin();

   abstract public function customRegistration();

   abstract public function logout();
}

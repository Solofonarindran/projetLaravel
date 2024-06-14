@extends('front_office.layout')

@section('title')
    ApplyJob | Login
@endsection

@section('styles')
    <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="/assets/css/login-signup.css" rel="stylesheet">
       <!-- Favicons -->
    <link href="/assets/img/favicon.png" rel="icon">
    <link href="/assets/img/apple-touch-icon.png" rel="apple-touch-icon">
@endsection 

@section('header')

            <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
        <a href="pages-login.html" class="logo d-flex align-items-center">
            <img src="/assets/img/favicon.png" alt="">
            <span class="">
                    E-Gelodge
            </span>
        </a>
    </div>
    <!-- End Logo -->

    <nav class="header-nav ms-auto">
        <ul class="d-flex align-items-center">
           
            <li class="nav-item dropdown">
                <a class="nav-link nav-icon" href="#">
                    <button class="btn btn-outline-light rounded-pill d-flex align-items-center">
                        <i class="bi bi-person-plus"></i> <small class="d-lg-block"> &nbsp; Creer un compte</small>
                    </button>
                </a>
            </li>
        </ul>
    </nav>
    <!-- End Icons Navigation -->
    </header>
    <!-- End Header -->

@endsection

@section('contents')
        
<main style="background: rgba(0, 63, 78, 0.603);">
<div class="container">
    <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
                    <div class="d-flex justify-content-center py-4">
                        <a href="pages-login.html" class="logo d-flex align-items-center w-auto">
                            <span class="d-block" style="font-size: 50px;">
                                E-Gelodge
                            </span>
                        </a>
                    </div>
                    <!-- End Logo -->

                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="pt-4 pb-2">
                                <h5 class="card-title text-center pb-0 fs-4">Se connecter a votre compte</h5>
                                
                                @if(session('failed'))
                                    <center class="alert alert-danger">Votre connexion a été échouée</center>
                                    @else
                                          <p class="text-center small">Entrez votre addrese email et votre mot de passe</p>
                                @endif
                            </div>

                            <form class="row g-3" method="POST" action="{{route('custlog')}}">
                                @csrf
                                <div class="col-12">
                                    <label for="email" class="form-label">Addrese email</label>
                                    <div class="input-group">
                                        <span class="input-group-text" id="inputGroupPrepend"> <i class="bi bi-person"></i> </span>
                                        <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Entrez vote email ..." id="yourEmail">
                                        <!--  <div class="invalid-feedback">Email non valide.</div>  -->
                                       
                                            @error('email')
                                                <center class="alert alert-danger w-100">{{$message}}</center>
                                            @enderror
                                        
                                    </div>
                                    
                                </div>

                                <div class="col-12">
                                    <label for="yourPassword" class="form-label">Mot de passe</label>
                                    <div class="input-group ">
                                        <span class="input-group-text" id="inputGroupPrepend"> <i class="bi bi-eye"></i> </span>
                                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="yourPassword" placeholder="Entrez votre mot de passe ..." >
                                        <!-- <div class="invalid-feedback">Mot de passe non valide.</div>  -->
                                        @error('password')
                                            <center class="alert alert-danger w-100">{{$message}}</center>
                                        @enderror
                                        
                                       
                                    </div>
                                   

                                </div>

                                <div class="col-12">
                                    <button class="btn btn-primary w-100 p-2 fs-6" type="submit" id="login">connexion</button>
                                </div>
                                <div class="col-12">
                                    <p class="small mb-0">J'ai pas de compte. <a href="pages-register.html">Creer un compte</a></p>
                                </div>
                                
                            </form> 
                         

                        </div>
                    </div>

                    <div class="credits text-white">
                        &copy; copyright <a href="" class="text-white">ApplyJob</a>
                    </div>

                </div>
            </div>
        </div>

    </section>

</div>
</main>
<!-- End #main -->
@endsection

@section('scripts')
     
    <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/js/jquery3-5-1.js"></script>
  
    <script src="/assets/js/app.js"></script>
    <script src="/assets/js/main.js"></script>
@endsection
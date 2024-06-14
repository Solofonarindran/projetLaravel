@extends('front_office.layout_fils')

@section('title')
    E-Geloge | Agence
@endsection

@section('style')
     <!-- Template Main CSS File -->
     <link href="/assets/css/style.css" rel="stylesheet">
     <style>
            #animate{
                animation: animate 1s 0.5s forwards;
            }
            
            #opacity{
                animation: 2s 0.5s opacity forwards
            }
            #animate2{ 
                animation: animate2 1.5s 0.5s forwards;
            }

            #animate3{ 
                animation: animate3 1.5s 0.5s forwards;
            }
            
            @keyframes opacity {

                0%{
                    opacity: 0;
                }
                25%{
                    opacity: 0.25;
                }
                50%{
                    opacity: 0.5;
                }
                75%{
                    opacity: 0.75;
                }
                100%{

                    opacity: 1;
                }
            }

            @keyframes animate {
                from{
                    opacity: 0.2;
                    transform:translateY(15px);
                }   
                
                to{
                    opacity: 0.5;
                    transform:translateY(0);
                    opacity: 1;

                }
            }
            @keyframes animate2 {

                from{

                    opacity: 0.2;
                    transform:translateX(-10px)

                }

                to{
                    opacity: 0.5;
                    transform:translateX(0);
                    opacity: 1;

                }
                
            }

            @keyframes animate3 {

                from{

                    opacity: 0.2;
                    transform:translateX(10px)

                }

                to{
                    opacity: 0.5;
                    transform:translateX(0);
                    opacity: 1;

                }

            }

     </style>
@endsection

@section('contents')
<main id="main" class="main">

<div class="pagetitle">
    <h1 style="opacity:0" id="animate">Agence</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item" style="opacity:0" id="animate2"><a href="{{route('accueil')}}">Home</a></li>
            <li class="breadcrumb-item">Agence</li>
            <li class="breadcrumb-item active" style="opacity:0" id="animate3">Agence_name</li>
        </ol>
    </nav>
</div>
<!-- End Page Title -->

<section class="section profile">
 <div class="row">
        <div class="col-xl-4">
            <div></div>
            <div class="card" style="opacity:0" id="opacity">
                <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

                    <img src="/profils/cover-2-lg.png" alt="Profile" class="rounded-circle">
                    <h2>{{$agence->libelle}}</h2>
                    <h3>Agence</h3>
                    <div class="social-links mt-2">
                        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>
            </div>

            <div class="row mb-3">
                    <div class="d-flex justify-content-center">
                       <a href="{{route('lodge_agence',['id'=>$agence->id])}}"><button style="opacity:0" id="opacity" class="btn btn-success">Logement lié</button></a> 
                    </div>
            </div>

        </div>

        <div class="col-xl-8" style="heigth:50vh; overflow-y:scroll">

            @foreach($agence->responsables as $responsable)          
                <div class="col-xl-12">
                    <div class="card" style="opacity:0" id="animate">
                        <div class="card-title d-flex justify-content-center align-items-center">
                            <h4 class="text-center fw-bold">Profil responsable</h4>
                        </div>
                        <hr style="margin-top: -10px;">
                        <div class="card-body">
                            <div class="row">

                                <div class="col-xl-8">
                                    <div class="row mb-3">
                                        <div class="col-lg-3 col-md-4 fw-bold text-primary">Nom</div>
                                        <div class="col-lg-9 col-md-8">{{$responsable->name}}</div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-lg-3 col-md-4 fw-bold text-primary">Adresse</div>
                                        <div class="col-lg-9 col-md-8">{{$responsable->adress}}</div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-lg-3 col-md-4 fw-bold text-primary">Contact</div>
                                        <div class="col-lg-9 col-md-8">{{$responsable->phone}}</div>
                                    </div>

                                   

                                </div>
                                <div class="col-xl-4">
                                    <img src="{{$responsable->path}}" alt="" height="120px" width="150px" style="border-radius: 20px;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            @endforeach

          
        </div>
</div>


</section>

</main>
@endsection
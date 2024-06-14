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
    </style>
@endsection

@section('contents')
    <!-- main -->
    <main id="main" class="main">

    <div class="pagetitle">
        <h1 id="animate" style="opacity:0">Agences</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item" id="animate2" style="opacity:0"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" id="animate3" style="opacity:0">Agence</li>
               
            </ol>
        </nav>
    </div>
    <!-- End Page Title -->
    <section>
        <div class="row">
            

                @foreach($agences as $agence)
                    <div class="col-xl-6">
                        <div class="card" style="opacity:0" id="opacity">
                            <div class="card-title d-flex justify-content-center align-items-center">
                                <h4 class="text-center fw-bold">Profil Agence</h4>
                            </div>
                            <hr style="margin-top: -10px;">
                            <div class="card-body">
                                <div class="row">

                                    <div class="col-xl-8">
                                        <div class="row mb-3">
                                            <div class="col-lg-3 col-md-4 fw-bold text-primary">Nom</div>
                                            <div class="col-lg-9 col-md-8 text-uppercase">{{$agence->libelle}}</div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-lg-3 col-md-4 fw-bold text-primary">Code</div>
                                            <div class="col-lg-9 col-md-8">{{$agence->code}}</div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-lg-3 col-md-4 fw-bold text-primary">Province</div>
                                            <div class="col-lg-9 col-md-8">{{$agence->province}}</div>
                                        </div>

                                        <div class="row mb-3">
                                                <div class="d-flex justify-content-center">
                                                    <a href="{{route('detail_agence',['id'=>$agence->id])}}"><button class="btn btn-outline-success">Voir Plus ...</button></a> 
                                                </div>
                                        </div>

                                    </div>
                                    <div class="col-xl-4">
                                        <img src="/profils/cover-2-lg.png" alt="logo" height="120px" width="150px" style="border-radius: 20px;"><br>
                                        <nav>
                                            <ol class="breadcrumb">
                                                <li class="breadcrumb-item"><a href="">Agence</a></li>
                                                <li class="breadcrumb-item active" style="letter-spacing:2px">{{$agence->libelle}}</li>
                                            </ol>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            
           
            
                @endforeach
        </div>
    </section>
    </main>
@endsection
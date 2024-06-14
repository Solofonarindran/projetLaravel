
@extends('front_office.layout_fils')

@section('title')
    E-Geloge | Home
@endsection

@section('style')
    <link href="/assets/css/home.css" rel="stylesheet">
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
       

<main id="main" class="main">
<div class="row">
       
            <h1 style="opacity:0" id="animate">Lodge</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item" id="animate2" style="opacity:0"><a href="">Home</a></li>
                    <li class="breadcrumb-item active" id="animate3" style="opacity:0">Lodge vendu à crédit</li>
                </ol>
            </nav>
     
     

</div>

<!-- End Page Title -->

<section class="section principale-actus">
    <div class="row">
        <!-- Left side columns -->
        <div class="col-lg-8">
            <div class="row">
                <!-- actualite Card -->

              @foreach($lodges as $lodge)
                <div class="col-xl-12">

                    <div class="card info-card customers-card" style="opacity:0" id="opacity">
                        <div class="card-body mt-3">

                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <a href="">
                                        <div class="profile-actus-online" style="background-image:url('{{$lodge->path}}'); background-size:cover;">
                                          
                                        </div>
                                    </a>
                                </div>
                                <div class="ps-3">
                                    <a href="details-info.html">
                                        <h6 class="details-title">{{$lodge->title}}</h6>
                                    </a>
                                    <div href="" class="text-muted small pt-2 ps-1">
                                        Agence  <span class="badge badge-number">{{$lodge->agence->libelle}}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="footer-actus d-flex justify-content-between">
                                <div class="uptade mt-3">
                                    <span class="text-muted small pt-4">
                                        {{$lodge->updated_at}}
                                    </span>
                                </div>

                            </div>
                            <div class="row actualite-status mt-3">
                                <div class="col-xl-6 col-lg-6">

                                    <small>
                                        Informations sur le Logement:
                                    </small>
                                    <h5 class="card-title" style="height:30px;display:flex; align-items:center">Agence<span> | {{$lodge->agence->libelle}}</span></h5> 
                                    <h5 class="card-title" style="height:30px;display:flex; align-items:center">Cité<span> | {{$lodge->cite->libelle}}</span></h5> 
                                    <h5 class="card-title" style="height:30px;display:flex; align-items:center">Terrain<span> | {{$lodge->terrain->superficie}} {{$lodge->terrain->unite}}</span></h5> 
                                    <h5 class="card-title" style="height:30px;display:flex; align-items:center">Prix<span> | {{$lodge->prix}}</span></h5> 
                                </div>
                                <div class="col-xl-6 col-lg-6">

                                    <small>
                                        Informations sur le Propriétaire:
                                    </small>
                                    <h5 class="card-title" style="height:30px;display:flex; align-items:center">Nom :<span> | {{$lodge->client->name}}</span></h5> 
                                    <h5 class="card-title" style="height:30px;display:flex; align-items:center">Adresse:<span> | {{$lodge->client->adress}}</span></h5> 
                                  
                                </div>

                               
                            </div>
                            <!-- image actualite -->
                         
                            <!-- image actualite -->
                            <div class="actualite-footer mt-3">
                                <div class="reagir">
                                    <button class="d-flex btn btn">
                                        <i class="bi bi-heart" id="reagir_heart"></i>&nbsp;
                                        <span class="nombre-reagir"> impect</span>&nbsp;
                                      
                                    </button>
                                </div>
                                <div class="share">
                                    <button class="d-flex btn btn" data-bs-toggle="modal" data-bs-target="#modalShare">
                                        <a href="{{route('contrat',['id'=>$lodge->id])}}"><span>Contrat</span></a>
                                    
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
             @endforeach
            </div>
            <!-- End Customers Card -->



        </div>
    </div>
    <!-- End Left side columns -->
    

    <!-- Right side columns -->
    <div class="col-xl-6">
        <div class="sidebar-right">
            <!-- News & Updates Traffic -->
            <div class="card">

                <div class="card-body pb-0">
                    <h5 class="card-title">Lodge en attente<span> | E-Gelodge</span></h5>

                    <!-- sidebar recent posts-->
                    <div class="news" id="new-offre">
                        
                        <hr>
                     

                       
                        <div class="show-all">

                            <a class="nav-link collapsed d-flex justify-content-end align-items-end" data-bs-target="#money-nav" data-bs-toggle="collapse" href="#">
                                <span class="me-2">Voir plus</span><i class="bi bi-chevron-down ms-auto"></i>
                            </a>
                            
                            <div id="money-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                                <div class="post-item clearfix " style="display:flex;align-items:center;margin-bottom:20px">

                                   <a href="{{route('liste_crediteur')}}" class="btn btn-warning" style="margin-left:20px;height: 25px; display:flex;justify-content:center;align-items:center">Liste Créditeur</a>
                                </div>

                            </div>
                        </div>

                    </div>
                    <!-- End sidebar recent posts-->


                </div>
            </div>
            <!-- End News & Updates -->
        </div>

    </div>
    <!-- End Right side columns -->



    



</section>

</main>



@endsection

@section('script')

    <script src="/assets/js/home.js"></script>

@endsection




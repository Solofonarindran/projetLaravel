
@extends('front_office.layout_fils')

@section('title')
    E-Geloge | Recherche
@endsection

@section('style')
    <link href="/assets/css/home.css" rel="stylesheet">
    <style>
        #animate{
            animation:animate 3s 0.5s forwards
        }

        #animation{
            animation:opacity 3s 0.5s forwards
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

    </style>
@endsection

@section('contents')
       

<main id="main" class="main">
<div class="row">
            <h5 class="card-title">Province<span style="opacity:0" id="animate"> | {{$agence[0]->province}}</span></h5>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="">Agence</a></li>
                    <li class="breadcrumb-item active" style="letter-spacing:2px">{{$agence[0]->libelle}}</li>
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

              @foreach($lodge_link as $lodge)
                <div class="col-xl-12">

                    <div class="card info-card customers-card" id="animation" style="opacity:0">
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
                                        Agence  <span class="badge badge-number">{{$agence[0]->libelle}}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="footer-actus d-flex justify-content-between">
                                <div class="uptade mt-3">
                                    <span class="text-muted small pt-4">
                                       {{$lodge->created_at}}
                                    </span>
                                </div>

                            </div>
                            <div class="actualite-status mt-3">
                                <small>
                                  La brève information est ci-dessous<a href="{{route('detail_lodge',['id'=>$lodge->id])}}" class="more-details">
                                    <i class="bi bi-arrow-right text-primary"> Plus de details</i>
                                </a>

                               
                                </small>
                                <h5 class="card-title" style="height:30px;display:flex; align-items:center">Cité<span>|  {{$lodge->cite->libelle}}</span></h5> 
                                <h5 class="card-title" style="height:30px;display:flex; align-items:center">Terrain<span>| {{$lodge->terrain->superficie}} {{$lodge->terrain->unite}}</span></h5> 
                                <h5 class="card-title" style="height:30px;display:flex; align-items:center">Prix<span> | {{$lodge->prix}}</span></h5> 
                               
                            </div>
                            <!-- image actualite -->
                         
                            <!-- image actualite -->
                            <div class="actualite-footer mt-3">
                                <div class="reagir">
                                    <button class="d-flex btn btn">
                                        <i class="bi bi-heart" id="reagir_heart"></i>&nbsp;
                                        <span class="nombre-reagir">impect</span>&nbsp;
                                        
                                    </button>
                                </div>
                                <div class="share">
                                    <button class="d-flex btn btn" data-bs-toggle="modal" data-bs-target="#modalShare">
                                        <a href="{{route('detail_lodge',['id'=>$lodge->id])}}"><span>Acheter</span></a>
                                    
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
                    <h5 class="card-title">Lodge en attente<span> | E-Geloge</span></h5>

                    <!-- sidebar recent posts-->
                    <div class="news" id="new-offre">
                        <div class="post-item clearfix">
                            <img src="assets/img/profile-mark.JPG" alt="">
                            <h4><a href="#">META remplace le Facebook</a></h4>
                            <span class="badge rounded-pill bg-warning m-2">Freelance</span>
                        </div>
                        <hr>
                     

                        <hr>
                        <div class="show-all">

                            <a class="nav-link collapsed d-flex justify-content-end align-items-end" data-bs-target="#money-nav" data-bs-toggle="collapse" href="#">
                                <span class="me-2">Voir plus</span><i class="bi bi-chevron-down ms-auto"></i>
                            </a>
                            <hr>
                            <div id="money-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                                <div class="post-item clearfix ">
                                    <img src="assets/img/profile-mark.JPG " alt=" ">
                                    <h4><a href="# ">META remplace le Facebook</a></h4>
                                    <span class="badge rounded-pill bg-warning m-2 ">Freelance</span>
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




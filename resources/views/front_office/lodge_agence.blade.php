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

        #animate2{
            animation: animate 2s 0.5s forwards;
        }
        #animate3{
            animation: animate 3s 0.5s forwards;
        }

        @keyframes animate {

            from{
                opacity:0.1;
                transform:translateX(-30px);
            }
            to{
                opacity: 1;
                transform:translateX(0);
            }
        }


           #animation{
                animation: animate1 1s 0.5s forwards;
            }
            
            #opacity{
                animation: 2s 0.5s opacity forwards
            }
            #animation2{ 
                animation: animate2 1.5s 0.5s forwards;
            }

            #animation3{ 
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

            @keyframes animate1 {
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
        <h1 style="opacity:0" id="animation">Agence {{$agence[0]->libelle}}</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item" style="opacity:0" id="animation2"><a href="{{route('accueil')}}">Home</a></li>
                <li class="breadcrumb-item">Agence</li>
                <li class="breadcrumb-item">{{$agence[0]->code}}</li>
                <li class="breadcrumb-item active" style="opacity:0" id="animation3">Courses = {{$sommeTotal}} Ar</li>
            </ol>
        </nav>
    </div>
    <!-- End Page Title -->
    <section>
        <div class="row">
        <?php

            if($sommeTotal!=0){
                $pourNonVendu=number_format($totalnonvendu/$sommeTotal*100,0);
                $pourcredit=number_format($credit/$sommeTotal*100,0);
                $pourpaye=number_format($paye/$sommeTotal*100,0);

            }else{
                $pourcredit=0;
                $pourNonVendu=0;
                $pourpaye=0;
            }

            

       ?>
            
                    <div class="col-xl-4">
                        <div class="card">
                            <div class="card-title d-flex justify-content-center align-items-center" style="height:25vh;">
                                    <div id="animate" class="row d-flex justify-content-center align-items-center" style="opacity:0;width:98%;height:100%;border-radius:20px;background-color:#39D5FF">
                                        <div class="row col-xl-8 col-lg-8" style="height:80%;color:#f5f5f5f5">
                                             <div class="col-xl-12">
                                                    <h5 class="card-title" style="color:#f5f5f5f5;font-weight:bold">Lodge dispo <span style="color:#f5f5f5f5;font-weight:bold"> | E-Gelodge</span></h5>

                                             </div>
                                             <div class="col-xl-12">
                                                    <h5 style="font-weight:bold;color:#f5f5f5f5;">
                                                            {{$totalnonvendu}}
                                                            <small> Ar</small>
                                                    </h5>

                                             </div>
                                            
                                        </div>
                            

                                        <div class="col-xl-4 col-lg-4 d-flex justify-content-center align-items-center" style="height:80%">

                                                <div class="d-flex justify-content-center align-items-center" style="width: 100px; height: 100px; border-radius:100%;background-color:#f5f5f5">
                                                        <h5 style="font-weight:bold;color:#39D5FF;">
                                                           {{$pourNonVendu}}
                                                            <small> %</small>
                                                         </h5>
                                                </div>
                                        </div>
                                    </div>
                            </div>
                            <hr style="margin-top: -10px;">
                            <div class="card-body" style="overflow-y:auto; height:50vh">
                                <div class="row" >
                                        @foreach($nonvendu as $lodge)
                                         <div class="col-xl-12" style="height:20vh">
                                                 <!--card fils -->
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
                                                                            <a href="">
                                                                                <h6 class="details-title">{{$lodge->title}}</h6>
                                                                            </a>
                                                                            <div href="" class="text-muted small pt-2 ps-1">
                                                                                {{$lodge->agence->libelle}}<span class="badge badge-number"><a href="{{route('detail_lodge',['id'=>$lodge->id])}}" style="color:white">Voir plus</a></span>
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
                             
                                                
                                                    </div>
                                             </div>
                                        </div>
                                     @endforeach
                                        

                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- card 2-->




                    <div class="col-xl-4">
                        <div class="card">
                            <div class="card-title d-flex justify-content-center align-items-center" style="height:25vh;">
                                    <div id="animate2" class="row d-flex justify-content-center align-items-center" style="opacity:0;width:98%;height:100%;border-radius:20px;background-color:#FFAC9C">
                                        <div class="row col-xl-8 col-lg-8" style="height:80%;color:#f5f5f5f5">
                                             <div class="col-xl-12">
                                                    <h5 class="card-title" style="color:#f5f5f5f5;font-weight:bold">Lodge crédit<span style="color:#f5f5f5f5;font-weight:bold"> | E-Gelodge</span></h5>

                                             </div>
                                             <div class="col-xl-12">
                                                    <h5 style="font-weight:bold;color:#f5f5f5f5;">
                                                            {{$credit}} 
                                                            <small>Ar</small>
                                                    </h5>

                                             </div>
                                            
                                        </div>
                                        <div class="col-xl-4 col-lg-4 d-flex justify-content-center align-items-center" style="height:80%">

                                                <div class="d-flex justify-content-center align-items-center" style="width: 100px; height: 100px; border-radius:100%;background-color:#f5f5f5f5">
                                                        <h5 style="font-weight:bold;color:#FFAC9C;">
                                                            {{$pourcredit}}
                                                            <small> %</small>
                                                         </h5>
                                                </div>
                                        </div>
                                    </div>
                            </div>
                            <hr style="margin-top: -10px;">
                            <div class="card-body" style="overflow-y:auto; height:50vh">
                                <div class="row" >

                                    @foreach($listecredit as $credit)
                                         <div class="col-xl-12" style="height:20vh">
                                                 <!--card fils -->
                                             <div class="card info-card customers-card" style="opacity:0" id="opacity">
                                                    <div class="card-body mt-3">

                                                            <div class="d-flex align-items-center">
                                                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                                                            <a href="">
                                                                                <div class="profile-actus-online" style="background-image:url('{{$credit->path}}'); background-size:cover;">
                                                                                
                                                                                </div>
                                                                            </a>
                                                                        </div>
                                                                        <div class="ps-3">
                                                                            <a href="">
                                                                                <h6 class="details-title">{{$credit->title}}</h6>
                                                                            </a>
                                                                            <div href="" class="text-muted small pt-2 ps-1">
                                                                                {{$credit->client->name}}  <span class="badge badge-number"><a href="{{route('contrat',['id'=>$credit->id])}}" style="color:white">Contrat</a></span>
                                                                            </div>
                                                                        </div>
                                                            </div>
                                                            <div class="footer-actus d-flex justify-content-between">
                                                                <div class="uptade mt-3">
                                                                    <span class="text-muted small pt-4">
                                                                        {{$credit->updated_at}}
                                                                    </span>
                                                                </div>

                                                            </div>
                             
                                                
                                                    </div>
                                             </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>



                    <!-- card3 -->

                    <div class="col-xl-4">
                        <div class="card">
                            <div class="card-title d-flex justify-content-center align-items-center" style="height:25vh;">
                                    <div id="animate3" class="row d-flex justify-content-center align-items-center" style="opacity:0;width:98%;height:100%;border-radius:20px;background-color:#15a2ac">
                                        <div class="row col-xl-8 col-lg-8" style="height:80%;color:#f5f5f5f5;">
                                             <div class="col-xl-12">
                                                    <h5 class="card-title" style="color:#f5f5f5f5;font-weight:bold">Lodge Payé<span style="color:#f5f5f5f5;font-weight:bold"> | E-Gelodge</span></h5>

                                             </div>
                                             <div class="col-xl-12">
                                                    <h5 style="font-weight:bold;color:#f5f5f5f5;">
                                                            {{$paye}}
                                                            <small> Ar</small>
                                                    </h5>

                                             </div>
                                            
                                        </div>
                                        <div class="col-xl-4 col-lg-4 d-flex justify-content-center align-items-center" style="height:80%">

                                                <div class="d-flex justify-content-center align-items-center" style="width: 100px; height: 100px; border-radius:100%;background-color:#f5f5f5f5">
                                                        <h5 style="font-weight:bold;color:#15a2ac;">
                                                            {{$pourpaye}}
                                                            <small> %</small>
                                                         </h5>
                                                </div>
                                        </div>
                                    </div>
                            </div>
                            <hr style="margin-top: -10px;">


                            <div class="card-body" style="overflow-y:auto; height:50vh">
                                <div class="row" >
                                        
                                    @foreach($listepaye as $paye)
                                        <div class="col-xl-12" style="height:20vh">
                                                 <!--card fils -->
                                             <div class="card info-card customers-card" style="opacity:0" id="opacity">
                                                    <div class="card-body mt-3">

                                                            <div class="d-flex align-items-center">
                                                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                                                            <a href="">
                                                                                <div class="profile-actus-online" style="background-image:url('/assets/img/maison-isolee-terrain.jpg'); background-size:cover;">
                                                                                
                                                                                </div>
                                                                            </a>
                                                                        </div>
                                                                        <div class="ps-3">
                                                                            <a href="">
                                                                                <h6 class="details-title">{{$paye->title}}</h6>
                                                                            </a>
                                                                            <div href="" class="text-muted small pt-2 ps-1">
                                                                                {{$paye->client->name}}  <span class="badge badge-number"><a href="{{route('contratfact',['id'=>$paye->id])}}" style="color:white">Contrat</a></span>
                                                                            </div>
                                                                        </div>
                                                            </div>
                                                            <div class="footer-actus d-flex justify-content-between">
                                                                <div class="uptade mt-3">
                                                                    <span class="text-muted small pt-4">
                                                                        {{$paye->updated_at}}
                                                                    </span>
                                                                </div>

                                                            </div>
                             
                                                
                                                    </div>
                                             </div>
                                        </div>

                                     @endforeach

                                        
                                        

                                </div>
                            </div>
                        </div>
                    </div>
                    
           
            
            
        </div>
    </section>
</main>
@endsection

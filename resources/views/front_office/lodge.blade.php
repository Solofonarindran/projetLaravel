@extends('front_office.layout_fils')

@section('style')
    <!-- Template Main CSS File -->
    <link href="/assets/css/style.css" rel="stylesheet">

    <style>
        #animate{
            animation: 1s 0.5s animate forwards;

        }

        #opacity{
            animation: 2s 0.5s opacity forwards
        }
        #animate2{
            animation:1s 0.5s animate2 forwards

        }
        #animate3{
            animation:1s 0.5s animate3 forwards
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

@section('title')
    E-Geloge | Logements
@endsection


@section('contents')
        <main id="main" class="main">

        <div class="pagetitle">
            <h1 id="animate" style="opacity:0">Mon Logement</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item" id="animate2" style="opacity:0"><a href="{{route('accueil')}}">Home</a></li>
                    <li class="breadcrumb-item">Actuality</li>
                    <li class="breadcrumb-item active" id="animate3" style="opacity:0">Lodge</li>
                </ol>
            </nav>
        </div>
        <!-- End Page Title -->

        <section class="section profile">
            <div class="row">
                <div class="col-xl-4">

                    <div class="card" id="opacity" style="opacity:0">
                        <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                 
                                <img src="/assets/img/maison-isolee-terrain.jpg" alt="Profile" class="rounded-circle">
                            
                                <h2>Administrateur</h2><br>
                                <h3>Admin</h3>
                           
                           
                            <div class="social-links mt-2">
                                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-xl-8">

                    <div class="card" id="opacity" style="opacity:0">
                        <div class="card-body pt-3">
                            <!-- Bordered Tabs -->
                            <ul class="nav nav-tabs nav-tabs-bordered">

                                <li class="nav-item">
                                    <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Recherche</button>
                                </li>

                                <li class="nav-item">
                                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Ajout logement</button>
                                </li>
                            </ul>
                            <div class="tab-content pt-2">

                                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                                    <h5 class="card-title">Base de recherche</h5>
                                    <p class="small fst-italic">
 
                                        La connaissance d'un province lié à notre agence facilite votre recherche
                                    
                                    </p>

                                    <div class="row">
	                  				
                                        
                                   
                                        <div class="col-xl-6 col-lg-6" style="box-shadow: 5px 4px 11px 5px #9a9996 ">
                                             <form method="post" action="{{route('research_lodge')}}">	
                                                        @csrf
                                                         <div class="input-group input-group-sm pt-2">
		                                                    
		                                                    <div class="input-group-append">
		                                                        <span class="input-group-text" style="letter-spacing: 2px">
		                                                            Recherche---:
		                                                        </span>
		                                                    </div>
		                                                    <input  id="input-group-sm-size" size=3 name="province" style="letter-spacing: 2px" type="text" class="form-control" placeholder="Province" aria-describedby="input-group-sm-size">
		                                                </div>


                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-sm-6" style="display:flex;align-items:center">

                                                        <div class="col-xl-3 col-lg-3"  style="box-shadow: 5px 4px 11px 5px #9a9996 ;">
                                                            <button class="btn btn-primary" type="submit">Envoyer</button>
                                                        </div>
                                                        @if(session()->has('erreur'))
                                                            <h5 style="color:red">{{session()->get('erreur')}}</h5>
                                                        @endif
                                    
                                        </div>
			                  							
		                            
                                             </form>   		
		                            </div>

                                  

                                

                                </div>

                                <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                                    <!-- Profile Edit Form -->
                                    <form method="post" action="{{route('new',['id'=>null])}}" enctype="multipart/form-data">
                                        @csrf
                                    
                                        <div class="row mb-3">
                                            <label for="name" class="col-md-4 col-lg-3 col-form-label">Titre</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="title" type="text" class="form-control @error('title') is-invalid @enderror" id="name" value="" required>

                                                @error('title')
                                                    <center class="alert alert-danger w-100">{{$message}}</center>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="Email" class="col-md-4 col-lg-3 col-form-label">Numéro</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="numero" type="numero" class="form-control @error('numero') is-invalid @enderror" id="Email" value="" required>
                                                @error('numero')
                                                    <center class="alert alert-danger w-100">{{$message}}</center>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="agence" class="col-md-4 col-lg-3 col-form-label">Agences</label>
                                            <div class="col-md-8 col-lg-9">
                                               
                                                <select name="agence_id" id="agence" style="height: 40px; border-radius: 3px;" required>
                                                        <option value="En attente">En attente. . .</option>
                                                        <option value="1">E-Betsy</option>
                                                        <option value="2">E-Merina</option>
                                                        <option value="3">E-vezo</option>

                                                </select>

                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="activity" class="col-md-4 col-lg-3 col-form-label">Cités</label>
                                            <div id="cite" class="col-md-8 col-lg-9">
                                               
                                                <select name="cite_id" id="cite"  style="height: 40px; border-radius: 3px;" required>
                                                           <option value="En attente">En attente. . .</option>
                                                       
                                                            <option value="">cité</option>
                                                      
                                                    
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="terrain" class="col-md-4 col-lg-3 col-form-label">Terrain</label>
                                            <div  class="col-md-8 col-lg-9">
                         
                                                <select name="terrain_id" id=""  style="height: 40px; border-radius: 3px;" required>
                                                        <option value="En attente">En attente. . .</option>
                                                        <option value="1">400 m2</option>
                                                        <option value="2">450 m2</option>
                                                        <option value="3">600 m2</option>
                                                        <option value="4">1 ha</option>
                                                        <option value="5">720 m2</option>
                                                        <option value="6">340 m2</option>
                                            
                                                </select>
                                            </div>
                                        </div>


                                        <div class="row mb-3">
                                            <label for="image" class="col-md-4 col-lg-3 col-form-label">Image</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="image" type="file" class="form-control @error('image') is-invalid @enderror" id="image" value="" required>
                                                @error('image')
                                                    <center class="alert alert-danger w-100">{{$message}}</center>
                                                @enderror
                                            </div>
                                        </div>


                                        <div class="row mb-3">
                                            <label for="prix" class="col-md-4 col-lg-3 col-form-label">Prix</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="prix" type="text" class="form-control" id="prix" value="" required>
                                            </div>
                                        </div>

            

                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary">Enregistrer</button>
                                        </div>
                                    </form>
                                    <!-- End Profile Edit Form -->

                                </div>

                            </div>
                        </div>

                    </div>
                </div>
        </section>

        </main>

@endsection 

@section('script')

    <script>
        $(document).ready(function(){
            $('select#agence').change(function(){
               var agence =$(this).children('option:selected').val()
                var cite=''
               if(agence==1){
                    cite='<select name="cite_id" id="cite"  style="height: 40px; border-radius: 3px;">'+
                             '<option value="En attente">En attente. . .</option>'+
                             '<option value="1">Lazan\' Betsi</option>'+
                             '<option value="2">Maro Maitso</option>'+
                             '<option value="7">Paradis</option></select>'
                     $('div#cite').html(cite)

               }else if(agence==2){
                  cite='<select name="cite_id" id="cite"  style="height: 40px; border-radius: 3px;">'+
                        
                             '<option value="3">Radama Lodge</option>'+
                             '<option value="4">Ambohikandrina</option>'+
                             '<option value="8">Eden</option></select>'
                     $('div#cite').html(cite)
               }else if(agence==3){
                    cite='<select name="cite_id" id="cite"  style="height: 40px; border-radius: 3px;">'+
                          
                             '<option value="5">Tsimiroro</option>'+
                             '<option value="6">Tealongo</option></select>'
                    $('div#cite').html(cite)

               }else{
                    cite='<select name="cite_id" id="cite"  style="height: 40px; border-radius: 3px;">'+
                             '<option value="En attente">En attente. . .</option></select>'+
                            

                     $('div#cite').html(cite)
               }
               
              
            })

            
        })
    </script>

@endsection
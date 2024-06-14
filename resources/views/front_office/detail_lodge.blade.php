@extends('front_office.layout_fils')

@section('title')
    E-Geloge | Lodge
@endsection

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

@section('contents')
        <!-- main -->
        <main id="main" class="main">

        <div class="pagetitle">
            <h1 style="opacity:0" id="animate">Details</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item" id="animate2" style="opacity:0"><a href="{{route('accueil')}}">Home</a></li>
                    <li class="breadcrumb-item">Lodge</li>
                    <li class="breadcrumb-item active" id="animate3" style="opacity:0">Details</li>
                </ol>
            </nav>
        </div>
        <!-- End Page Title -->

        <section style="opacity:0" id="opacity">
            <div class="row"> 
                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-title d-flex justify-content-center align-items-center">
                            <h4 class="text-center fw-bold">Profil Agence</h4>
                        </div>
                        <hr style="margin-top: -10px;">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-xl-4">
                                    <img src="/profils/cover-2-lg.png" alt="logo" height="120px" width="150px" style="border-radius: 20px;">
                                </div>
                                <div class="col-xl-8">
                                    <div class="row mb-3">
                                        <div class="col-lg-4 col-md-4 fw-bold text-primary" style="">Libellé</div>
                                        <div class="col-lg-8 col-md-8">{{$lodge->agence->libelle}}</div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-lg-4 col-md-4 fw-bold text-primary">Code</div>
                                        <div class="col-lg-8 col-md-8">{{$lodge->agence->code}}</div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-lg-4 col-md-4 fw-bold text-primary">Province</div>
                                        <div class="col-lg-8 col-md-8">{{$lodge->agence->province}}</div>
                                    </div>

                        

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-title d-flex justify-content-center align-items-center">
                            <h4 class="text-center fw-bold">Profil Cité</h4>
                        </div>
                        <hr style="margin-top: -10px;">
                        <div class="card-body">
                            <div class="row">

                                <div class="col-xl-8">
                                    <div class="row mb-3">
                                        <div class="col-lg-4 col-md-4 fw-bold text-primary">Libellé</div>
                                        <div class="col-lg-8 col-md-8">{{$lodge->cite->libelle}}</div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-lg-4 col-md-4 fw-bold text-primary">N° Terrain</div>
                                        <div class="col-lg-8 col-md-8">{{$lodge->terrain->numero}}</div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-lg-4 col-md-4 fw-bold text-primary">Superficie</div>
                                        <div class="col-lg-8 col-md-8">{{$lodge->terrain->superficie}}</div>
                                    </div>
                                    

                                </div>
                                <div class="col-xl-4">
                                    <img src="/profils/cover-2-lg.png" alt="image" height="120px" width="150px" style="border-radius: 20px;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-title d-flex justify-content-center align-items-center">
                        <h4 class="fw-bold">Description logement</h4>
                    </div>
                    <hr style="margin-top: -10px;">
                    <div class="row">
                        <div class="col-xl-8" style="margin: left -10px;">


                            <h5 class="card-title fw-bold text-primary ms-2">Description</h5>
                            <hr style="margin-top: -15px;">
                            <p class="small fst-italic ms-2 mb-3">
                                L'une des meilleures qualités de fabrication et de production de <span style="letter-spacing:2px;font-weight:bold"> E-Gelodge</span>
                                . La description du logement est mentionnée ci-dessous
                            </p>
                            <h5 class="card-title fw-bold text-primary ms-2 text-center">Details d'information</h5>
                            <hr style="margin-top: -15px;">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="row mb-3">
                                        <div class="col-lg-4 fw-bold text-primary">Titre</div>
                                        <div class="col-lg-8 ">{{$lodge->title}}</div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-lg-4 fw-bold text-primary">Numéro</div>
                                        <div class="col-lg-8 ">{{$lodge->numero}}</div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-lg-4 fw-bold text-primary">Budget</div>
                                        <div class="col-lg-8 ">{{$lodge->prix}}</div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-lg-4 fw-bold text-primary">Cité</div>
                                        <div class="col-lg-8 ">{{$lodge->cite->libelle}}</div>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <!-- <h6 class="card-title fw-bold text-primary" style="margin-top: -20px;">Compétence</h6>
                                    <p></p><br> -->
                                    <div class="row mb-3 ">
                                        <div class="col-lg-4 fw-bold text-primary">Agence</div>
                                        <div class="col-lg-8">{{$lodge->agence->libelle}}</div>

                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-lg-4 fw-bold text-primary">Province</div>
                                        <div class="col-lg-8">{{$lodge->agence->province}}</div>

                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-xl-4">
                            <div class="card">
                                <div class="card-title d-flex justify-content-center align-items-center">
                                    <h5 class="fw-bold text-dark">Formulaire</h5>

                                </div>
                            </div>
                            <form action="{{route('buy_lodge',['id'=>$lodge->id,'prix'=>$lodge->prix])}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">

                                    <div class="col-12 mb-3">
                                        <label for="name" class="form-label fw-bold text-primary">Nom du Client</label>

                                        <input type="text" value="" name="name" class="form-control @error('name') is-invalid @enderror" id="" required>
                                   
                                    </div>

                                    <div class="col-12 mb-3">
                                        <label for="email" class="form-label fw-bold text-primary">Adresse</label>

                                        <input type="text" value="" name="adress" class="form-control @error('adress') is-invalid @enderror" id="" required>
                                   
                                    </div>
                                    <div class="col-12 mb-3">
                                        <label for="email" class="form-label fw-bold text-primary">CIN</label>

                                        <input type="number" value=""  name="cin" min=0 class="form-control @error('cin') is-invalid @enderror" id="" required>
                                   
                                    </div>
                                    <div class="col-12 mb-3">
                                        <label for="email" class="form-label fw-bold text-primary">Travail</label>

                                        <input type="text" value=""  name="workspace" min=0 class="form-control @error('workspace') is-invalid @enderror" id="" required>
                                   
                                    </div>
                                  
                                  
                                    <hr>

                                    <h6 class="text-center text-dark fw-bold">Type achat</h6>
                                   
                                    <label for="cars">Choisir:</label>

                                    <select name="typevente" id="cars" required>
                                        <option value="credit">A crédit</option>
                                        <option value="paye">Payé</option>
                                       
                                    </select> 

                                </div>
                                <div class="card-footer">
                                    <div class="row d-flex justify-content-between align-items-center">
                                        <div class="col-xl-6 d-flex justify-content-center">
                                            <button type="reset" class="btn btn-outline-primary rounded-pill w-75">Annuler</button>
                                        </div>
                                        <div class="col-xl-6 d-flex justify-content-center">
                                            <button type="submit" class="btn btn-outline-success rounded-pill w-75">Acheter</button>
                                        </div>


                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        </main>
        <!-- end main -->
@endsection

@section('footer')
    <footer id="footer" class="footer">
        <div class="credits text-dark">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
            Designed by <a href="#">ApplyJob</a>
        </div>
    </footer>
    <!-- End Footer -->

@endsection
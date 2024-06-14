@extends('front_office.layout_fils')

@section('title')
    E-Geloge | Agence
@endsection

@section('style')
     <!-- Template Main CSS File -->
     <link href="/assets/css/style.css" rel="stylesheet"> 
     <link href="/assets/css/detailcrediteur.css" rel="stylesheet"> 

@endsection

@section('contents')

   <main id="main">

        
        <div class="main-content">
                 <div class="section-left" >
        
                        <div class="image">
                                <img class="" src="/assets/img/représentatrice.png" alt="bg" srcset="" />
                        </div>
                        <div class="contexte">
                               
                        
                        </div>
                </div>
                <div class="section-right">
                        <div class="content-left">
                                <div class="context1">
                                      
                                        <div class="context-right">
                                                <span style="">Compteur d'action</span>
                                                <div class="pourcentage">
                                                        <h5 style="font-weight:bold">@if(is_null($crediteur[0]->compte)) 0 @else {{$crediteur[0]->compte}} @endif mois</h5>

                                                </div>
                                        </div>
                                        <div class="icon">
                                          <img class="imag" src="/assets/img/maison-isolee-terrain.jpg" alt="bg" srcset="" />
                                        </div>


                                </div>
                        </div>
                        <div class="content-right">
                                <div class="context2">
                 
                                        <div class="context-right">
                                           <span style="">Reste à rembourser</span>
                                           <div class="pourcentage">
                                                        <h5 style="font-weight:bold">{{($crediteur[0]->contrat->duration)-($crediteur[0]->compte)}} mois</h5>

                                           </div>

                                        </div>
                                        <div class="icon">
                                          <img class="imag" src="/assets/img/maison-isolee-terrain.jpg" alt="bg" srcset="" />
                                        </div>
                                </div>

                        </div>
                
                </div>
        </div>
        <footer>
                <div class="footer-element">

                    <div class="footer-element-content row">
                        <div class="col-12" style="padding-top:4px;">
                            <input type="text" name="logement_id" id="" value="{{$crediteur[0]->id}}" hidden>
                            <input type="number" name="number" min=1 placeholder="Nombre de mois" class="form-control" required>
                        </div>
                        <div class="col-12" style="display:flex;justify-content:center">
                            <button class="btn btn-outline-info" style="">Effectuer</button>
                        </div>
                  
                    </div>
                        



                </div>
                <?php

                        $name=$crediteur[0]->client->name;

                ?>

                <div class="footer-content row">
                        <div class="col-xl-8 col-lg-8 row footer-content-left">
                               

                                <div class="col-12">
                                        <table  class="table-active" cellpadding=5>
                                                 <thead style="color:#eae9ec">

                                                        <th>Name</th>
                                                        <th>Count</th>
                                                        <th>Mounth</th>
                                                        <th>NetOne</th>
                                                        <th>Summe</th>
                                                        <th>Date</th>
                                                        <th>Rest acount</th>

                                                 </thead>
                                                <tbody>

                                                  @if(count($crediteur[0]->abonnezs)!=0)

                                                        @foreach($crediteur[0]->abonnezs as $abonnez)
                                                                <tr style="font-weight:bold">
                                                                        <td>{{$name}}</td>
                                                                        <td>{{$abonnez->count}}</td>
                                                                        <td>{{$abonnez->mounth}}</td>
                                                                        <td>{{($crediteur[0]->prix)/$crediteur[0]->contrat->duration}}</td>
                                                                        <td>{{(($crediteur[0]->prix)/$crediteur[0]->contrat->duration)*($abonnez->count)}}</td>
                                        
                                                                        <td>23/02/12 12:23:34</td>
                                                                        <td>24 000</td>
                                                                </tr>
                                                        @endforeach


                                                  @else

                                                        <tr style="font-weight:bold">
                                                                <td collspan=7>Aucun Abonnement</td>
                                                        </tr>


                                                  @endif
                                                       
                                                </tbody>
                                        </table>
                                 </div>
                        
                        </div>
                        <div class="col-xl-4 col-lg-4 footer-content-right"> 

                                <div class="card-container row">

                                        <div class="col-xl-8 col-lg-8" style="display:flex;flex-direction:column;align-items:center;justify-content:center">
                                                <h5 style="font-weight:bold;color:#f5f5f5f5">{{$name}}</h5>
                                                <span style="font-weight:bold;color:#09001d">Mouvements</span>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 d-flex justify-content-center align-items-center">
                                                <div class="d-flex justify-content-center align-items-center" style="width: 100px;height:75px;border-radius:100%;background-color:#f5f5f5f5">
                                                        <h5 style="font-weight:bold;color:#09001d">50 %</h5>
                                                </div>
                                                

                                        </div>    

                                </div>
                                
                        </div>

                </div>
                
        </footer>
   </main>
@endsection

@section('script')

        <script src="/assets/js/detail_crediteur.js"></script>

@endsection
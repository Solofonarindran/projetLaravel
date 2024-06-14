@extends('front_office.layout_fils')

@section('title')
    E-Geloge | Créditeur
@endsection

@section('style')
    <link href="/assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/crediteur.css">
    <style>

            .crediteur{
                    opacity: 0;
                    animation:1s 1s animate4 forwards;

            }


            #animate{
                opacity:0;
                animation: animate 1s 0.5s forwards;
            }
            
            #opacity{
                animation: 2s 0.5s opacity forwards
            }
            #animate2{ 
                opacity:0;
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

            @keyframes animate4 {

                from{
                    opacity:0.3;
                }

                to{
                    opacity:1;
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
            
                    <h1 id="animate">Liste des Créditeurs</h1>
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item" id="animate2"><a href="">Crédit</a></li>
                            <li class="breadcrumb-item active" id="animate3">Créditeurs</li>
                        </ol>
                    </nav>
            
            

        </div>
  

    <section class="section principale-actus">

        <div class="row">
                <table class="crediteur">
                    <thead>
                        <th>id</th>
                        <th>Nom</th>
                        <th>Adresse</th>
                        <th>CIN</th>
                        <th>Poste</th>
                        <th>Logement</th>
                        <th>Agence</th>
                        <th style="display:flex;justify-content:center;align-items:center">Action</th>
                    </thead>
                    <tbody>
                        @foreach($crediteurs as $crediteur)
                            <tr>

                                <td>{{$crediteur->client->id}}</td>
                                <td>{{$crediteur->client->name}}</td>
                                <td>{{$crediteur->client->adress}}</td>
                                <td>{{$crediteur->client->cin}}</td>
                                <td>{{$crediteur->client->workspace}}</td>
                                <td>{{$crediteur->title}}</td>
                                <td>{{$crediteur->agence->libelle}}</td>
                                <td style="display:flex;justify-content:center;align-items:center"><button class="boutton" title="Abonnez"><a href="{{route('detail_crediteur',['id'=>$crediteur->id])}}">test</a></button></td>
                                
                            </tr>
                        @endforeach

                  
                        

                    </tbody>
                </table>
        </div>

    </section>

</main>
@endsection
@extends('facture.layout')

@section('body')



<main id="js-page-content" role="main" class="page-content">
        <ol class="breadcrumb page-breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('accueil')}}">Actualités</a></li>
            <li class="breadcrumb-item">Application Intel</li>
            <li class="breadcrumb-item active">Marketing Dashboard</li>
            <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
        </ol>
        <div class="subheader">
            <h1 class="subheader-title">
                <i class='subheader-icon fal fa-chart-area'></i> Marketing <span class='fw-300'>Dashboard</span>
                <small>
                </small>
            </h1>
            <?php
                $pourCredit=number_format($sumCredit/$sumTotal*100,2);
                $pourPaye=number_format($sumPaye/$sumTotal*100,2);
                $pourVendu=$pourCredit+$pourPaye;
                $pourNonVendu=100-$pourVendu;

            ?>
            <div class="d-flex mr-4">
               <div class="js-easy-pie-chart color-primary-500 position-relative d-inline-flex align-items-center justify-content-center" data-percent="{{$pourPaye}}" data-piesize="105" data-linewidth="10" data-scalelength="5">
                                    <div class="js-easy-pie-chart color-primary-400 position-relative position-absolute pos-left pos-right pos-top pos-bottom d-flex align-items-center justify-content-center" data-percent="{{$pourPaye}}" data-piesize="70" data-linewidth="5" data-scalelength="1" data-scalecolor="#fff">
                                        <div class="position-absolute pos-top pos-left pos-right pos-bottom d-flex align-items-center justify-content-center fw-500 fs-xl text-dark">{{$pourPaye}}%</div>
                                    </div>
               </div>
               <label class="mb-0 mt-2 mt-md-0" style="font-weight:bold; letter-spacing:2px ; font-size:18px">Payé</label>
              
            </div>
            <div class="d-flex mr-4">
                <div class="js-easy-pie-chart color-info-400 position-relative d-inline-flex align-items-center justify-content-center" data-percent="{{$pourCredit}}" data-piesize="105" data-linewidth="10" data-scalelength="5">
                                    <div class="js-easy-pie-chart color-info-400 position-relative position-absolute pos-left pos-right pos-top pos-bottom d-flex align-items-center justify-content-center" data-percent="{{$pourCredit}}" data-piesize="70" data-linewidth="5" data-scalelength="1" data-scalecolor="#fff">
                                        <div class="position-absolute pos-top pos-left pos-right pos-bottom d-flex align-items-center justify-content-center fw-500 fs-xl text-dark">{{$pourCredit}}%</div>
                                    </div>
               </div>
               <label class="mb-0 mt-2 mt-md-0" style="font-weight:bold; letter-spacing:2px ; font-size:18px">Crédit</label>
               
            </div>
            <div class="d-flex mr-4">
                <div class="js-easy-pie-chart color-warning-500 position-relative d-inline-flex align-items-center justify-content-center" data-percent="{{$pourVendu}}" data-piesize="105" data-linewidth="10" data-scalelength="5">
                                    <div class="js-easy-pie-chart color-warning-400 position-relative position-absolute pos-left pos-right pos-top pos-bottom d-flex align-items-center justify-content-center" data-percent="{{$pourVendu}}" data-piesize="70" data-linewidth="5" data-scalelength="1" data-scalecolor="#fff">
                                        <div class="position-absolute pos-top pos-left pos-right pos-bottom d-flex align-items-center justify-content-center fw-500 fs-xl text-dark">{{$pourVendu}}%</div>
                                    </div>
               </div>
               <label class="mb-0 mt-2 mt-md-0" style="font-weight:bold; letter-spacing:2px ; font-size:18px">Vendu</label>
               
            </div>
            <div class="d-flex mr-4">
               <div class="js-easy-pie-chart color-success-500 position-relative d-inline-flex align-items-center justify-content-center" data-percent="{{$pourNonVendu}}" data-piesize="105" data-linewidth="10" data-scalelength="5">
                                    <div class="js-easy-pie-chart color-success-400 position-relative position-absolute pos-left pos-right pos-top pos-bottom d-flex align-items-center justify-content-center" data-percent="{{$pourNonVendu}}" data-piesize="70" data-linewidth="5" data-scalelength="1" data-scalecolor="#fff">
                                        <div class="position-absolute pos-top pos-left pos-right pos-bottom d-flex align-items-center justify-content-center fw-500 fs-xl text-dark">{{$pourNonVendu}}%</div>
                                    </div>
               </div>
               <label class="mb-0 mt-2 mt-md-0" style="font-weight:bold; letter-spacing:2px ; font-size:18px">Non vendu</label>
             
            </div>
            
        </div>

        <?php
            $sumVendu=$sumCredit+$sumPaye;
            $sumNonVendu=$sumTotal-$sumVendu;

        ?>
        <div class="row">
            <div class="col-sm-6 col-xl-3">
                <div class="p-3 bg-primary-300 rounded overflow-hidden position-relative text-white mb-g">
                    <div class="">
                        <h3 class="display-4 d-block l-h-n m-0 fw-500">
                            {{$sumPaye}}
                            <small class="m-0 l-h-n">Logement payé</small>
                        </h3>
                    </div>
                    <i class="fal fa-user position-absolute pos-right pos-bottom opacity-15 mb-n1 mr-n1" style="font-size:6rem"></i>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="p-3 bg-info-200 rounded overflow-hidden position-relative text-white mb-g">
                    <div class="">
                        <h3 class="display-4 d-block l-h-n m-0 fw-500">
                            {{$sumCredit}}
                            <small class="m-0 l-h-n">Logement à crédit</small>
                        </h3>
                    </div>
                    <i class="fal fa-globe position-absolute pos-right pos-bottom opacity-15 mb-n1 mr-n4" style="font-size: 6rem;"></i>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="p-3 bg-warning-400 rounded overflow-hidden position-relative text-white mb-g">
                    <div class="">
                        <h3 class="display-4 d-block l-h-n m-0 fw-500">
                            {{$sumVendu}}
                            <small class="m-0 l-h-n">Logement vendu</small>
                        </h3>
                    </div>
                    <i class="fal fa-gem position-absolute pos-right pos-bottom opacity-15  mb-n1 mr-n4" style="font-size: 6rem;"></i>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="p-3 bg-success-200 rounded overflow-hidden position-relative text-white mb-g">
                    <div class="">
                        <h3 class="display-4 d-block l-h-n m-0 fw-500">
                            {{$sumNonVendu}}
                            <small class="m-0 l-h-n">Logement non vendu</small>
                        </h3>
                    </div>
                    <i class="fal fa-lightbulb position-absolute pos-right pos-bottom opacity-15 mb-n5 mr-n6" style="font-size: 8rem;"></i>
                </div>
            </div>
           
        </div>
        <div class="row">

            <?php
                        $pourBetsyCredit=number_format($tabcredit[1]/$sumTotal*100,2);
                        $pourMerinaCredit=number_format($tabcredit[2]/$sumTotal*100,2);
                        $pourVezoCredit=number_format($tabcredit[3]/$sumTotal*100,2);
                        $pourDiegoCredit=number_format($tabcredit[4]/$sumTotal*100,2);

            ?>
           
            <div class="col-lg-6">
                <div id="panel-2" class="panel panel-locked" data-panel-sortable data-panel-collapsed data-panel-close>
                    <div class="panel-hdr">
                        <h2>
                            Détail <span class="fw-300"><i>Crédit</i></span>
                        </h2>
                        <!--<div class="js-easy-pie-chart color-primary-400 position-relative position-absolute pos-left pos-right pos-top pos-bottom d-flex align-items-center justify-content-center" data-percent="{{$pourPaye}}" data-piesize="0" data-linewidth="5" data-scalelength="1" data-scalecolor="#fff">
                                        <div class="position-absolute pos-top pos-left pos-right pos-bottom d-flex align-items-center justify-content-center fw-500 fs-xl text-dark">{{$pourPaye}}%</div>
                         </div>-->
                       <!--  <div class="js-easy-pie-chart color-info-400 position-relative position-absolute pos-left pos-right pos-top pos-bottom d-flex align-items-center justify-content-center" data-percent="{{$pourCredit}}" data-piesize="70" data-linewidth="5" data-scalelength="1" data-scalecolor="#fff">
                                        <div class="position-absolute pos-top pos-left pos-right pos-bottom d-flex align-items-center justify-content-center fw-500 fs-xl text-dark">{{$pourCredit}}%</div>
                         </div> -->
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content position-relative">
                           <div class="pb-2 pt-3">
                                <div class="row">
                                    <div class="col-6 col-xl-3 d-sm-flex align-items-center">
                                        <div class="p-2 mr-3 bg-info-200 rounded">
                                            <span class="peity-bar" data-peity="{&quot;fill&quot;: [&quot;#fff&quot;], &quot;width&quot;: 27, &quot;height&quot;: 27 }">3,4,5,8,2</span>
                                        </div>
                                        <div>
                                            <label class="fs-sm mb-0">Agende E-Merina</label>
                                            <h4 class="font-weight-bold mb-0">{{$pourMerinaCredit}}%</h4>
                                        </div>
                                    </div>
                                    <div class="col-6 col-xl-3 d-sm-flex align-items-center">
                                        <div class="p-2 mr-3 bg-info-300 rounded">
                                            <span class="peity-bar" data-peity="{&quot;fill&quot;: [&quot;#fff&quot;], &quot;width&quot;: 27, &quot;height&quot;: 27 }">5,3,1,7,9</span>
                                        </div>
                                        <div>
                                            <label class="fs-sm mb-0">Agence E-Betsy</label>
                                            <h4 class="font-weight-bold mb-0">{{$pourBetsyCredit}}%</h4>
                                        </div>
                                    </div>
                                    <div class="col-6 col-xl-3 d-sm-flex align-items-center">
                                        <div class="p-2 mr-3 bg-success-300 rounded">
                                            <span class="peity-bar" data-peity="{&quot;fill&quot;: [&quot;#fff&quot;], &quot;width&quot;: 27, &quot;height&quot;: 27 }">3,4,3,5,5</span>
                                        </div>
                                        <div>
                                            <label class="fs-sm mb-0">Agence E-Vezo</label>
                                            <h4 class="font-weight-bold mb-0">{{$pourVezoCredit}}%</h4>
                                        </div>
                                    </div>
                                    <div class="col-6 col-xl-3 d-sm-flex align-items-center">
                                        <div class="p-2 mr-3 bg-success-500 rounded">
                                            <span class="peity-bar" data-peity="{&quot;fill&quot;: [&quot;#fff&quot;], &quot;width&quot;: 27, &quot;height&quot;: 27 }">6,4,7,5,6</span>
                                        </div>
                                        <div>
                                            <label class="fs-sm mb-0">Agence E-Diego</label>
                                            <h4 class="font-weight-bold mb-0">{{$pourDiegoCredit}}%</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                               <div class="row  mb-g">
                                    <div class="col-md-6 d-flex align-items-center">
                                        <div id="flotPie" class="w-100" style="height:250px"></div>
                                    </div>
                                    <div class="col-md-6 col-lg-5 mr-lg-auto">
                                        
                                       <div class="d-flex mt-2 mb-1 text-warning" style="letter-spacing:2px;font-weight:bold">
                                            E-Merina
                                        </div>
                                        <div class="progress progress-xs mb-3">
                                            <div class="progress-bar bg-warning-200" role="progressbar" style="width: {{$pourMerinaCredit}}%;" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="d-flex mt-2 mb-1 text-info" style="letter-spacing:2px;font-weight:bold">
                                            E-Betsy
                                        </div>
                                        <div class="progress progress-xs mb-3">
                                            <div class="progress-bar bg-info-500" role="progressbar" style="width: {{$pourBetsyCredit}}%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        
                                        <div class="d-flex mt-2 mb-1 text-success" style="letter-spacing:2px;font-weight:bold">
                                            E-Vezo
                                        </div>
                                        <div class="progress progress-xs mb-3">
                                            <div class="progress-bar bg-success-200" role="progressbar" style="width: {{$pourVezoCredit}}%;" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                      
                                      
                                        <div class="d-flex mt-2 mb-1 text-secondary" style="letter-spacing:2px;font-weight:bold">
                                            E-Diego
                                        </div>
                                        <div class="progress progress-xs mb-3">
                                            <div class="progress-bar bg-secondary-500" role="progressbar" style="width: {{$pourDiegoCredit}}%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            <div id="flot-area" style="width:100%; height:300px;display:none"></div>
                        </div>
                    </div>
                </div>
            </div>

            <?php
                //pourcentage de payé chaque logement
                $pourBetsyPaye=number_format($tabpaye[1]/$sumTotal*100,2);
                $pourMerinaPaye=number_format($tabpaye[2]/$sumTotal*100,2);
                $pourVezoPaye=number_format($tabpaye[3]/$sumTotal*100,2);
                $pourDiegoPaye=number_format($tabpaye[4]/$sumTotal*100,2);
                

            ?>
            <div class="col-lg-6">


                
                <div id="panel-3" class="panel panel-locked" data-panel-sortable data-panel-collapsed data-panel-close>
                    <div class="panel-hdr">
                        <h2>
                            Detail <span class="fw-300"><i>Payé</i></span>
                        </h2>
                        <div class="js-easy-pie-chart color-primary-400 position-relative position-absolute pos-left pos-right pos-top pos-bottom d-flex align-items-center justify-content-center" data-percent="{{$pourPaye}}" data-piesize="70" data-linewidth="5" data-scalelength="1" data-scalecolor="#fff">
                                        <div class="position-absolute pos-top pos-left pos-right pos-bottom d-flex align-items-center justify-content-center fw-500 fs-xl text-dark">{{$pourPaye}}%</div>
                         </div>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content poisition-relative">
                            <div class="pb-5 pt-3">
                                <div class="row">
                                    <div class="col-6 col-xl-3 d-sm-flex align-items-center">
                                        <div class="p-2 mr-3 bg-info-200 rounded">
                                            <span class="peity-bar" data-peity="{&quot;fill&quot;: [&quot;#fff&quot;], &quot;width&quot;: 27, &quot;height&quot;: 27 }">3,4,5,8,2</span>
                                        </div>
                                        
                                        <div>
                                            <label class="fs-sm mb-0">Agence E-Merina</label>
                                            <h4 class="font-weight-bold mb-0">{{$pourMerinaPaye}}%</h4>
                                        </div>
                                    </div>
                                    <div class="col-6 col-xl-3 d-sm-flex align-items-center">
                                        <div class="p-2 mr-3 bg-info-300 rounded">
                                            <span class="peity-bar" data-peity="{&quot;fill&quot;: [&quot;#fff&quot;], &quot;width&quot;: 27, &quot;height&quot;: 27 }">5,3,1,7,9</span>
                                        </div>
                                        <div>
                                            <label class="fs-sm mb-0">Agence E-Betsy</label>
                                            <h4 class="font-weight-bold mb-0">{{$pourBetsyPaye}}%</h4>
                                        </div>
                                    </div>
                                    <div class="col-6 col-xl-3 d-sm-flex align-items-center">
                                        <div class="p-2 mr-3 bg-success-300 rounded">
                                            <span class="peity-bar" data-peity="{&quot;fill&quot;: [&quot;#fff&quot;], &quot;width&quot;: 27, &quot;height&quot;: 27 }">3,4,3,5,5</span>
                                        </div>
                                        <div>
                                            <label class="fs-sm mb-0">Agence E-Vezo</label>
                                            <h4 class="font-weight-bold mb-0">{{$pourVezoPaye}}%</h4>
                                        </div>
                                    </div>
                                    <div class="col-6 col-xl-3 d-sm-flex align-items-center">
                                        <div class="p-2 mr-3 bg-success-500 rounded">
                                            <span class="peity-bar" data-peity="{&quot;fill&quot;: [&quot;#fff&quot;], &quot;width&quot;: 27, &quot;height&quot;: 27 }">6,4,7,5,6</span>
                                        </div>
                                        <div>
                                            <label class="fs-sm mb-0">Agence E-Diego</label>
                                            <h4 class="font-weight-bold mb-0">{{$pourDiegoPaye}}%</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="flotVisit" style="width:100%; height:208px;"></div>
                        </div>
                    </div>
                </div>
            </div>

</main>
@endsection

@section('script') 

<script>
            /* defined datas */
            var dataTargetProfit = [
                [1354586000000, 153],
                [1364587000000, 658],
                [1374588000000, 198],
                [1384589000000, 663],
                [1394590000000, 801],
                [1404591000000, 1080],
                [1414592000000, 353],
                [1424593000000, 749],
                [1434594000000, 523],
                [1444595000000, 258],
                [1454596000000, 688],
                [1464597000000, 364]
            ]
            var dataProfit = [
                [1354586000000, 53],
                [1364587000000, 65],
                [1374588000000, 98],
                [1384589000000, 83],
                [1394590000000, 980],
                [1404591000000, 808],
                [1414592000000, 720],
                [1424593000000, 674],
                [1434594000000, 23],
                [1444595000000, 79],
                [1454596000000, 88],
                [1464597000000, 36]
            ]
            var dataSignups = [
                [1354586000000, 647],
                [1364587000000, 435],
                [1374588000000, 784],
                [1384589000000, 346],
                [1394590000000, 487],
                [1404591000000, 463],
                [1414592000000, 479],
                [1424593000000, 236],
                [1434594000000, 843],
                [1444595000000, 657],
                [1454596000000, 241],
                [1464597000000, 341]
            ]
            var dataSet1 = [
                [0, 10],
                [100, 8],
                [200, 7],
                [300, 5],
                [400, 4],
                [500, 6],
                [600, 3],
                [700, 2]
            ]

            $(document).ready(function()
            {


                var dataSetPie = [
                {
                    label: "E-Merina",
                    data: {{$pourMerinaCredit}},
                    color: myapp_get_color.warning_200
                },
                {
                    label: "E-Betsy",
                    data: {{$pourBetsyCredit}},
                    color: myapp_get_color.info_500
                },
                {
                    label: "E-Vezo",
                    data: {{$pourVezoCredit}},
                    color: myapp_get_color.success_200
                },
                {
                    label: "E-Diego",
                    data: {{$pourDiegoCredit}},
                    color: myapp_get_color.secondary
                }];


                $.plot($("#flotPie"), dataSetPie,
                {
                    series:
                    {
                        pie:
                        {
                            innerRadius: 0.5,
                            show: true,
                            radius: 1,
                            label:
                            {
                                show: true,
                                radius: 2 / 3,
                                threshold: 0.1
                            }
                        }
                    },
                    legend:
                    {
                        show: false
                    }
                });
                /* init datatables */
               
   

                /* flot toggle example */
                var flot_toggle = function()
                {

                    var data = [
                    {
                        label: "Target Profit",
                        data: dataTargetProfit,
                        color: myapp_get_color.info_400,
                        bars:
                        {
                            show: true,
                            align: "center",
                            barWidth: 30 * 30 * 60 * 1000 * 80,
                            lineWidth: 0,
                            /*fillColor: {
                            	colors: [myapp_get_color.primary_500, myapp_get_color.primary_900]
                            },*/
                            fillColor:
                            {
                                colors: [
                                {
                                    opacity: 0.9
                                },
                                {
                                    opacity: 0.1
                                }]
                            }
                        },
                        highlightColor: 'rgba(255,255,255,0.3)',
                        shadowSize: 0
                    },
                    {
                        label: "Actual Profit",
                        data: dataProfit,
                        color: myapp_get_color.warning_500,
                        lines:
                        {
                            show: true,
                            lineWidth: 2
                        },
                        shadowSize: 0,
                        points:
                        {
                            show: true
                        }
                    },
                    {
                        label: "User Signups",
                        data: dataSignups,
                        color: myapp_get_color.success_500,
                        lines:
                        {
                            show: true,
                            lineWidth: 2
                        },
                        shadowSize: 0,
                        points:
                        {
                            show: true
                        }
                    }]

                    var options = {
                        grid:
                        {
                            hoverable: true,
                            clickable: true,
                            tickColor: '#f2f2f2',
                            borderWidth: 1,
                            borderColor: '#f2f2f2'
                        },
                        tooltip: true,
                        tooltipOpts:
                        {
                            cssClass: 'tooltip-inner',
                            defaultTheme: false
                        },
                        xaxis:
                        {
                            mode: "number"
                        },
                        yaxes:
                        {
                            tickFormatter: function(val, axis)
                            {
                                return "$" + val;
                            },
                            max: 1200
                        }

                    };

                    var plot2 = null;

                    function plotNow()
                    {
                        var d = [];
                        $("#js-checkbox-toggles").find(':checkbox').each(function()
                        {
                            if ($(this).is(':checked'))
                            {
                                d.push(data[$(this).attr("name").substr(4, 1)]);
                            }
                        });
                        if (d.length > 0)
                        {
                            if (plot2)
                            {
                                plot2.setData(d);
                                plot2.draw();
                            }
                            else
                            {
                                plot2 = $.plot($("#flot-toggles"), d, options);
                            }
                        }

                    };

                    $("#js-checkbox-toggles").find(':checkbox').on('change', function()
                    {
                        plotNow();
                    });
                    plotNow()
                }
                flot_toggle();
                /* flot toggle example -- end*/

                /* flot area */
                var flotArea = $.plot($('#flot-area'), [
                {
                    data: dataSet1,
                    label: 'New Customer',
                    color: myapp_get_color.success_200
                }
                ],
                {
                    series:
                    {
                        lines:
                        {
                            show: true,
                            lineWidth: 2,
                            fill: true,
                            fillColor:
                            {
                                colors: [
                                {
                                    opacity: 0
                                },
                                {
                                    opacity: 0.5
                                }]
                            }
                        },
                        shadowSize: 0
                    },
                    points:
                    {
                        show: true,
                    },
                    legend:
                    {
                        noColumns: 1,
                        position: 'nw'
                    },
                    grid:
                    {
                        hoverable: true,
                        clickable: true,
                        borderColor: '#ddd',
                        tickColor: '#ddd',
                        aboveData: true,
                        borderWidth: 0,
                        labelMargin: 5,
                        backgroundColor: 'transparent'
                    },
                    yaxis:
                    {
                        tickLength: 1,
                        min: 0,
                        max: 100,
                        color: '#eee',
                        font:
                        {
                            size: 0,
                            color: '#999'
                        }
                    },
                    xaxis:
                    {
                        tickLength: 1,
                        color: '#eee',
                        font:
                        {
                            size: 10,
                            color: '#999'
                        }
                    }

                });
                /* flot area -- end */

                var flotVisit = $.plot('#flotVisit', [
                {
                    data: [
                        [3, {{$pourMerinaPaye}}],
                        [4, {{$pourBetsyPaye}}],
                        [5, {{$pourVezoPaye}}],
                        [6, {{$pourDiegoPaye}}]
                    
                    ],
                    color: myapp_get_color.success_200
                }],
                {
                    series:
                    {
                        shadowSize: 0,
                        lines:
                        {
                            show: true,
                            lineWidth: 2,
                            fill: true,
                            fillColor:
                            {
                                colors: [
                                {
                                    opacity: 0
                                },
                                {
                                    opacity: 0.12
                                }]
                            }
                        }
                    },
                    grid:
                    {
                        borderWidth: 0
                    },
                    yaxis:
                    {
                        min: 0,
                        max: 100,
                        tickColor: '#ddd',
                        ticks: [
                            [0, ''],
                            [20, '20'],
                            [40, '40'],
                            [60, '60'],
                            [80,'80'],
                            [100,'100']
                        ],
                        font:
                        {
                            color: '#444',
                            size: 10
                        }
                    },
                    xaxis:
                    {

                        tickColor: '#eee',
                        ticks: [
                            [2, ''],
                            [3, 'E-Merina'],
                            [4, 'E-Betsy'],
                            [5, 'E-Vezo'],
                            [6, 'E-Diego']
                            
                           
                        ],
                        font:
                        {
                            color: '#999',
                            size: 9
                        }
                    }
                });


            });

        </script>

@endsection
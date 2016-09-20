<?php
/**
 * Created by PhpStorm.
 * User: ghdj
 * Date: 16/09/16
 * Time: 15:06
 */
?>





@extends('template.dashboard')

@section('title',"Les traitements du chauffage")

@section('content')

    <div class="row">
        <div class="col-sm-12">
            <form action="" method="GET" class="form-inline  pull-right" role="form">
                <div class="form-group">
                    <label class="sr-only" for="">Recherche</label>
                    <input type="search" class="form-control" name="search" placeholder="chercher ici">
                </div>
                <button type="submit" class="btn btn-success"><i class="pe-7s-search"></i></button>
            </form>
        </div>
    </div>
    <br>

        <div class="header">
            <h4 class="title">Affichage les traitement du chauffage : </h4>
        </div>



        @for ($j = 1; $j <= count($chauffages); $j++)

            <div class="panel">
           <div class="container">
               <div class="row">
               <div id="chart{{ $j }}" class="ct-chart"></div>
               </div>
           </div>

            </div>

        @endfor


    <div class="card">
        @for ($j = 1; $j <= count($chauffages); $j++)[@for($i = 0; $i < 23;$i++){{ $chauffages[$j][$i]->valeur }}@if($i != 22),@endif @endfor] @endfor
    </div>


@endsection




@section('script')
    <script type="text/javascript">



           // demo.initChartist();

           var dataSales = {
               labels:  [@for($i = 0; $i < 23;$i++)'{{ $i }}'@if($i != 22),@endif @endfor
               ],
               series: [
                       @for ($j = 1; $j <= count($chauffages); $j++)[@for($i = 0; $i < 23;$i++){{ floor($chauffages[$j][$i]->valeur) }}@if($i != 22),@endif @endfor], @endfor]
           };




           var optionsSales = {
                low: -400,
                high: 400,
                height: "600px",
                axisX: {
                    showGrid: true,
                },
                showLine: true,
                showPoint: true,
            };

            var responsiveSales = [
                ['screen and (max-width: 640px)', {
                    axisX: {
                        labelInterpolationFnc: function (value) {
                            return value[0];
                        }
                    }
                }]
            ];

            @for ($j = 1; $j <= count($chauffages); $j++)

                       Chartist.Line('#chart{{ $j }}', dataSales, optionsSales, responsiveSales);

            @endfor

            //Chartist.Line('#chartHours', dataSales, optionsSales, responsiveSales);




    </script>


@endsection
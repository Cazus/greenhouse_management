@extends('template.dashboard')

@section('title',"Creation d'une serre")

@section('head')
    <style>
        .radio{
            display: inline-block;
            width:150px;
        }
        .img-type{
            height:50px;
            width:auto;
        }
    </style>
@endsection

@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="card">
                <div class="header">
                    <h4 class="title">Formulaire d'ajout d'une nouvelle serre</h4>
                </div>
                <div class="content">
                    @include('serre._form', [
                        'url'           => route('serre.store'),
                        'method'        => 'POST',
                        'name'           => old('name'),
                        'zones'         => $zones,
                        'zone_id'       => old('zone_id'),
                        'envirenement'  => old('envirenement'),
                        'nbr'           => old('nbr', 1),
                        'ctz'           => old('ctz'),
                        'c'             => old('c'),
                        'w'             => old('w'),
                        'l'             => old('l'),
                        'h'             => old('h'),
                        'e'             => old('e'),
                        'd'             => old('d'),
                        'tc'            => old('tc'),
                        'hvouv'         =>old('hvouv'),
                        'stouv'         =>old('stouv'),
                        'srf'           =>old('srf'),
                        'ssd'           =>old('ssd'),
                        'y'           =>old('y'),
                    ])
                </div>
            </div>
        </div>
    </div>

@endsection

@section('script')

    <script>
        $().ready(function(){
            demo.initGoogleMaps();
        });
    </script>

@endsection
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
                    <h4 class="title">Formulaire d'edition d'une serre</h4>
                </div>
                <div class="content">
                    @include('serre._form', [
                        'url'           => route('serre.update', $serre),
                        'method'        => 'PUT',
                        'name'           => old('name', $serre->name),
                        'zones'         => $zones,
                        'zone_id'       => $serre->zone_id,
                        'envirenement'  => old('envirenement'),
                        'nbr'           => old('nbr',$serre->nbr),
                        'ctz'           => old('ctz',$serre->ctz),
                        'c'             => old('c',$serre->c),
                        'w'             => old('w',$serre->w),
                        'l'             => old('l',$serre->l),
                        'h'             => old('h',$serre->h),
                        'e'             => old('e',$serre->e),
                        'd'             => old('d',$serre->d),
                        'tc'            => old('tc',$serre->tc),
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
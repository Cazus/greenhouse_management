@extends('template.dashboard')

@section('title',"Les traitements du chauffage")

@section('content')

    <div class="row">
        <div class="col-sm-12">
            <a href="{{ route('chauffage.create') }}" class="btn btn-success btn-fill"><i class="pe-7s-plus"></i> Ajouter traitement chauffage</a>
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
    <div class="card">
        <div class="header">
            <h4 class="title">La liste des traitement chauffages disponibles</h4>
        </div>
        <form action="{{ route('chauffage.show') }}" class="form-inline" method="post" role="form">
            {!! csrf_field() !!}
            <div class="form-group">
                <label for="date" class="sr-only">Choisir la date :</label>
                <input type="date" name="dated" class="form-control">

                <span>Jusqu'à</span>
                <input type="date" name="datef" class="form-control">
            </div>

            <div class="form-group">
                <label for="serre">Choisir la serre : </label>
                <select name="serre" id="" class="form-control">
                    @foreach($serres as $serre)
                        <option value="{{ $serre->id }}"> {{ $serre->name }}</option>
                    @endforeach
                </select>
            </div>


            <div class="form-group">
                <input type="submit" value="Afficher" class="btn btn-success">
            </div>
        </form>

    </div>

@endsection
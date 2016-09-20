<?php
/**
 * Created by PhpStorm.
 * User: ghdj
 * Date: 16/09/16
 * Time: 15:04
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
    <div class="card">
        <div class="header">
            <h4 class="title">Création d'une traitement chauffage : </h4>
        </div>
        <form action="{{ route('chauffage.store') }}" class="form-inline" method="post" role="form">
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

            Type de coefficient de transfert thermique :
            <select name="type" id="chauff_type" class="form-control">
                <option value="0" selected>Kittas, 1987</option>
                <option value="1">Bot, 1983</option>
                <option value="2">Von Elsner, 1982</option>
                <option value="3">Kanthak, 1970</option>
                <option value="4">Takami et al, 1977</option>
                <option value="5">Mac Adams, 1954</option>
                <option value="6">Masmoudi</option>
            </select>

            <div class="form-group">
                <input type="submit" value="Enregistrer" class="btn btn-success">
            </div>
        </form>

    </div>

@endsection

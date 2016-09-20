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
                    <h4 class="title">Description de la serre serre</h4>
                </div>
                <div class="content">
                    <fieldset disabled>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group {{ ($errors->has('name')) ? 'has-error' : '' }}">
                                    <label for="name">Nom</label>
                                    <input type="text"
                                           name="name"
                                           class="form-control"
                                           placeholder="nom de la serre"
                                           value="{{ $serre->name }}">
                                    @if($errors->has('name'))
                                        <span class="help-block">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group {{ ($errors->has('nbr')) ? 'has-error' : '' }}">
                                    <label for="nbr">nombre de serre</label>
                                    <input type="number"
                                           name="nbr"
                                           class="form-control"
                                           placeholder="nombre de serres"
                                           value="{{ $serre->nbr }}">
                                    @if($errors->has('nbr'))
                                        <span class="help-block">{{ $errors->first('nbr') }}</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group {{ ($errors->has('type')) ? 'has-error' : '' }}">
                                    <div class="radio {{ ($serre->type == 1) ? 'checked' :'' }}">
                                        <label>
                                            <input type="radio" name="type" value="1" checked>
                                            <img class="img-type" src="/assets/img/type1.jpg"  alt="">
                                        </label>
                                    </div>
                                    <div class="radio {{ ($serre->type == 2) ? 'checked' :'' }}">
                                        <label>
                                            <input type="radio" name="type"  value="2">
                                            <img class="img-type" src="/assets/img/type2.jpg" alt="">
                                        </label>
                                    </div>
                                    @if($errors->has('type'))
                                        <span class="help-block">{{ $errors->first('type') }}</span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group {{ ($errors->has('zone_id')) ? 'has-error' : '' }}">
                                    <label>Choisir la zone</label>
                                    <select name="zone_id" class="form-control">
                                        @foreach($zones as $item)
                                            <option value="{{ $item->id }}" {{ ($serre->zone_id == $item->id)? 'selected' : '' }}>{{ $item->nom }}</option>
                                        @endforeach
                                    </select>
                                    @if($errors->has('zone_id'))
                                        <span class="help-block">{{ $errors->first('zone_id') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group {{ ($errors->has('envirenement')) ? 'has-error' : '' }}">
                                    <label>Description d'envirenement</label>
                                    <select name="envirenement" class="form-control">
                                        <option value="1" >Océan ou Lac</option>
                                        <option value="2" >Terain plat</option>
                                        <option value="3" >Zone rurale</option>
                                        <option value="4" >zone urbaine</option>
                                        <option value="5" >centre d'une grande ville</option>
                                    </select>
                                    @if($errors->has('envirenement'))
                                        <span class="help-block">{{ $errors->first('envirenement') }}</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group {{ ($errors->has('c')) ? 'has-error' : '' }}">
                                    <label for="c">C</label>
                                    <input type="text"
                                           name="c"
                                           class="form-control"
                                           value="{{ $serre->c }}">
                                    @if($errors->has('c'))
                                        <span class="help-block">{{ $errors->first('c') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group {{ ($errors->has('w')) ? 'has-error' : '' }}">
                                    <label for="w">W</label>
                                    <input type="text"
                                           name="w"
                                           class="form-control"
                                           value="{{ $serre->w }}">
                                    @if($errors->has('w'))
                                        <span class="help-block">{{ $errors->first('w') }}</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group {{ ($errors->has('l')) ? 'has-error' : '' }}">
                                    <label for="l">L</label>
                                    <input type="text"
                                           name="l"
                                           class="form-control"
                                           value="{{ $serre->l }}">
                                    @if($errors->has('nom'))
                                        <span class="help-block">{{ $errors->first('l') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group {{ ($errors->has('h')) ? 'has-error' : '' }}">
                                    <label for="h">H</label>
                                    <input type="text"
                                           name="h"
                                           class="form-control"
                                           value="{{ $serre->h }}">
                                    @if($errors->has('nom'))
                                        <span class="help-block">{{ $errors->first('h') }}</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group {{ ($errors->has('e')) ? 'has-error' : '' }}">
                                    <label for="e">E</label>
                                    <input type="text"
                                           name="e"
                                           class="form-control"
                                           value="{{ $serre->e }}">
                                    @if($errors->has('e'))
                                        <span class="help-block">{{ $errors->first('e') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group {{ ($errors->has('d')) ? 'has-error' : '' }}">
                                    <label for="d">D</label>
                                    <input type="text"
                                           name="d"
                                           class="form-control"
                                           value="{{ $serre->d }}">
                                    @if($errors->has('d'))
                                        <span class="help-block">{{ $errors->first('d') }}</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group {{ ($errors->has('ctz')) ? 'has-error' : '' }}">
                                    <label>Coefficient de transmission (Z)</label>
                                    <select name="ctz" class="form-control">
                                        <option value="0.9"  {{ ($serre->ctz == 0.9)? 'selected' : '' }}>Verre standard 4 mm</option>
                                        <option value="0.95" {{ ($serre->ctz == 0.95)? 'selected' : '' }}>A/R Anti-réflexion 95+ </option>
                                        <option value="0.8"  {{ ($serre->ctz == 0.8)? 'selected' : '' }}>seule couche de polyéthylène </option>
                                        <option value="0.65" {{ ($serre->ctz == 0.65)? 'selected' : '' }}>double polyéthylène</option>
                                        <option value="0.33" {{ ($serre->ctz == 0.33)? 'selected' : '' }}>PEbd traité anti UV</option>
                                        <option value="0.21" {{ ($serre->ctz == 0.21)? 'selected' : '' }}>PEbd + EVA </option>
                                        <option value="0.13" {{ ($serre->ctz == 0.13)? 'selected' : '' }}>PEbd + charges minerals</option>
                                    </select>
                                    @if($errors->has('ctz'))
                                        <span class="help-block">{{ $errors->first('ctz') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group {{ ($errors->has('tc')) ? 'has-error' : '' }}">
                                    <label for="tc">Traitement (TC)</label>
                                    <input type="text"
                                           name="tc"
                                           class="form-control"
                                           value="{{ $serre->tc }}">
                                    @if($errors->has('tc'))
                                        <span class="help-block">{{ $errors->first('tc') }}</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </fieldset>
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
<form action="{{ $url }}" method="POST">
    <input type="hidden" name="_method" value="{{ $method }}">
    {!! csrf_field() !!}
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group {{ ($errors->has('name')) ? 'has-error' : '' }}">
                <label for="name">Nom</label>
                <input type="text"
                       name="name"
                       class="form-control"
                       placeholder="nom de la serre"
                       value="{{ $name }}">
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
                       value="{{ $nbr }}">
                @if($errors->has('nbr'))
                    <span class="help-block">{{ $errors->first('nbr') }}</span>
                @endif
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="form-group {{ ($errors->has('type')) ? 'has-error' : '' }}">
                <div class="radio checked">
                    <label>
                        <input type="radio" name="type" value="1" checked>
                        <img class="img-type" src="/assets/img/type1.jpg"  alt="">
                    </label>
                </div>
                <div class="radio">
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
                        <option value="{{ $item->id }}" {{ ($zone_id == $item->id)? 'selected' : '' }}>{{ $item->nom }}</option>
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
                    <option value="1" {{ ($envirenement == 1)? 'selected' : '' }}>Océan ou Lac</option>
                    <option value="2" {{ ($envirenement == 2)? 'selected' : '' }}>Terain plat</option>
                    <option value="3" {{ ($envirenement == 3)? 'selected' : '' }}>Zone rurale</option>
                    <option value="4" {{ ($envirenement == 4)? 'selected' : '' }}>zone urbaine</option>
                    <option value="5" {{ ($envirenement == 5)? 'selected' : '' }}>centre d'une grande ville</option>
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
                       value="{{ $c }}">
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
                       value="{{ $w }}">
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
                       value="{{ $l }}">
                @if($errors->has('l'))
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
                       value="{{ $h }}">
                @if($errors->has('h'))
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
                       value="{{ $e }}">
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
                       value="{{ $d }}">
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
                    <option value="0.9"  {{ ($ctz == 0.9)? 'selected' : '' }}>Verre standard 4 mm</option>
                    <option value="0.95" {{ ($ctz == 0.95)? 'selected' : '' }}>A/R Anti-réflexion 95+ </option>
                    <option value="0.8"  {{ ($ctz == 0.8)? 'selected' : '' }}>seule couche de polyéthylène </option>
                    <option value="0.65" {{ ($ctz == 0.65)? 'selected' : '' }}>double polyéthylène</option>
                    <option value="0.33" {{ ($ctz == 0.33)? 'selected' : '' }}>PEbd traité anti UV</option>
                    <option value="0.21" {{ ($ctz == 0.21)? 'selected' : '' }}>PEbd + EVA </option>
                    <option value="0.13" {{ ($ctz == 0.13)? 'selected' : '' }}>PEbd + charges minerals</option>
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
                       value="{{ $tc }}">
                @if($errors->has('tc'))
                    <span class="help-block">{{ $errors->first('tc') }}</span>
                @endif
            </div>
        </div>
    </div>
    <div class="col-sm-12">
        <h3>Ventilation</h3>
    </div>
    <div class="row">
        <div class="col-sm-3">
            <div class="form-group {{ ($errors->has('hvouv')) ? 'has-error' : '' }}">
                <label for="hvouv">Hvouv</label>
                <input type="hvouv"
                       name="hvouv"
                       class="form-control"
                       value="{{ $hvouv }}">
                @if($errors->has('hvouv'))
                    <span class="help-block">{{ $errors->first('hvouv') }}</span>
                @endif
            </div>
        </div>

        <div class="col-sm-3">
            <div class="form-group {{ ($errors->has('stouv')) ? 'has-error' : '' }}">
                <label for="stouv">stouv</label>
                <input type="stouv"
                       name="stouv"
                       class="form-control"
                       value="{{ $stouv }}">
                @if($errors->has('stouv'))
                    <span class="help-block">{{ $errors->first('stouv') }}</span>
                @endif
            </div>
        </div>
        <div class="col-sm-3">
            <div class="form-group {{ ($errors->has('srf')) ? 'has-error' : '' }}">
                <label for="srf">srf</label>
                <input type="srf"
                       name="srf"
                       class="form-control"
                       value="{{ $srf }}">
                @if($errors->has('srf'))
                    <span class="help-block">{{ $errors->first('srf') }}</span>
                @endif
            </div>
        </div>
    </div>

        <div class="col-sm-3">
            <div class="form-group {{ ($errors->has('ssd')) ? 'has-error' : '' }}">
                <label for="ssd">ssd</label>
                <input type="ssd"
                       name="ssd"
                       class="form-control"
                       value="{{ $ssd }}">
                @if($errors->has('ssd'))
                    <span class="help-block">{{ $errors->first('ssd') }}</span>
                @endif
            </div>
        </div>
        <div class="col-sm-3">
            <div class="form-group {{ ($errors->has('y')) ? 'has-error' : '' }}">
                <label for="y">y</label>
                <input type="y"
                       name="y"
                       class="form-control"
                       value="{{ $y }}">
                @if($errors->has('y'))
                    <span class="help-block">{{ $errors->first('y') }}</span>
                @endif
            </div>
        </div>


    <button type="submit" class="btn btn-success btn-fill pull-right">Enregistrer</button>
    <div class="clearfix"></div>
</form>
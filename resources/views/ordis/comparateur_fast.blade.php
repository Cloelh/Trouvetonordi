@extends('layouts.app')

@section('content')

    <h1>Comparateur Pro</h1>

    <div class="comparateur_content">
        <form method="POST">
            <div class="filtres">

                <div class="dropdown">
                    <button type="button" id="processeur" class="btn">Processeur</button>
                    <div class="oneFiltre" id="processeurs">
                        @foreach($ordis as $o)
                            <div class="element">
                                <input type="checkbox" name="checkbox" id="{{$o->processeur}}"
                                    value="{{$o->processeur}}">
                                <label for="{{$o->processeur}}">{{$o->processeur}}</label>
                            </div>
                        @endforeach
                        <button type="button" class="btn submit">Ajouter ces filtres</button>
                    </div>
                </div>

                <div class="dropdown">
                    <button type="button" id="processeur" class="btn">test</button>
                    <div class="oneFiltre" id="processeurs">
                        @foreach($ordis as $o)
                        <div class="form-check element">
                            <input type="radio" name="checkbox" id="{{$o->processeur}}" value="{{$o->processeur}}">
                            <label for="{{$o->processeur}}">{{$o->processeur}}</label>
                        </div>
                        @endforeach
                    </div>
                </div>

            </div>

            <input type="submit" class="btn" value="Rechercher"/>
        </form>

        <div class="comparateur_result ordinateurs">
            Resultats : 
                <div class="flex_row">
                    @foreach($ordis as $o)
                    <a href="/ordinateur/{{$o->id}}" class="list-ordi-item">
                        <div class="list-ordi-item-photo"><img src="{{$o->photo}}"></div>
                        <div class="list-ordi-item-text">{{$o->name}}</div>
                    </a>
                    @endforeach
                </div>
        </div>
    </div>
@endsection


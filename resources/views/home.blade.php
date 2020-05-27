@extends('layouts.app')

@section('content')
    <div class="content home">
        <h1>Trouve ton ordinateur !</h1>

        <div class="both_sides">
            <div class="left_side">
                <h2>Découvre nos ordinateurs :</h2>
                <div class="home_list-ordis">
                    @foreach($ordis as $o)
                        <a href="/ordinateur/{{$o->id}}" class="list-ordi-item">
                            <div class="list-ordi-item-photo"><img src="{{$o->photo}}"></div>
                            <div class="list-ordi-item-text">{{$o->name}}</div>
                        </a>
                    @endforeach
                </div>
            </div>

            <div class="right_side">
                <h2 class="comparaison">Recherche approfondie :</h2>
                <div>
                    <p>Tu sais exactement ce que tu veux ? Tu connais tous les composants de ton pc par coeur ?<br/>
                        Tu veux absolument un processeur en particulier ou bien même choisir ton nouveau pc en fonction
                        de caractéristiques bien particulières ?</p>
                    <a href="/comparateurPro">Découvre la recherche approfondie</a><br/><br/>
                    <p>Les mots processeurs et carte graphique te sont inconnus ? 8Go de RAM??? G O ??? Mais tu voudrais 
                    trouver l'ordinateur parfait pour toi !</p>
                    <a href="/comparateurFast">Découvre la recherche simplifiée</a>
                </div>
            </div>
        </div>
    </div>

@endsection

@extends('layouts.app')

@section('content')
    <div class="content home">
        <h1>Trouve ton ordinateur !</h1>

        <div class="both_sides">
            <div class="left_side">
                <h3>Découvre nos ordinateurs :</h3>
                <div class="home_list-ordis">
                    @foreach($ordis as $o)
                        <a href="/ordinateur/{{$o->id}}" class="list-ordi-item">
                            <div class="list-ordi-item-photo"><img src="{{$o->photo}}"></div>
                            <div class="list-ordi-item-text">{{$o->name}}</div>
                        </a>
                    @endforeach
                </div>
                <a href="/ordinateur" class="btnOrdis">
                    <button class="btn">Tous les ordinateurs</button>
                </a>
            </div>

            <div class="right_side">
                <h3>Recherche un ordinateur :</h3>
                <div class="centerRight">
                    <div class="compaFast">
                        <div class="noobEmoji">
                            <ul>
                                <li></li>
                            </ul>
                        </div>
                        <div class="para">
                            <p>Les mots processeurs et carte graphique te sont inconnus ? Tu sais juste qu'il te faut un
                                ordinateur pour faire ça ou ci ? Alors tu es exactement au bon endroit !</p>
                            <a href="/comparateurFast">
                                <button class="btn">Découvre la recherche simplifiée</button>
                            </a>
                        </div>
                    </div>
                    <div class="compaPro">
                        <div class="proEmoji">
                            <ul>
                                <li></li>
                            </ul>
                        </div>
                        <div class="para">
                            <p>Tu sais exactement ce que tu veux ? Tu connais tous les composants de ton pc par coeur
                                ?<br/>
                                Tu veux absolument un processeur en particulier ou bien même choisir ton nouveau pc en
                                fonction
                                de caractéristiques bien particulières ?</p>
                                <button class="btn btnDisabled">Découvre la recherche approfondie</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

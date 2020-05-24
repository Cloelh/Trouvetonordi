@extends('layouts.app')

@section('content')

    {{--	LE TRUC DE CLOE--}}
    {{--<div class="comparateur comparateur_pro">
        <h2>Comparateur Professionnel</h2>
        <p>Pour les gens qui savent de quoi ils parlent ;)</p>
        <div class="list-item-ordi	">
            @foreach($item as $id => $nom)
                <div class="list-group-item">{{$nom}}</div>
            @endforeach
        </div>
    </div>--}}

    {{--	LE TRUC DE LEA--}}

    <h1>comparateur pro</h1>

    <div id="filters"></div>
    <br/>
    <a href="#" id="marque">
        <button id="marqueTxt" value="marque">Marque</button>
    </a>

    <br/>
    <br/>

    <a href="#" id="taille">
        <button id="tailleTxt" value="taille">Taille</button>
    </a>

    <div id="listHere">

    </div>


    @foreach($ordis as $o)
        <div>
            <form>
                <input type="radio" value="{{$o->marque}}">{{$o->marque}}
            </form>
        </div>
    @endforeach

@endsection
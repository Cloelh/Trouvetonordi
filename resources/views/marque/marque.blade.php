@extends('layouts.app')

@section('content')
    <div class="content ordinateurs marque">
        <small><a href="/marque">Retour aux marques</a></small>
        <h1>{{$marque->name}}</h1>

        <div class="ordisMarque">
            @foreach($ordis_marque as $o)
                <a href="/ordinateur/{{$o->id}}" class="list-ordi-item">
                    <div class="list-ordi-item-photo"><img src="{{$o->photo}}"></div>
                    <div class="list-ordi-item-text">{{$o->name}}</div>
                </a>
            @endforeach

        </div>
    </div>


@endsection

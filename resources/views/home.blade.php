@extends('layouts.app')
<?php
    // changer la value
/*setcookie("value", $value);
echo $_COOKIE['value'];*/

?>
@section('content')
    <div class="content home">
        <h1>Trouve ton ordinateur</h1>

        <h2>Nos ordis</h2>
        <div class="home_list-ordis">
            @foreach($ordis as $o)
                <a href="/ordinateur/{{$o->id}}" class="list-ordi-item">
                    <div class="list-ordi-item-photo"><img src="{{$o->photo}}"></div>
                    <div class="list-ordi-item-text">{{$o->name}}</div>
                </a>
            @endforeach
        </div>

        <h2 class="comparaison">Troucer son ordi</h2>
    </div>

@endsection

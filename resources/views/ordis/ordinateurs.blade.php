@extends('layouts.app')

@section('content')
    <h1>Nos ordinateurs</h1>
    <div class="content ordinateurs gridOrdis">


        @foreach($ordis as $o)
            <div class="unOrdi">
                <a href="/ordinateur/{{$o->id}}" class="list-ordi-item">
                    <div class="photoOrdi"><img src="{{$o->photo}}"></div>
                    <div class="nameOrdi">{{$o->name}}</div>
                </a>
            </div>
        @endforeach
    </div>


@endsection

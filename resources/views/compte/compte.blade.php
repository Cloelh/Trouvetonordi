@extends('layouts.app')

@section('content')
    <div class="content compte">
        <h1>{{ Auth::user()->name }}</h1>

        @if (Auth::user()->name == 'admin') 

        <a href='/ajoutOrdi/create' >Ajouter un ordi</a>

    @endif


    </div>

@endsection
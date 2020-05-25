@extends('layouts.app')

@section('content')
    <div class="content compte">
        <h1>{{ Auth::user()->name }}</h1></br>

        @if (Auth::user()->name == 'admin') 

        <a href='/ajoutOrdi/create' >Ajouter un ordi</a></br></br>
        <a href='/addVendeur/create' >Ajouter un vendeur</a></br></br>
        <a href='/addMarque/create' >Ajouter une marque</a></br></br>
        @foreach($ordis as $o)
            <p>{{$o->name}}</p>
            <a href="/modif/update/{{$o->id}}">Modifier l'ordinateur</a>
            <a href="/addAchat/create/{{$o->id}}">Ajouter un site de vente</a></br></br></br>
        @endforeach

    @endif

    <a class="dropdown-item" href="{{ route('logout') }}"
        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
        {{ __('Logout') }}
    </a>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>


    </div>

@endsection


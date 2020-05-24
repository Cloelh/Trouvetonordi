@extends('layouts.app')

@section('content')
    <div class="content compte">
        <h1>{{ Auth::user()->name }}</h1>

        @if (Auth::user()->name == 'admin') 

        <a href='/ajoutOrdi/create' >Ajouter un ordi</a>

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
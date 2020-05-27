@extends('layouts.app')

@section('content')

    {{-- <div id="filters"></div>
     <br/>
     <a href="#" id="marque"><button id="marqueTxt" value="marque">Marque</button></a>

     <br/>
     <br/>

     <a href="#" id="taille"><button id="tailleTxt" value="taille">Taille</button></a>

     <div id="listHere">

     </div>--}}





    <form class="multi-range-field my-5 pb-5">
        <input id="multi3" class="multi-range" type="range" />
    </form>
    <form class="multi-range-field my-5 pb-5">
        <input id="multi4" class="multi-range" type="range" />
    </form>
    <form class="multi-range-field my-5 pb-5">
        <input id="multi5" class="multi-range" type="range" />
    </form>
    <form class="multi-range-field my-5 pb-5">
        <input id="multi6" class="multi-range" type="range" />
    </form>

@endsection

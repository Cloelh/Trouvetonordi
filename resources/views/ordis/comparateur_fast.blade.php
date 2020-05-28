@extends('layouts.app')

@section('content')

    <h1>Trouve l'ordindateur fait pour toi</h1>

    <div class="paragraphe">Clique sur l'utilisation qui te semble être celle à laquelle tu t'apparentes le plus ! &#x2B07</div>
    <div class="content comparateur_fast">


        @foreach($utilisation as $u)
            <ul>
                <li></li>
            </ul>
            <div class="txtDesc">
                <a href="/trouvefast/{{$u->id}}">{{$u->description}}</a>
            </div>
        @endforeach

    </div>



@endsection


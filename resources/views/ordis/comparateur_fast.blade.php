@extends('layouts.app')

@section('content')

    <div class="content comparateur_fast">
        <h1>Trouve l'ordindateur fait pour toi</h1>

        @foreach($utilisation as $u)
            <a href="/trouvefast/{{$u->id}}">{{$u->description}}</a>
        @endforeach

    </div>


    
@endsection


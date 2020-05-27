@extends('layouts.app')

@section('content')

    <div class="content resultats_fast">
        <h1>Resultat</h1>
        @foreach($results as $r)
            @foreach($r->ordinateur as $o)
                {{$o->name}}
            @endforeach
        @endforeach

    </div>


    
@endsection


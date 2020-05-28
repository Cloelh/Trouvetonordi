@extends('layouts.app')

@section('content')

    <div class="content resultats_fast">
        <h1>Resultat</h1>
            <p>{{$results->description}}</p>



            @foreach($results->ordinateur as $o)
                <p>{{$o->name}}</p>
            @endforeach
    </div>


    
@endsection


@extends('layouts.app')

@section('content')

    <div class="content resultats_fast">
        <h1>Resultat</h1>
        
        @foreach($results as $r)
            {{$r->description}}
        @endforeach


    </div>


    
@endsection


@extends('layouts.app')

@section('content')
    <h1>Tes résultats : &#x1F4BB</h1>

    <div class="content resultats_fast">
<br/>
        <div class="explanation">
            Vous avez choisi : "<span class="font-italic">{{$results->description}}</span>"<br/><br/>
            Nous vous proposons ces ordinateurs :
        </div>
        <ul>
            @foreach($results->ordinateur as $o)
                <li>
                    <a href="{{$o->url}}"> {{-- ICI Y'A LE LIEN A REMETTRE--}}
                        <img src="{{$o->photo}}"/>
                        <div class="nameOfPC">
                            {{$o->name}}
                        </div>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>



@endsection


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
                    <a href="/ordinateur/{{$o->id}}">
                        <img src="{{$o->photo}}"/>
                        <div class="nameOfPC">
                            <p>{{$o->name}}</p>
                            @foreach($o->vendeurs as $v)
                            <div @if ($loop->first) class="hidden" @endif>
                                <p style="color:black;">A partir de {{$v->pivot->prix}}€</p>
                            </div>
                            @endforeach
                        </div>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>



@endsection


@extends('layouts.app')

@section('content')
    <div class="content compte">
        <h1>Ajouter une utilisation à l'ordinateur :</h1>
            <h2>{{$ordi->name}}</h2>

        <div class="utilisations">
        <h4>Les utilisations déjà associées à cette ordinateur :</h4>
            @foreach($ordi->utilisations as $u)
                <p>&#x1F4BB {{$u->description}}</p>
            @endforeach
        </div>


        <form class="use_form" method="POST" action="/addUse/{{$ordi->id}}">
        @csrf
        <div class="form-group">
            <label for="desc">Choisis la description à ajouter :</label>
            <select class="form-control" name="desc" id="desc">
            @foreach($use as $u)
                <option value="{{$u->id}}">{{$u->description}}</option>
            @endforeach
            </select>
            <input class="btn btnAdd" type="submit" value="Ajouter cette utilisation">
        </div>
        </form>


    </div>

@endsection


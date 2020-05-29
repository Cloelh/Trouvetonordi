@extends('layouts.app')

@section('content')
    <div class="content compte">
        <h1>Ajouter une utilisation à l'ordinateur : {{$ordi->name}}</h1>

        <div class="utilisations">
        <h4>Les utilisations déjà associées à cette ordinateur :</h4>
            @foreach($ordi->utilisations as $u)
                <p>{{$u->id}} - {{$u->description}}</p>
            @endforeach
        </div>


        <form class="use_form" method="POST" action="/addUse/{{$ordi->id}}">
        @csrf
        <div class="form-group">
            <label for="desc">Description</label>
            <select class="form-control" name="desc" id="desc">
            @foreach($use as $u)
                <option value="{{$u->id}}">{{$u->id}} - {{$u->description}}</option>
            @endforeach
            </select>

            <input class="btn btn-success" type="submit" value="ajouter cette utilisation">
        </div>
        </form>


    </div>

@endsection


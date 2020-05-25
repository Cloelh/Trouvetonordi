@extends('layouts.app')

@section('content')
    <div class="content compte">
       <h1>Ajouter un vendeur à l'ordinateur : {{$ordi->name}}</h1>


        <form class="achat_form" method="POST" action="/addAchat/{{$ordi->id}}">
        @csrf
        <div class="form-group">
            <label for="nomVendeur">Nom du vendeur</label>
            <select class="form-control" name="nomVendeur" id="nomVendeur">
            @foreach($vente as $v)
                <option value="{{$v->id}}">{{$v->id}} - {{$v->name}}</option>
            @endforeach
            </select>
            <label for="prixVendeur">Prix</label>
            <input type="number" class="form-control" id="prixVendeur" name="prixVendeur">
            <label for="urlVendeur">Url</label>
            <input type="text" class="form-control" name="urlVendeur" id="urlVendeur">

            <input class="btn btn-success" type="submit" value="ajouter ce vendeur">
        </div>
        </form>


    </div>

@endsection


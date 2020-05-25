@extends('layouts.app')

@section('content')
    <div class="content compte">
       <h1>Ajouter un vendeur</h1>


        <form class="vendeur_form" method="POST" action="/addVendeur">
        @csrf
            <div class="form-group">
                <label for="nomVendeur">Nom du vendeur</label>
                <input type="text" class="form-control" name="nomVendeur" id="nomVendeur">

                <input class="btn btn-success" type="submit" value="ajouter ce vendeur">
            </div>
        </form>


    </div>

@endsection

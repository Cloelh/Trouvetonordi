@extends('layouts.app')

@section('content')
    <div class="content compte">
       <h1>Ajouter une marque</h1>


        <form class="marque_form" method="POST" action="/addMarque">
        @csrf
            <div class="form-group">
                <label for="nomMarque">Nom de la marque</label>
                <input type="text" class="form-control" name="nomMarque" id="nomMarque">

                <label for="urlMarque">Url de la marque</label>
                <input type="text" class="form-control" name="urlMarque" id="urlMarque">

                <input class="btn btn-success" type="submit" value="ajouter cette marque">
            </div>
        </form>


    </div>

@endsection

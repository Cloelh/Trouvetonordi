@extends('layouts.app')

@section('content')
    <div class="content ajoutOrdi">
        <h1>Modifier {{$ordi->name}}</h1>

        <p contenteditable="">{{$ordi->name}}</p>
        <form id="overviewform" action="POST" action="/modif/{{$ordi->id}}">
            @csrf
            <input type="hidden" name="overview"/>
            <input type="submit" value="modifier le nom" class="btn btn-success">
        </form>
        

        <form class="ordi_form" method="POST" action="/ajoutOrdi">
            @csrf
            <input type="text" class="form-control" placeholder="url de la photo" id="photo" name="photo">
            <input type="text" class="form-control" placeholder="name de l'ordi" id="name" name="name">
            <input type="text" class="form-control" placeholder="processeur" id="processeur" name="processeur">
            <input type="text" class="form-control" placeholder="taille de l'écran" id="taille" name="taille">
            <input type="text" class="form-control" placeholder="poids" id="poids" name="poids">
            <input type="text" class="form-control" placeholder="disque dur" id="disque" name="disque">
            <input type="text" class="form-control" placeholder="ssd" id="ssd" name="ssd">
            <input type="text" class="form-control" placeholder="carte graphique" id="graphique" name="graphique">
            <input type="text" class="form-control" placeholder="autonomie de la batterie" id="autonomie" name="autonomie">
            <input type="text" class="form-control" placeholder="ram/mémoire vive" id="ram" name="ram">
            <input type="text" class="form-control" placeholder="systeme d'exploitation" id="systeme" name="systeme">
            <input type="text" class="form-control" placeholder="dalle" id="dalle" name="dalle">
            <input type="text" class="form-control" placeholder="tactile" id="tactile" name="tactile">
            <input type="text" class="form-control" placeholder="resolution" id="resolution" name="resolution">
            <input type="text" class="form-control" placeholder="idMarque" id="idMarque" name="idMarque">
            <input type="text" class="form-control" placeholder="usba" id="usba" name="usba">
            <input type="text" class="form-control" placeholder="usbc" id="usbc" name="usbc">
            <input type="text" class="form-control" placeholder="jack" id="jack" name="jack">
            <input type="text" class="form-control" placeholder="hdmi" id="hdmi" name="hdmi">
            <input type="text" class="form-control" placeholder="sd" id="sd" name="sd">
            <input type="text" class="form-control" placeholder="microsd" id="microsd" name="microsd">

            <button type="submit" class="btn btn-primary">Enovyer</button> 
        </form>


    </div>

@endsection
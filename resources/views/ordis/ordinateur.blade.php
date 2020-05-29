@extends('layouts.app')

@section('content')
    <div class="content ordinateur">
        <small><a href="/ordinateur">Retour aux ordinateurs</a></small>

        <h1>{{$ordi->name}}</h1>
        <div class="presentation">
            <div class="ordinateur_presentation-img" style="--image-src: url({{$ordi->photo}})">
            </div>
            <div class="caracteristiquesImportantes">
                <ul class="ordisEmoji">
                    <li class="padEmoji">{{$ordi->marque->name}}</li>
                    <li class="padEmoji">{{$ordi->processeur}}</li>
                    <li class="padEmoji">{{$ordi->taille}} pouces</li>
                </ul>
            </div>
        </div>

        <div class="utilisations">
            <h3>Cette ordinateur est fait pour moi si : </h3>
            @foreach($ordi->utilisations as $u)
                <p>{{$u->description}}</p>
            @endforeach
        </div>


        <div class="gridCaracteristiques">

            <div class="name">Marque</div>
            <div class="valeur">{{$ordi->marque->name}}</div>
            <div class="name">Écran</div>
            <div class="valeur">
                <p>{{$ordi->taille}} pouces</p>
                <p>{{$ordi->resolution}}</p>
                <p>{{$ordi->dalle}}</p>
                <p>{{$ordi->tactile}}</p>
            </div>
            <div class="name">Processeur</div>
            <div class="valeur">{{$ordi->processeur}}</div>
            <div class="name">Système d'Exploitation</div>
            <div class="valeur">{{$ordi->systeme}}</div>
            <div class="name">Carte Graphique</div>
            <div class="valeur">{{$ordi->graphique}}</div>
            <div class="name">Autonomie</div>
            <div class="valeur">{{$ordi->autonomie}}</div>
            <div class="name">Poids</div>
            <div class="valeur">{{$ordi->poids}}</div>
            <div class="name">HDD/SATA</div>
            <div class="valeur">{{$ordi->disque}}</div>
            <div class="name">SSD</div>
            <div class="valeur">{{$ordi->ssd}}</div>
            <div class="name">RAM</div>
            <div class="valeur">{{$ordi->ram}}</div>
            <div class="name">Connectiques</div>
            <div class="valeur">
                <p>{{$ordi->usba}} {{$ordi->usba <= 1  ? "port" : "ports"}} USB A</p>
                <p>{{$ordi->usbc}} {{$ordi->usbc <= 1  ? "port" : "ports"}} USB type C</p>
                <p>{{$ordi->jack}} {{$ordi->jack <= 1  ? "port" : "ports"}} jack</p>
                <p>{{$ordi->hdmi}} {{$ordi->hdmi <= 1  ? "port" : "ports"}} HDMI</p>
                <p>{{$ordi->sd}} {{$ordi->sd <= 1  ? "port" : "ports"}} SD</p>
                <p>{{$ordi->microsd}} {{$ordi->microsd <= 1  ? "port" : "ports"}} Micro SD</p>
            </div>
        </div>

        <div class="hr"></div>
        <div class="vendeurs">
            @foreach($ordi->vendeurs as $v)
                <div class="unVendeur">
                    <a href="{{$v->pivot->url}}">{{$v->name}}</a>
                    : {{$v->pivot->prix}} euros
                </div>
            @endforeach
        </div>
    </div>

@endsection

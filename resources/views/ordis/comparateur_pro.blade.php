@extends('layouts.app')

@section('content')

    <h1>Comparateur Pro</h1>


<form method="POST">
    <div class="filtres">

        <div class="dropdown">
            <button id="processeur" class="btn">Processeur</button>
            <div class="oneFiltre" id="processeurs">
                @foreach($ordis as $o)
                    <div class="element">
                        <input type="checkbox" name="checkbox" id="{{$o->processeur}}"
                               value="{{$o->processeur}}">
                        <label for="{{$o->processeur}}">{{$o->processeur}}</label>
                    </div>
                @endforeach
                <button class="btn submit">Ajouter ces filtres</button>
            </div>
        </div>

        <div class="dropdown">
            <button id="taille" class="btn">Taille d'écran</button>
            <div class="oneFiltre" id="tailles">
                @foreach($ordis as $o)
                    <div class="element">
                        <input type="checkbox" name="checkbox" id="{{$o->taille}}"
                               value="{{$o->taille}}">
                        <label for="{{$o->taille}}">{{$o->taille}}</label>
                    </div>
                @endforeach
                <button class="btn submit">Ajouter ces filtres</button>
            </div>
        </div>

        <div class="dropdown">
            <button id="poids" class="btn">Poids</button>
            <div class="oneFiltre" id="poidss">
                @foreach($ordis as $o)
                    <div class="element">
                        <input type="checkbox" name="checkbox" id="{{$o->poids}}"
                               value="{{$o->poids}}">
                        <label for="{{$o->poids}}">{{$o->poids}}</label>
                    </div>
                @endforeach
                <button class="btn submit">Ajouter ces filtres</button>
            </div>
        </div>

        <div class="dropdown">
            <button id="disque" class="btn">Disque</button>
            <div class="oneFiltre" id="disques">
                @foreach($ordis as $o)
                    <div class="element">
                        <input type="checkbox" name="checkbox" id="{{$o->disque}}"
                               value="{{$o->disque}}">
                        <label for="{{$o->disque}}">{{$o->disque}}</label>
                    </div>
                @endforeach
                <button class="btn submit">Ajouter ces filtres</button>
            </div>
        </div>

        <div class="dropdown">
            <button id="ssd" class="btn">SSD</button>
            <div class="oneFiltre" id="ssds">
                @foreach($ordis as $o)
                    <div class="element">
                        <input type="checkbox" name="checkbox" id="{{$o->ssd}}"
                               value="{{$o->ssd}}">
                        <label for="{{$o->ssd}}">{{$o->ssd}}</label>
                    </div>
                @endforeach
                <button class="btn submit">Ajouter ces filtres</button>
            </div>
        </div>

        <div class="dropdown">
            <button id="graphique" class="btn">Carte Graphique</button>
            <div class="oneFiltre" id="graphiques">
                @foreach($ordis as $o)
                    <div class="element">
                        <input type="checkbox" name="checkbox" id="{{$o->graphique}}"
                               value="{{$o->graphique}}">
                        <label for="{{$o->graphique}}">{{$o->graphique}}</label>
                    </div>
                @endforeach
                <button class="btn submit">Ajouter ces filtres</button>
            </div>
        </div>

        <div class="dropdown">
            <button id="autonomie" class="btn">Autonomie</button>
            <div class="oneFiltre" id="autonomies">
                @foreach($ordis as $o)
                    <div class="element">
                        <input type="checkbox" name="checkbox" id="{{$o->autonomie}}"
                               value="{{$o->autonomie}}">
                        <label for="{{$o->autonomie}}">{{$o->autonomie}}</label>
                    </div>
                @endforeach
                <button class="btn submit">Ajouter ces filtres</button>
            </div>
        </div>

        <div class="dropdown">
            <button id="systeme" class="btn">Système d'Exploitation</button>
            <div class="oneFiltre" id="systemes">
                @foreach($ordis as $o)
                    <div class="element">
                        <input type="checkbox" name="checkbox" id="{{$o->systeme}}"
                               value="{{$o->systeme}}">
                        <label for="{{$o->systeme}}">{{$o->systeme}}</label>
                    </div>
                @endforeach
                <button class="btn submit">Ajouter ces filtres</button>
            </div>
        </div>

        <div class="dropdown">
            <button id="dalle" class="btn">Dalle</button>
            <div class="oneFiltre" id="dalles">
                @foreach($ordis as $o)
                    <div class="element">
                        <input type="checkbox" name="checkbox" id="{{$o->dalle}}"
                               value="{{$o->dalle}}">
                        <label for="{{$o->dalle}}">{{$o->dalle}}</label>
                    </div>
                @endforeach
                <button class="btn submit">Ajouter ces filtres</button>
            </div>
        </div>


        <div class="dropdown">
            <button id="tactile" class="btn">Tactile</button>
            <div class="oneFiltre" id="tactiles">
                @foreach($ordis as $o)
                    <div class="element">
                        <input type="checkbox" name="checkbox" id="{{$o->tactile}}"
                               value="{{$o->tactile}}">
                        <label for="{{$o->tactile}}">{{$o->tactile}}</label>
                    </div>
                @endforeach
                <button class="btn submit">Ajouter ces filtres</button>
            </div>
        </div>

        <div class="dropdown">
            <button id="resolution" class="btn">Résolution</button>
            <div class="oneFiltre" id="resolutions">
                @foreach($ordis as $o)
                    <div class="element">
                        <input type="checkbox" name="checkbox" id="{{$o->resolution}}"
                               value="{{$o->resolution}}">
                        <label for="{{$o->resolution}}">{{$o->resolution}}</label>
                    </div>
                @endforeach
                <button class="btn submit">Ajouter ces filtres</button>
            </div>
        </div>

        <div class="dropdown">
            <h3>No working with marque</h3>
            <button id="idMarque" class="btn">Marque</button>
           {{-- <div class="oneFiltre" id="idMarques">
                @foreach($ordis as $o)
                    <div class="element">
                        <input type="checkbox" name="checkbox" id="{{$o->marque->name}}"
                               value="{{$o->marque->name}}">
                        <label for="{{$o->marque->name}}">{{$o->marque->name}}</label>
                    </div>
                @endforeach
                <button class="btn submit">Ajouter ces filtres</button>
            </div>--}}
        </div>

        <div class="dropdown">
            <button id="usba" class="btn">USB A</button>
            <div class="oneFiltre" id="usbas">
                @foreach($ordis as $o)
                    <div class="element">
                        <input type="checkbox" name="checkbox" id="{{$o->usba}}"
                               value="{{$o->usba}}">
                        <label for="{{$o->usba}}">{{$o->usba}}</label>
                    </div>
                @endforeach
                <button class="btn submit">Ajouter ces filtres</button>
            </div>
        </div>

        <div class="dropdown">
            <button id="usbc" class="btn">USB C</button>
            <div class="oneFiltre" id="usbcs">
                @foreach($ordis as $o)
                    <div class="element">
                        <input type="checkbox" name="checkbox" id="{{$o->usbc}}"
                               value="{{$o->usbc}}">
                        <label for="{{$o->usbc}}">{{$o->usbc}}</label>
                    </div>
                @endforeach
                <button class="btn submit">Ajouter ces filtres</button>
            </div>
        </div>

        <div class="dropdown">
            <button id="jack" class="btn">Jack</button>
            <div class="oneFiltre" id="jacks">
                @foreach($ordis as $o)
                    <div class="element">
                        <input type="checkbox" name="checkbox" id="{{$o->jack}}"
                               value="{{$o->jack}}">
                        <label for="{{$o->jack}}">{{$o->jack}}</label>
                    </div>
                @endforeach
                <button class="btn submit">Ajouter ces filtres</button>
            </div>
        </div>

        <div class="dropdown">
            <button id="hdmi" class="btn">HDMI</button>
            <div class="oneFiltre" id="hdmis">
                @foreach($ordis as $o)
                    <div class="element">
                        <input type="checkbox" name="checkbox" id="{{$o->hdmi}}"
                               value="{{$o->hdmi}}">
                        <label for="{{$o->hdmi}}">{{$o->hdmi}}</label>
                    </div>
                @endforeach
                <button class="btn submit">Ajouter ces filtres</button>
            </div>
        </div>

        <div class="dropdown">
            <button id="sd" class="btn">Carte SD</button>
            <div class="oneFiltre" id="sds">
                @foreach($ordis as $o)
                    <div class="element">
                        <input type="checkbox" name="checkbox" id="{{$o->sd}}"
                               value="{{$o->sd}}">
                        <label for="{{$o->sd}}">{{$o->sd}}</label>
                    </div>
                @endforeach
                <button class="btn submit">Ajouter ces filtres</button>
            </div>
        </div>

        <div class="dropdown">
            <button id="microsd" class="btn">Carte Micro SD</button>
            <div class="oneFiltre" id="microsds">
                @foreach($ordis as $o)
                    <div class="element">
                        <input type="checkbox" name="checkbox" id="{{$o->microsd}}"
                               value="{{$o->microsd}}">
                        <label for="{{$o->microsd}}">{{$o->microsd}}</label>
                    </div>
                @endforeach
                <button class="btn submit">Ajouter ces filtres</button>
            </div>
        </div>

    </div>

    <input type="submit" class="btn" value="Rechercher"/>
</form>


@endsection


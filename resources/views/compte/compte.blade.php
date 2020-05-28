@extends('layouts.app')

@section('content')


    <div class="content compte">
        <h1>{{ Auth::user()->name }}</h1>

        <div class="logout">
            <a class="dropdown-item" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>

        </div>

        @if (Auth::user()->name == 'admin')

            <div class="addList">
                <a href='/ajoutOrdi/create'>Ajouter un ordi</a><br/><br/>
                <a href='/addVendeur/create'>Ajouter un vendeur</a><br/><br/>
                <a href='/addMarque/create'>Ajouter une marque</a><br/><br/>
            </div>
            <div class="changeOrdi">
                @foreach($ordis as $o)
                    <div class="unOrdiAdmin">
                        <div class="leftOrdiAdmin">
                            <h5>{{$o->name}}</h5>
                            <img src="{{$o->photo}}"/>
                        </div>
                        <div class="rightOrdiAdmin">
                            <a href="/addAchat/create/{{$o->id}}">Ajouter un site de vente pour cet ordinateur </a>
                            <a href="/modif/update/{{$o->id}}">Modifier l'ordinateur</a>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary btnSupp" data-toggle="modal"
                                    data-target="#suppression{{$o->id}}">
                                Suppression de l'ordinateur
                            </button>
                        </div>
                    </div>


                    <!-- Modal -->
                    <div class="modal fade" id="suppression{{$o->id}}" tabindex="-1" role="dialog"
                         aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Suppression</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    Confirmer la suppression de l'ordinateur {{$o->name}}
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler
                                    </button>
                                    <button type="button" class="btn btn-primary"><a style="color:white"
                                                                                     href="/suppression/{{$o->id}}">Supprimer</a>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="hr"></div>

                @endforeach
            </div>

        @endif


    </div>

@endsection


@extends('layouts.app')

@section('content')

    <h1>Comparateur Pro</h1>



    <div class="filtres">

        <button>Taille d'écran</button>
        <div class="oneFiltre">
            @foreach($ordis as $o)
                <input type="checkbox" name="checkbox" value="{{$o->taille}}">{{$o->taille}}
            @endforeach
        </div>

    </div>
    {{--

        @foreach($ordis as $o)
            <div>
                <form>
                    <input type="checkbox" name="checkbox" value="{{$o->disque}}">{{$o->disque}}
                </form>
            </div>
        @endforeach
    --}}

@endsection


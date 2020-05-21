@extends('layouts.app')

@section('content')
    <div class="content ordinateurs">
        <h1>Nos ordinateurs</h1>

        @foreach($ordis as $o)
			<a href="/ordinateur/{{$o->id}}" class="list-ordi-item">
				<div class="list-ordi-item-photo"><img src="{{$o->photo}}"></div>
				<div class="list-ordi-item-text">{{$o->name}}</div>
			</a>
		@endforeach	

    </div>

@endsection
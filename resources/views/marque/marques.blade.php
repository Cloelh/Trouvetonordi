@extends('layouts.app')

@section('content')
    <div class="content marques">
        <h1>Nos marques</h1>

        @foreach($marques as $m)
			<a href="/marque/{{$m->id}}" class="list-ordi-item">
				<div class="list-ordi-item-text">{{$m->name}}</div>
			</a>
		@endforeach	

    </div>

@endsection
@extends('layouts.app')

@section('content')

    <div class="content comparateur_fast">
        <h1>Trouve l'ordindateur fait pour toi</h1>
        
        <form action="/trouvefast" method="get" class="quiz">
            <label for="utilisation">Mon utilisation ?</label>
            <select name="utilisation" id="utilisation" name="utilisation">
                @foreach($utilisation as $u)
                    <option value="{{$u->id}}">{{$u->description}}</option>
                @endforeach
            </select>
            Mon budget ?
            <label for="budgetMin">Min</label>
            <input type="number" id="budgetMin" name="budgetMin">
            <label for="budgetMax">Min</label>
            <input type="number" id="budgetMax" name="budgetMax">

            <br/><br/>

            <input type="submit" value="chercher">
        </form>

    </div>


    
@endsection


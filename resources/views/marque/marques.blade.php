@extends('layouts.app')

@section('content')
    <h1>Nos marques</h1>

    <div class="content marques">

        {{--        @foreach($marques as $m)--}}
        {{--			<a href="/marque/{{$m->id}}" class="list-ordi-item">--}}
        {{--				<div class="list-ordi-item-text">{{$m->name}}</div>--}}
        {{--			</a>--}}
        {{--        @endforeach--}}


        <?php

        $alphabet = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S',
            'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];
        for ($i = 0; $i < 26; $i++) {
        echo '<h2>' . $alphabet[$i] . '</h2>';
        ?>
        <div id="marqueLetter">
            <?php
            foreach ($marques as $m) {
            $marque = $m->name;
            $letters = str_split($marque, 1);
            $first = $letters[0];
            $testLetter = $alphabet[$i];
            if ($first == $testLetter) {
            ?>
            <a href="/marque/<?=$m->id?>" class="list-ordi-item">
                <div class="list-ordi-item-text"><?=$marque?></div>
            </a>
            <?php
            }
            }
            ?>
        </div>

        <?php
        }







        //        $alphabet = ['Léa', 'Thelma'];
        //        var_dump($alphabet[1]);die;
        /*
                $marque = ['Acer', 'Apple', 'Beee'];
                $letters = str_split($marque[0], 1);
                var_dump($letters);
                $first = $letters[0];

        //        $alphabet = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l'];
                $alphabet = ['A', 'B'];
                for($i=0; $i<2; $i++){
                    echo $alphabet[$i];
                    $testLetter = $alphabet[$i];
                    if($first == $testLetter){
                        echo 'c la meme';
                    }else {
                        echo 'c pa sla meme';
                    }

                }

                $marque = 'Acer';
                $letters = str_split($marque, 1);
                $first = $letters[0];
                echo $first;
        */

        ?>
    </div>

@endsection

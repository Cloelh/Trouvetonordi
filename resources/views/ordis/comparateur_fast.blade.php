@extends('layouts.app')

@section('content')

    <div class="titleCompa">
    <h1>👨‍💻 Trouve l'ordindateur fait pour toi 👩‍💻</h1>

    </div>
    <div class="paragraphe">Clique sur l'utilisation qui te semble être celle à laquelle tu t'apparentes le plus !
        &#x1F447
    </div>
    <div class="content comparateur_fast">


        <div class="bothSidesOfCompa">
            <?php
            $nbr = 0;
            ?>
            <div class="rightSideTxt">
                @foreach($utilisation as $u)
                    <?php $nbr += 1?>
                    <div class="txtDesc">
                        <a href="/trouvefast/{{$u->id}}">{{$u->description}}</a>
                    </div>
                @endforeach
            </div>

            <div class="leftSideUL">
                <ul>
                    <?php

                    $emojis = ['1F4E7', '2615', '1F4F9', '1F3AE', '1F3B6'];
                    for($i = 0; $i < $nbr; $i++){
                    ?>
                    <li>&#x<?= $emojis[$i]?></li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
        </div>



        {{--  @foreach($utilisation as $u)
          <ul>
              <li></li>
          </ul>
          <div class="txtDesc">
              <a href="/trouvefast/{{$u->id}}">{{$u->description}}</a>
          </div>
      @endforeach--}}

    </div>






@endsection


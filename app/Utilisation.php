<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Utilisation extends Model
{
    public $table = 'utilisation';

    public function ordinateur() {
        return $this->belongsToMany('App\Ordinateur', 'utilisation_ordinateur',
         'id_utilisation', 'id_ordinateur');
    }
    public $timestamps = false;
}
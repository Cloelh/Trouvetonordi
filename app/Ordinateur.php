<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ordinateur extends Model
{
    public $table = 'ordinateur';

    public function vendeurs() {
        return $this->belongsToMany('App\Vendeurs', 'achats', 'id_ordinateur', 'id_vendeur') ->withPivot('prix', 'url');
    }

    public function marque() {
        return $this->hasOne('App\Marque', 'id', 'idMarque');
    }

    public $timestamps = false;
}
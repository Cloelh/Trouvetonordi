<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ordinateur;

// AJOUT DE LA DB ICI
use Illuminate\Support\Facades\DB;

class  OrdiController extends Controller
{

    public function displayall()
    {
        $ordis = DB::table('ordinateur')->get();
        return view('ordis.ordinateurs', ['ordis' => $ordis]);
    }

    public function displayone($id)
    {
        $ordi = Ordinateur::findOrFail($id);
        return view('ordis.ordinateur', ['ordi' => $ordi]);
    }

    public function comparateur_pro()
    {
//ajouter un distinct
        $ordis = DB::table('ordinateur')->get();
        return view("ordis.comparateur_pro", ["ordis" => $ordis]);
    }


    public function addFilters()
    {
        return 'ça fonctinone';

    }

}

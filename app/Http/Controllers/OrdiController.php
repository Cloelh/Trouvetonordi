<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ordinateur;
use App\Marque;

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
        $ordis = DB::table('ordinateur')->distinct()->get();
        return view("ordis.comparateur_pro", ["ordis" => $ordis]);
    }


    public function addFilters()
    {
        return 'ça fonctinone';

    }

    public function comparateur_fast(){
        $ordis = DB::table('ordinateur')->distinct()->get();
        return view("ordis.comparateur_fast", ["ordis" => $ordis]);
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ordinateur;
use App\Marque;
use App\Utilisation;
use App\Utilisation_ordinateur;

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
        $utilisation = DB::table('utilisation')->groupby('description')->distinct()->get();
        return view("ordis.comparateur_fast", ["ordis" => $ordis, "utilisation" => $utilisation]);
    }

    public function result_fast($id){
        $results = Utilisation::findOrFail($id);
        return view("ordis.resultats_fast", ["results" => $results]);
    }
}

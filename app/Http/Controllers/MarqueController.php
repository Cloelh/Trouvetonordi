<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Marque;
use App\Ordinateur;

// AJOUT DE LA DB ICI
use Illuminate\Support\Facades\DB;

class  MarqueController extends Controller
{

    public function displayall()
    {
//        $marques = Marque::all();
        $marques = Marque::orderBy('name')->get();
        return view("marque.marques", ["marques" => $marques]);
    }

    public function displayone($id)
    {
        $marque = Marque::findOrFail($id);
        $ordis_marque = Ordinateur::all()->where('idMarque', $id);
        return view("marque.marque", ["ordis_marque" => $ordis_marque, "marque" => $marque]);
    }



}

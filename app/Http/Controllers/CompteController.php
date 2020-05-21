<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Ordinateur;

// AJOUT DE LA DB ICI
use Illuminate\Support\Facades\DB;

class  CompteController extends Controller
{

    public function info()
    {
        return view("compte.compte");
    }

    public function ajoutOrdi(){
        return view('admin.ajoutOrdi');
    }

    public function store(Request $request){
        $ordinateur = new Ordinateur();

        $ordinateur->photo=$request->input('photo');
        $ordinateur->name=$request->input('name');
        $ordinateur->processeur=$request->input('processeur');
        $ordinateur->taille=$request->input('taille');
        $ordinateur->poids=$request->input('poids');
        $ordinateur->disque=$request->input('disque');
        $ordinateur->ssd=$request->input('ssd');
        $ordinateur->graphique=$request->input('graphique');
        $ordinateur->autonomie=$request->input('autonomie');
        $ordinateur->ram=$request->input('ram');
        $ordinateur->systeme=$request->input('systeme');
        $ordinateur->dalle=$request->input('dalle');
        $ordinateur->tactile=$request->input('tactile');
        $ordinateur->resolution=$request->input('resolution');
        $ordinateur->idMarque=$request->input('idMarque');
        $ordinateur->usba=$request->input('usba');
        $ordinateur->usbc=$request->input('usbc');
        $ordinateur->jack=$request->input('jack');
        $ordinateur->hdmi=$request->input('hdmi');
        $ordinateur->sd=$request->input('sd');
        $ordinateur->microsd=$request->input('microsd');

        $ordinateur->save();
        return view('compte.compte');
    }

    

}

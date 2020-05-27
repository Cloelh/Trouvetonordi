<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Ordinateur;
use App\Vendeurs;
use App\Achats;
use App\Marque;

// AJOUT DE LA DB ICI
use Illuminate\Support\Facades\DB;

class  CompteController extends Controller
{

    public function info()
    {
        $ordis = DB::table('ordinateur')->get();
        return view('compte.compte', ['ordis' => $ordis]);
    }

    public function ajoutOrdi(){
        $marques = DB::table('marque')->get();
        return view('admin.ajoutOrdi', ['marques' => $marques]);
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

    public function modifOrdi($id){
        $ordi = Ordinateur::findOrFail($id);
        return view('admin.modif', ['ordi' => $ordi]);
    }

    public function addAchat($id){
        $ordi = Ordinateur::findOrFail($id);
        $vente = DB::table('vendeurs')->get();
        return view('admin.addAchat', ['ordi' => $ordi, 'vente' => $vente]);
    }

    public function storeAchat($id, Request $request){
        $achat = new Achats();

        $achat->id_ordinateur=$id;
        $achat->id_vendeur=$request->input('nomVendeur');
        $achat->prix=$request->input('prixVendeur');
        $achat->url=$request->input('urlVendeur');

        $achat->save();
        return view('compte.compte');
    }

    public function addVendeur(){
        return view('admin.addVendeur');
    }

    public function storeVendeur(Request $request){
        $vendeur = new Vendeurs();

        $vendeur->name=$request->input('nomVendeur');

        $vendeur->save();
        return view('compte.compte');
    }

    public function addMarque(){
        return view('admin.addMarque');
    }

    public function storeMarque(Request $request){
        $marque = new Marque();
        
        $marque->name=$request->input('nomMarque');
        $marque->url=$request->input('urlMarque');

        $marque->save();
        return view('compte.compte');
    }

    public function suppOrdi($id){
        $ordi = Ordinateur::find($id);
        $ordi->delete();

        return view('compte.compte');
    }

}

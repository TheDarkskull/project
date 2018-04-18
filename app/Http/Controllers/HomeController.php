<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    
    //FORMULAIRE AJOUTER MUSIQUE
    public function ajouter_music()
    {
        return view('ajouter_music');
    }
    
    //Récupère les données du formulaire
    public function ajoutermamusic(Request $request)
    {
        $m = new Music();
        $m -> titre = $request -> input ('titre');
        $m -> son = $request -> input ('son');
        $m -> auteur = $request -> input ('auteur');
        $m -> duree = $request -> input ('duree');
        $m -> photo = $request -> input ('photo');
        //$m -> user_id = {{Auth::user}};
        
        $m-> save();
        return back();
    }
}

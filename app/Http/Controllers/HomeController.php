<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Music;


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
    public function createmusic(Request $request)
    {

         /* $request->validate([
            'photo' => 'file',
            'son' => 'file'
        ]);
        */
        $f = $request->file('photo')->store('photos/');
        $mu = $request->file('son')->store('son/');
        
        $m = new Music();
        $m -> titre = $request->input ('titre');
        $m -> son = "/storage/".$mu;
        $m -> auteur = $request->input ('auteur');
        $m -> duree = $request->input ('duree');
        $m -> photo = "/storage/".$f;
        $m -> user_id = Auth::id();
        
        $m-> save();
        //die(1);
        //return back();
        return redirect("/index/");
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;

class PageController extends Controller
{
    // Metodo per la homepage del sito
    public function home()
    {
        // Recupera tutti i record di fumetti dal database
        $comics = Comic::all();
        
        // Ritorna la vista 'home' e passa i dati dei fumetti alla vista usando la funzione compact
        return view('home', compact('comics'));
    }
}

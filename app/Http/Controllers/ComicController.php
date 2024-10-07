<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;
use App\Http\Requests\StoreComicRequest;
use App\Http\Requests\UpdateComicRequest;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Recupera tutti i fumetti dal database e li passa alla vista 'comics.index'
        $comics = Comic::all();
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Ritorna la vista per creare un nuovo fumetto
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreComicRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreComicRequest $request)
    {
        // I dati sono già validati in StoreComicRequest
        // Creo una nuova istanza della classe Comic e riempio i campi con i dati validati
        $comic = new Comic();
        $comic->fill($request->validated()); // Usa i dati già validati
        $comic->save(); // Salva l'istanza nel database
    
        // Effettuo un redirect alla pagina con l'elenco dei fumetti
        return redirect()->route('comics.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Recupera il fumetto con l'ID specificato dal database
        $comic = Comic::find($id);
        
        // Passa il fumetto alla vista 'comics.show' per la visualizzazione
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Recupera il fumetto con l'ID specificato dal database
        $comic = Comic::find($id);
        
        // Passa il fumetto alla vista 'comics.edit' per la visualizzazione
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateComicRequest  $request
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateComicRequest $request, Comic $comic)
    {
        // I dati sono già validati in UpdateComicRequest
        // Aggiorno il fumetto con i dati validati
        $comic->update($request->validated()); // Usa i dati già validati
    
        // Reindirizzo alla pagina del fumetto aggiornato
        return redirect()->route('comics.show', ['comic' => $comic->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        // Elimino il fumetto dal database
        $comic->delete();
    
        // Reindirizzo alla lista dei fumetti
        return redirect()->route('comics.index');
    }
}

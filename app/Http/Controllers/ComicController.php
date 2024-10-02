<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;

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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Recupero i dati inviati dalla form
        $form_data = $request->all();
    
        // Creo la nuova istanza della classe Comic
        $comic = new Comic();

        $comic->fill($form_data);

        // Valorizzo i suoi attributi
        // $comic->title = $form_data['title'];
        // $comic->description = $form_data['description'];
        // $comic->thumb = $form_data['thumb'];
        // $comic->price = $form_data['price'];
        // $comic->series = $form_data['series'];
        
        // Imposta una data di default se il campo sale_date è vuoto
        // $comic->sale_date = '2024-01-01';
    
        // $comic->type = $form_data['type'];
        // $comic->artists = $form_data['artists'];
        // $comic->writers = $form_data['writers'];
    
        // Salvo l'istanza del fumetto nel database
        $comic->save();
    
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
        
        // Passa il fumetto alla vista 'edit.show' per la visualizzazione
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        $form_data = $request->all();
        $comic->update($form_data);
    
        return redirect()->route('comics.show', ['comic' => $comic->id]);
    }    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
    
        return redirect()->route('comics.index');
    }    
}

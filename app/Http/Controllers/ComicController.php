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
        // Validazione dei dati inviati con messaggi personalizzati
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'description' => 'nullable', 
            'thumb' => 'nullable|url', 
            'price' => 'required|string', 
            'series' => 'required|max:255',
            'sale_date' => 'required|date',
            'type' => 'required|max:100',
            'artists' => 'nullable|max:255', 
            'writers' => 'nullable|max:255',
        ], [
            'title.required' => 'Il titolo è obbligatorio.',
            'title.max' => 'Il titolo non può superare i 255 caratteri.',
            'thumb.url' => "L'URL della miniatura non è valido.",
            'price.required' => 'Il prezzo è obbligatorio.',
            'series.required' => 'La serie è obbligatoria.',
            'series.max' => 'La serie non può superare i 255 caratteri.',
            'sale_date.required' => 'La data di vendita è obbligatoria.',
            'sale_date.date' => 'La data di vendita deve essere una data valida.',
            'type.required' => 'Il tipo è obbligatorio.',
            'type.max' => 'Il tipo non può superare i 100 caratteri.',
            'artists.max' => 'Gli artisti non possono superare i 255 caratteri.',
            'writers.max' => 'Gli scrittori non possono superare i 255 caratteri.',
        ]);

        // Creo la nuova istanza della classe Comic con i dati validati
        $comic = new Comic();
        $comic->fill($validatedData);
    
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
        
        // Passa il fumetto alla vista 'comics.edit' per la visualizzazione
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        // Validazione dei dati inviati con messaggi personalizzati
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'description' => 'nullable', 
            'thumb' => 'nullable|url', 
            'price' => 'required|string', 
            'series' => 'required|max:255',
            'sale_date' => 'required|date',
            'type' => 'required|max:100',
            'artists' => 'nullable|max:255', 
            'writers' => 'nullable|max:255',
        ], [
            'title.required' => 'Il titolo è obbligatorio.',
            'title.max' => 'Il titolo non può superare i 255 caratteri.',
            'thumb.url' => "L'URL della miniatura non è valido.",
            'price.required' => 'Il prezzo è obbligatorio.',
            'series.required' => 'La serie è obbligatoria.',
            'series.max' => 'La serie non può superare i 255 caratteri.',
            'sale_date.required' => 'La data di vendita è obbligatoria.',
            'sale_date.date' => 'La data di vendita deve essere una data valida.',
            'type.required' => 'Il tipo è obbligatorio.',
            'type.max' => 'Il tipo non può superare i 100 caratteri.',
            'artists.max' => 'Gli artisti non possono superare i 255 caratteri.',
            'writers.max' => 'Gli scrittori non possono superare i 255 caratteri.',
        ]);

        // Aggiorno il fumetto con i dati validati
        $comic->update($validatedData);
    
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

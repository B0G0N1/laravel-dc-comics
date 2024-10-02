@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <h1>Aggiungi un nuovo fumetto</h1>

        <!-- Form per aggiungere un nuovo fumetto -->
        <form action="{{ route('comics.store') }}" method="POST">
            <!-- Protezione CSRF per prevenire attacchi Cross-Site Request Forgery -->
            @csrf

            <!-- Campo per il titolo del fumetto -->
            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <!-- Il valore precedente viene mantenuto in caso di errore nel form (con la funzione old()) -->
                <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}" required>
            </div>

            <!-- Campo per la descrizione del fumetto -->
            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea class="form-control" id="description" name="description" rows="3" required>{{ old('description') }}</textarea>
            </div>

            <!-- Campo per l'URL della miniatura del fumetto -->
            <div class="mb-3">
                <label for="thumb" class="form-label">URL della miniatura</label>
                <!-- Input di tipo URL per garantire che l'utente inserisca un link valido -->
                <input type="url" class="form-control" id="thumb" name="thumb" value="{{ old('thumb') }}"
                    required>
            </div>

            <!-- Campo per il prezzo del fumetto -->
            <div class="mb-3">
                <label for="price" class="form-label">Prezzo</label>
                <!-- Input di tipo numero con step di 0.01 per i prezzi decimali -->
                <input type="number" step="0.01" class="form-control" id="price" name="price"
                    value="{{ old('price') }}" required>
            </div>

            <!-- Campo per la serie del fumetto -->
            <div class="mb-3">
                <label for="series" class="form-label">Serie</label>
                <input type="text" class="form-control" id="series" name="series" value="{{ old('series') }}"
                    required>
            </div>

            <!-- Campo per la data di vendita del fumetto -->
            <div class="mb-3">
                <label for="sale_date" class="form-label">Data di Vendita</label>
                <!-- Input di tipo date per selezionare la data -->
                <input type="date" class="form-control" id="sale_date" name="sale_date" value="{{ old('sale_date') }}"
                    required>
            </div>

            <!-- Campo per il tipo del fumetto (ad esempio graphic novel, comic book, ecc.) -->
            <div class="mb-3">
                <label for="type" class="form-label">Tipo</label>
                <input type="text" class="form-control" id="type" name="type" value="{{ old('type') }}"
                    required>
            </div>

            <!-- Campo per gli artisti del fumetto -->
            <div class="mb-3">
                <label for="artists" class="form-label">Artisti</label>
                <input type="text" class="form-control" id="artists" name="artists" value="{{ old('artists') }}"
                    required>
            </div>

            <!-- Campo per gli scrittori del fumetto -->
            <div class="mb-3">
                <label for="writers" class="form-label">Scrittori</label>
                <input type="text" class="form-control" id="writers" name="writers" value="{{ old('writers') }}"
                    required>
            </div>

            <!-- Pulsante per inviare il form e aggiungere il fumetto -->
            <button type="submit" class="btn btn-primary">Aggiungi Fumetto</button>
        </form>
    </div>
@endsection

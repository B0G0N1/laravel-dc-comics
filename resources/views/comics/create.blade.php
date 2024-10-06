@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <h1>Aggiungi un nuovo fumetto</h1>

        <!-- Form per aggiungere un nuovo fumetto -->
        <form action="{{ route('comics.store') }}" method="POST">
            @csrf

            <!-- Campo per il titolo del fumetto -->
            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title"
                    value="{{ old('title') }}" required>
                @error('title')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Campo per la descrizione del fumetto -->
            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description"
                    rows="3" required>{{ old('description') }}</textarea>
                @error('description')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Campo per l'URL della miniatura del fumetto -->
            <div class="mb-3">
                <label for="thumb" class="form-label">URL della miniatura</label>
                <input type="url" class="form-control @error('thumb') is-invalid @enderror" id="thumb"
                    name="thumb" value="{{ old('thumb') }}" required>
                @error('thumb')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Campo per il prezzo del fumetto -->
            <div class="mb-3">
                <label for="price" class="form-label">Prezzo</label>
                <input type="number" step="0.01" class="form-control @error('price') is-invalid @enderror"
                    id="price" name="price" value="{{ old('price') }}" required>
                @error('price')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Campo per la serie del fumetto -->
            <div class="mb-3">
                <label for="series" class="form-label">Serie</label>
                <input type="text" class="form-control @error('series') is-invalid @enderror" id="series"
                    name="series" value="{{ old('series') }}" required>
                @error('series')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Campo per la data di vendita del fumetto -->
            <div class="mb-3">
                <label for="sale_date" class="form-label">Data di Vendita</label>
                <input type="date" class="form-control @error('sale_date') is-invalid @enderror" id="sale_date"
                    name="sale_date" value="{{ old('sale_date') }}" required>
                @error('sale_date')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Campo per il tipo del fumetto -->
            <div class="mb-3">
                <label for="type" class="form-label">Tipo</label>
                <input type="text" class="form-control @error('type') is-invalid @enderror" id="type" name="type"
                    value="{{ old('type') }}" required>
                @error('type')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Campo per gli artisti del fumetto -->
            <div class="mb-3">
                <label for="artists" class="form-label">Artisti</label>
                <input type="text" class="form-control @error('artists') is-invalid @enderror" id="artists"
                    name="artists" value="{{ old('artists') }}">
                @error('artists')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Campo per gli scrittori del fumetto -->
            <div class="mb-3">
                <label for="writers" class="form-label">Scrittori</label>
                <input type="text" class="form-control @error('writers') is-invalid @enderror" id="writers"
                    name="writers" value="{{ old('writers') }}">
                @error('writers')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Pulsante per inviare il form e aggiungere il fumetto -->
            <button type="submit" class="btn btn-primary">Aggiungi Fumetto</button>
        </form>
    </div>
@endsection

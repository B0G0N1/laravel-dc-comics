@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <h1>Aggiungi un nuovo fumetto</h1>

        <!-- Form per aggiungere un fumetto -->
        <form action="{{ route('comics.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}" required>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea class="form-control" id="description" name="description" rows="3" required>{{ old('description') }}</textarea>
            </div>

            <div class="mb-3">
                <label for="thumb" class="form-label">URL della miniatura</label>
                <input type="url" class="form-control" id="thumb" name="thumb" value="{{ old('thumb') }}"
                    required>
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Prezzo</label>
                <input type="number" step="0.01" class="form-control" id="price" name="price"
                    value="{{ old('price') }}" required>
            </div>

            <div class="mb-3">
                <label for="series" class="form-label">Serie</label>
                <input type="text" class="form-control" id="series" name="series" value="{{ old('series') }}"
                    required>
            </div>

            <div class="mb-3">
                <label for="sale_date" class="form-label">Data di Vendita</label>
                <input type="date" class="form-control" id="sale_date" name="sale_date" value="{{ old('sale_date') }}"
                    required>
            </div>

            <div class="mb-3">
                <label for="type" class="form-label">Tipo</label>
                <input type="text" class="form-control" id="type" name="type" value="{{ old('type') }}"
                    required>
            </div>

            <div class="mb-3">
                <label for="artists" class="form-label">Artisti</label>
                <input type="text" class="form-control" id="artists" name="artists" value="{{ old('artists') }}"
                    required>
            </div>

            <div class="mb-3">
                <label for="writers" class="form-label">Scrittori</label>
                <input type="text" class="form-control" id="writers" name="writers" value="{{ old('writers') }}"
                    required>
            </div>

            <button type="submit" class="btn btn-primary">Aggiungi Fumetto</button>
        </form>
    </div>
@endsection

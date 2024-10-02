@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <div class="row">
            <!-- Colonna sinistra per la miniatura del fumetto -->
            <div class="col-md-4">
                <!-- Visualizzazione dell'immagine (miniatura) del fumetto -->
                <img src="{{ $comic->thumb }}" class="img-fluid" alt="{{ $comic->title }}">
            </div>

            <!-- Colonna destra per i dettagli del fumetto -->
            <div class="col-md-8">
                <!-- Titolo del fumetto -->
                <h1>{{ $comic->title }}</h1>
                <!-- Serie del fumetto -->
                <h3 class="text-muted">{{ $comic->series }}</h3>
                <!-- Descrizione del fumetto -->
                <p>{{ $comic->description }}</p>

                <!-- Dettagli aggiuntivi in una lista strutturata -->
                <ul class="list-group mb-4">
                    <!-- Prezzo del fumetto -->
                    <li class="list-group-item"><strong>Prezzo:</strong> {{ $comic->price }}</li>
                    <!-- Data di vendita formattata -->
                    <li class="list-group-item"><strong>Data di Vendita:</strong>
                        {{-- Usa Carbon per formattare la data --}}
                        {{ \Carbon\Carbon::parse($comic->sale_date)->format('d/m/Y') }}
                    </li>
                    <!-- Tipo di fumetto (es. Graphic Novel, Comic Book) -->
                    <li class="list-group-item"><strong>Tipo:</strong> {{ $comic->type }}</li>
                    <!-- Artisti del fumetto -->
                    <li class="list-group-item"><strong>Artisti:</strong> {{ $comic->artists }}</li>
                    <!-- Scrittori del fumetto -->
                    <li class="list-group-item"><strong>Scrittori:</strong> {{ $comic->writers }}</li>
                </ul>

                <div class="d-flex gap-2">
                    <!-- Pulsante per modificare fumetto -->
                    <a href="{{ route('comics.edit', ['comic' => $comic->id]) }}" class="btn btn-primary">Modifica</a>
                    <!-- Pulsante per eliminare fumetto -->
                    <form action="{{ route('comics.destroy', ['comic' => $comic->id]) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Cancella</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

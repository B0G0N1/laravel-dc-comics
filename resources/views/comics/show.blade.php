@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-md-4">
                <!-- Miniatura del fumetto -->
                <img src="{{ $comic->thumb }}" class="img-fluid" alt="{{ $comic->title }}">
            </div>
            <div class="col-md-8">
                <h1>{{ $comic->title }}</h1>
                <h3 class="text-muted">{{ $comic->series }}</h3>
                <p>{{ $comic->description }}</p>

                <!-- Dettagli aggiuntivi -->
                <ul class="list-group mb-4">
                    <li class="list-group-item"><strong>Prezzo:</strong> {{ $comic->price }}</li>
                    <li class="list-group-item"><strong>Data di Vendita:</strong>
                        {{ \Carbon\Carbon::parse($comic->sale_date)->format('d/m/Y') }}</li>
                    <li class="list-group-item"><strong>Tipo:</strong> {{ $comic->type }}</li>
                    <li class="list-group-item"><strong>Artisti:</strong> {{ $comic->artists }}</li>
                    <li class="list-group-item"><strong>Scrittori:</strong> {{ $comic->writers }}</li>
                </ul>

                <!-- Pulsante per tornare indietro -->
                <a href="{{ route('comics.index') }}" class="btn btn-primary">Torna alla lista</a>
            </div>
        </div>
    </div>
@endsection

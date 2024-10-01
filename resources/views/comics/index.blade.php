@extends('layouts.app')

@section('content')
    <div id="comics-container" class="py-5">
        <div class="container">
            <!-- Titolo della sezione -->
            <div class="row mb-4">
                <div class="col-12">
                    <h2 class="fw-bold">CURRENT SERIES</h2>
                </div>
            </div>

            <!-- Griglia dei fumetti -->
            <div class="row">
                @foreach ($comics as $comic)
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                        <div class="card h-100">
                            <!-- Miniatura del fumetto -->
                            <img src="{{ $comic['thumb'] }}" class="card-img-top" alt="{{ $comic['series'] }}"
                                style="height: 300px; object-fit: cover;">

                            <div class="card-body d-flex flex-column">
                                <!-- Titolo della serie -->
                                <h5 class="card-title">{{ $comic['series'] }}</h5>
                                <!-- Titolo del fumetto -->
                                <h6 class="card-subtitle mb-2 text-muted">{{ $comic['title'] }}</h6>
                                <!-- Descrizione (troncata) -->
                                <p class="card-text">
                                    {{ Str::limit($comic['description'], 100, '...') }}
                                </p>
                                <!-- Dettagli aggiuntivi -->
                                <ul class="list-group list-group-flush mt-auto">
                                    <li class="list-group-item"><strong>Prezzo:</strong> {{ $comic['price'] }}</li>
                                    <li class="list-group-item"><strong>Data di Vendita:</strong>
                                        {{ \Carbon\Carbon::parse($comic['sale_date'])->format('d/m/Y') }}</li>
                                    <li class="list-group-item"><strong>Tipo:</strong> {{ $comic['type'] }}</li>
                                </ul>
                            </div>
                            <!-- Pulsante per maggiori dettagli (opzionale) -->
                            <div class="card-footer bg-transparent border-0">
                                <a href="#" class="btn btn-primary w-100">Scopri di più</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Pulsante "Load More" -->
            <div class="row mt-4">
                <div class="col-12 text-center">
                    <button class="btn btn-outline-primary">LOAD MORE</button>
                </div>
            </div>
        </div>
    </div>
@endsection

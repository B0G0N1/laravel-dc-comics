@extends('layouts.app')

@section('content')
    <div id="comics-container" class="py-5">
        <div class="container">
            <div class="row mb-5">
                <!-- Titolo della sezione che mostra le serie correnti -->
                <div class="col-10">
                    <h2 class="fw-bold">CURRENT SERIES</h2>
                </div>
                <!-- Pulsante per aggiungere un nuovo fumetto -->
                <div class="col-2">
                    <a href="{{ route('comics.create') }}" class="btn btn-primary w-100">Aggiungi prodotto</a>
                </div>
            </div>

            <!-- Griglia per visualizzare i fumetti -->
            <div class="row">
                <!-- Ciclo attraverso i fumetti presenti nella variabile $comics -->
                @foreach ($comics as $comic)
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                        <div class="card h-100">
                            <!-- Visualizzazione dell'immagine del fumetto (miniatura) -->
                            <img src="{{ $comic['thumb'] }}" class="card-img-top" alt="{{ $comic['series'] }}"
                                style="height: 300px; object-fit: cover;">

                            <!-- Corpo della card con informazioni sul fumetto -->
                            <div class="card-body d-flex flex-column">
                                <!-- Titolo della serie -->
                                <h5 class="card-title">{{ $comic['series'] }}</h5>
                                <!-- Titolo del fumetto -->
                                <h6 class="card-subtitle mb-2 text-muted">{{ $comic['title'] }}</h6>
                                <!-- Descrizione troncata del fumetto per evitare testi troppo lunghi -->
                                <p class="card-text">
                                    {{-- Metodo Laravel per troncare la descrizione dopo 100 caratteri --}}
                                    {{ Str::limit($comic['description'], 100, '...') }}
                                </p>
                                <!-- Lista di dettagli aggiuntivi sul fumetto -->
                                <ul class="list-group list-group-flush mt-auto">
                                    <!-- Prezzo del fumetto -->
                                    <li class="list-group-item"><strong>Prezzo:</strong> {{ $comic['price'] }}</li>
                                    <!-- Data di vendita formattata -->
                                    <li class="list-group-item"><strong>Data di Vendita:</strong>
                                        {{-- Metodo Laravel per formattare la data usando Carbon --}}
                                        {{ \Carbon\Carbon::parse($comic['sale_date'])->format('d/m/Y') }}</li>
                                    <!-- Tipo del fumetto (es. Graphic novel, Comic Book, ecc.) -->
                                    <li class="list-group-item"><strong>Tipo:</strong> {{ $comic['type'] }}</li>
                                </ul>
                            </div>
                            <!-- Footer della card con il pulsante per i dettagli del fumetto -->
                            <div class="card-footer bg-transparent border-0">
                                <a href="{{ route('comics.show', ['comic' => $comic['id']]) }}"
                                    class="btn btn-primary w-100">Scopri di più</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Pulsante "Load More" per caricare altri fumetti (funzionalità da implementare) -->
            <div class="row mt-4">
                <div class="col-12 text-center">
                    <button class="btn btn-outline-primary">LOAD MORE</button>
                </div>
            </div>
        </div>
    </div>
@endsection

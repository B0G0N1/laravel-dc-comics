@extends('layouts.app')

@section('content')
    <!-- Sezione Jumbotron -->
    <div id="jumbotron">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- Contenuto del jumbotron (attualmente vuoto) -->
                </div>
            </div>
        </div>
    </div>

    <!-- Sezione contenitore dei fumetti -->
    <div id="comics-container">
        <div class="container">
            <!-- Titolo della sezione -->
            <div class="row title px-4 py-2">
                <p class="fw-bold mb-0">CURRENT SERIES</p>
            </div>

            <!-- Griglia dei fumetti -->
            <div class="row">
                <!-- Ciclo sui fumetti -->
                @foreach ($comics as $comic)
                    <div class="col-12 col-md-3 col-lg-2">
                        <div class="comic-card border-0 m-1">
                            <!-- Miniatura del fumetto -->
                            <div class="thumb">
                                <img class="img-fluid" src="{{ $comic['thumb'] }}" alt="{{ $comic['series'] }}">
                            </div>
                            <!-- Titolo della serie del fumetto -->
                            <div class="card-body">
                                <span class="text-uppercase">{{ $comic['series'] }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Pulsante "Load More" -->
            <div class="row load-more px-4 py-2">
                <p class="fw-bold mb-0">LOAD MORE</p>
            </div>
        </div>
    </div>

    <!-- Sezione pubblicità -->
    <div id="adv">
        <div class="container white py-5">
            <div class="row">
                <!-- Ogni colonna rappresenta un'opzione di pubblicità -->
                <div class="col">
                    <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" alt="DC Comics">
                    <span class="ms-2">DIGITAL COMICS</span>
                </div>
                <div class="col">
                    <img src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}" alt="DC Merchandise">
                    <span class="ms-2">DC MERCHANDISE</span>
                </div>
                <div class="col">
                    <img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}" alt="DC Subscription">
                    <span class="ms-2">SUBSCRIPTION</span>
                </div>
                <div class="col">
                    <img src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}" alt="DC Shop">
                    <span class="ms-2">SHOP LOCATOR</span>
                </div>
                <div class="col">
                    <img src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg') }}" alt="DC Visa">
                    <span class="ms-2">DC POWER VISA</span>
                </div>
            </div>
        </div>
    </div>
@endsection

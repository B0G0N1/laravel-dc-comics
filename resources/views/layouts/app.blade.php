<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Comics</title>

    <!-- Inclusione del file JS compilato tramite Vite -->
    @vite('resources/js/app.js')
</head>

<body>
    <!-- Inclusione dell'header -->
    @include('partials.header')

    <!-- Sezione principale, con contenuto variabile -->
    <main>
        @yield('content')
    </main>

    <!-- Inclusione del footer -->
    @include('partials.footer')
</body>

</html>

<header>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-center">
                    <!-- Logo DC Comics -->
                    <div class="logo">
                        <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="DC Comics">
                    </div>
                    <!-- Menu di navigazione -->
                    <div class="menu">
                        <ul class="list-unstyled d-flex m-0">
                            <li class="nav-item px-3 py-5">
                                <a class="nav-link" href="#">Characters</a>
                            </li>
                            <li
                                class="nav-item px-3 py-5 {{ Route::currentRouteName() === 'homepage' ? 'active' : '' }}">
                                <a class="nav-link" href="#">Comics</a>
                            </li>
                            <li class="nav-item px-3 py-5">
                                <a class="nav-link" href="#">Movies</a>
                            </li>
                            <li class="nav-item px-3 py-5">
                                <a class="nav-link" href="#">TV</a>
                            </li>
                            <li class="nav-item px-3 py-5">
                                <a class="nav-link" href="#">Games</a>
                            </li>
                            <li class="nav-item px-3 py-5">
                                <a class="nav-link" href="#">Collectibles</a>
                            </li>
                            <li class="nav-item px-3 py-5">
                                <a class="nav-link" href="#">Videos</a>
                            </li>
                            <li class="nav-item px-3 py-5">
                                <a class="nav-link" href="#">Fans</a>
                            </li>
                            <li class="nav-item px-3 py-5">
                                <a class="nav-link" href="#">News</a>
                            </li>
                            <li class="nav-item px-3 py-5">
                                <a class="nav-link" href="#">Shop</a>
                            </li>
                        </ul>
                    </div>
                    <!-- Barra di ricerca -->
                    <div class="search">
                        <input type="text" placeholder="Search &#128269;">
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<nav class="navbar navbar-expand-lg bg-white border-bottom sticky-top">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}"><img src="{{ asset('assets/images/logo.svg') }}" alt="Benang Asa" height="40"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
            <span class="navbar-toggler-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Buka navigasi</span>
        </button>
        <div class="collapse navbar-collapse" id="menu">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('home') ? 'active fw-bold' : '' }}" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('products.*') ? 'active fw-bold' : '' }}" href="{{ route('products.index') }}">Produk</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('about') ? 'active fw-bold' : '' }}" href="{{ route('about') }}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('contact') ? 'active fw-bold' : '' }}" href="{{ route('contact') }}">Contact Us</a>
                </li>
            </ul>
        </div>
        <div class="d-flex align-items-center gap-3 ms-3">
            <a class="text-dark" href="#" aria-label="Cari" title="Cari">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M11 2a9 9 0 1 0 5.656 16.006l4.17 4.17a1 1 0 0 0 1.414-1.414l-4.17-4.17A9 9 0 0 0 11 2m0 2a7 7 0 1 1 0 14 7 7 0 0 1 0-14"/></svg>
            </a>
            <a class="text-dark" href="#" aria-label="Masuk" title="Masuk">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M12 2a5 5 0 1 0 0 10 5 5 0 0 0 0-10m0 12c-4.418 0-8 2.239-8 5v3h16v-3c0-2.761-3.582-5-8-5"/></svg>
            </a>
            <a class="text-dark position-relative" href="#" aria-label="Keranjang" title="Keranjang">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M1 2a1 1 0 0 1 1-1h1.2a1 1 0 0 1 .97.757L4.7 4H22a1 1 0 0 1 .976 1.217l-2 9A1 1 0 0 1 20 15H6.2l.48 2H19a1 1 0 1 1 0 2H5.9a1 1 0 0 1-.973-.757L2.42 3H2a1 1 0 0 1-1-1m5.2 11h13l1.56-7H5.38zM8 20a2 2 0 1 0 0 4 2 2 0 0 0 0-4m10 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4"/></svg>
                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">0</span>
            </a>
        </div>
    </div>
</nav>
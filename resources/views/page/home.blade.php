@extends('layouts.app')

@section('title', 'Home')

@section('content')
@php
$heroes = [
['image' => asset('assets/images/hero.jpg'), 'eyebrow' => 'Gaya untuk bergerak', 'title' => 'Pakai caramu.', 'copy' => 'Pilihan kasual yang nyaman menemani hari dari pagi sampai malam.'],
['image' => asset('assets/images/hero-2.jpg'), 'eyebrow' => 'Koleksi pilihan', 'title' => 'Ruang untuk jadi diri sendiri.', 'copy' => 'Potongan sederhana, detail yang terasa, dan mudah dipadukan.'],
['image' => asset('assets/images/hero-3.jpg'), 'eyebrow' => 'Temukan andalanmu', 'title' => 'Kasual, tanpa kompromi.', 'copy' => 'Kenakan bahan nyaman dengan siluet yang pas untuk keseharian.'],
['image' => asset('assets/images/hero-4.jpg'), 'eyebrow' => 'Pilihan terbaru', 'title' => 'Mulai dari yang paling kamu suka.', 'copy' => 'Lihat koleksi terbaru dan temukan paduan gayamu sendiri.'],
];
@endphp

<section class="container-fluid px-0" aria-label="Koleksi unggulan">
    <div id="homeHero" class="carousel slide" data-bs-ride="carousel" data-bs-interval="4500" data-bs-pause="hover">
        <div class="carousel-indicators">
            @foreach ($heroes as $index => $hero)
            <button type="button" data-bs-target="#homeHero" data-bs-slide-to="{{ $index }}" class="{{ $index === 0 ? 'active' : '' }}" @if ($index===0) aria-current="true" @endif aria-label="Slide {{ $index + 1 }}"></button>
            @endforeach
        </div>
        <div class="carousel-inner">
            @foreach ($heroes as $index => $hero)
            <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                <div class="ratio ratio-21x9">@if ($hero['image'])<img class="hero-image w-100 h-100" src="{{ $hero['image'] }}" alt="Suasana koleksi fashion kasual">@endif</div>
                <div class="carousel-caption text-start bottom-0 start-0 end-0 p-3 p-md-5 bg-dark bg-opacity-50">
                    <p class="text-uppercase small fw-semibold mb-2">{{ $hero['eyebrow'] }}</p>
                    <h1 class="display-5 fw-bold">{{ $hero['title'] }}</h1>
                    <p class="d-none d-md-block">{{ $hero['copy'] }}</p>
                    <a class="btn btn-light" href="{{ route('products.index') }}">Belanja Sekarang</a>
                </div>
            </div>
            @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#homeHero" data-bs-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="visually-hidden">Sebelumnya</span></button>
        <button class="carousel-control-next" type="button" data-bs-target="#homeHero" data-bs-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="visually-hidden">Berikutnya</span></button>
    </div>
</section>

<section class="container py-4 py-lg-5" aria-label="Promo toko">
    <div class="row g-3">
        @foreach ([['Gratis Ongkir', 'Nikmati pengiriman gratis untuk pilihan produk tertentu.', asset('assets/images/hero-4.jpg')], ['Koleksi Baru', 'Kenalan dengan warna dan potongan yang baru hadir.', asset('assets/images/promo-koleksi.jpg')], ['Ambil di Toko', 'Pesan pilihanmu dan ambil dengan praktis.', asset('assets/images/banner.jpg')]] as $promo)
        <div class="col-md-4">
            <div class="card h-100 border-0 rounded-0">
                <div class="ratio ratio-4x3">@if ($promo[2])<img class="promo-image w-100 h-100" src="{{ $promo[2] }}" alt="Ilustrasi {{ $promo[0] }}">@endif</div>
                <div class="card-body px-0">
                    <h2 class="h5">{{ $promo[0] }}</h2>
                    <p class="text-secondary mb-3">{{ $promo[1] }}</p><a class="btn btn-outline-dark btn-sm" href="{{ route('products.index') }}">Jelajahi</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>

<section class="bg-dark text-white py-3">
    <div class="container d-flex flex-wrap align-items-center justify-content-center justify-content-md-between gap-2">
        <span class="small fw-semibold">Ikuti Kita Wok</span>
        <div class="d-flex gap-2"><a class="btn btn-outline-light btn-sm" href="#">IG</a><a class="btn btn-outline-light btn-sm" href="#">TikTok</a><a class="btn btn-outline-light btn-sm" href="#">YouTube</a></div>
    </div>
</section>

<section class="container py-5">
    <div class="row justify-content-center text-center">
        <div class="col-lg-8">
            <p class="text-uppercase small fw-semibold text-secondary mb-2">Dibuat untuk keseharian</p>
            <h2 class="display-6 fw-bold">Hai,Kami Benang Asa</h2>
            <p class="lead text-secondary mb-0">Kata ilmuwan (kami nggak tahu ilmuwan yang mana), baju yang baik harus nyaman dari pertama dipakai. Kami setuju, wok.
                Temukan pilihan kasual yang gampang jadi andalan, karena milih baju pagi-pagi itu bukan olimpiade.
                Singkat saja wok beli baju ditoko benang asa yawh wkwkwkwwkkw(gw mager ngetik panjang lebar deskripsi ini wailah)</p>
        </div>
    </div>
</section>

<section class="container pb-4" aria-label="Kategori produk">
    <div class="d-flex flex-wrap justify-content-center gap-2">
        @foreach ($categories as $cat)
        <a class="btn btn-outline-dark" href="{{ route('products.index', ['category' => [$cat]]) }}">{{ $cat }}</a>
        @endforeach
    </div>
</section>

<section class="container py-4 py-lg-5">
    <div class="d-flex justify-content-between align-items-end mb-3">
        <div>
            <p class="text-uppercase small fw-semibold text-secondary mb-1">Baru untukmu</p>
            <h2 class="h3 fw-bold mb-0">Terbaru di Benang Asa</h2>
        </div><a class="link-dark d-none d-sm-inline" href="{{ route('products.index') }}">Semua produk</a>
    </div>
    <div class="d-flex overflow-x-auto gap-3 pb-3">
        @foreach ($featured as $item)
        <a class="card home-product-card flex-shrink-0 border-0 text-decoration-none text-dark" href="{{ route('products.show', $item->id) }}">
            <div class="ratio ratio-3x4 bg-light"><img class="w-100 h-100 object-fit-cover" src="{{ asset('assets/images/' . $item->image) }}" alt="{{ $item->name }}" onerror="this.onerror=null;this.src='https://placehold.co/600x800?text=Produk'"></div>
            <div class="card-body px-0"><span class="badge text-bg-light border mb-2">{{ $item->category }}</span>
                <h3 class="h6 text-truncate">{{ $item->name }}</h3>
                <p class="fw-semibold mb-0">Rp {{ number_format($item->price, 0, ',', '.') }}</p>
            </div>
        </a>
        @endforeach
    </div>
    <div class="text-center pt-3"><a class="btn btn-dark px-4" href="{{ route('products.index') }}">Lihat Lainnya</a></div>
</section>
@endsection
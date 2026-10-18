@extends('layouts.app')

@section('title', $product->name)

@section('content')
<section class="container py-4 py-lg-5">
    <a class="btn btn-outline-dark btn-sm mb-4" href="{{ route('products.index') }}">Kembali ke Produk</a>
    <div class="row g-4 align-items-start">
        <div class="col-md-5">
            <div class="ratio ratio-3x4 bg-light"><img class="w-100 h-100 object-fit-cover" src="{{ asset('assets/images/' . $product->image) }}" alt="{{ $product->name }}" onerror="this.onerror=null;this.src='https://placehold.co/600x800?text=Produk'"></div>
        </div>
        <div class="col-md-7 py-md-3">
            <span class="badge text-bg-light border mb-3">{{ $product->category }}</span>
            <h1 class="display-6 fw-bold">{{ $product->name }}</h1>
            <p class="h4 fw-semibold">Rp {{ number_format($product->price, 0, ',', '.') }}</p>
            <hr class="my-4">
            <h2 class="h6 text-uppercase">Deskripsi</h2>
            <p class="text-secondary">{{ $product->description }}</p>
            <p class="text-secondary">Silahkan Kunjungi Toko Kami Di blablabla atau Checkout Lewat Toko Online, Link Maps dan toko online dibawah
            <strong>(maaf wok masukan keranjang cuma pajangan hehehehehe.)</strong>
            </p>
            <p class="btn btn-dark mt-3" href="{{ route('products.index') }}">Maps</p>
            <p class="btn btn-dark mt-3" href="{{ route('products.index') }}">TikTok</p>
            <p class="btn btn-dark mt-3" href="{{ route('products.index') }}">Tokopedia</p>
        </div>
    </div>
</section>
@endsection

@extends('layouts.app')

@section('title', 'Produk')

@section('content')
<section class="container py-4 py-lg-5">
    <div class="mb-4">
        <p class="text-uppercase small fw-semibold text-secondary mb-1">Koleksi Benang Asa</p>
        <h1 class="display-6 fw-bold mb-0">Produk pilihan</h1>
    </div>
    <div class="row g-4">
        <aside class="col-lg-3">
            <form method="GET" action="{{ route('products.index') }}" class="border p-3">
                <h2 class="h6 mb-3">Menampilkan {{ $products->total() }} produk</h2>
                <fieldset class="mb-4">
                    <legend class="small fw-bold">Kategori</legend>
                    @foreach ($categories as $cat)
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="category[]" value="{{ $cat }}" id="category-{{ Str::slug($cat) }}" onchange="this.form.submit()" @checked(in_array($cat, (array) request('category', []), true))>
                            <label class="form-check-label" for="category-{{ Str::slug($cat) }}">{{ $cat }}</label>
                        </div>
                    @endforeach
                </fieldset>
                <fieldset class="mb-4">
                    <legend class="small fw-bold">Rentang harga</legend>
                    <label class="form-label small" for="min-price">Dari (Rp)</label>
                    <input class="form-control mb-2" id="min-price" type="number" min="0" placeholder="Dari">
                    <label class="form-label small" for="max-price">Sampai (Rp)</label>
                    <input class="form-control" id="max-price" type="number" min="0" placeholder="Sampai">
                </fieldset>
                <div class="mb-4">
                    <label class="form-label small fw-bold" for="sort-products">Urutkan</label>
                    <select class="form-select" id="sort-products" name="sort" onchange="this.form.submit()">
                        <option value="" @selected(request('sort') === null)>Terbaru</option>
                        <option value="termurah" @selected(request('sort') === 'termurah')>Harga Termurah</option>
                        <option value="termahal" @selected(request('sort') === 'termahal')>Harga Termahal</option>
                    </select>
                </div>
                <a class="btn btn-outline-dark w-100" href="{{ route('products.index') }}">Reset</a>
            </form>
        </aside>
        <div class="col-lg-9">
            @if ($products->count())
                <div class="row row-cols-2 row-cols-md-3 g-3">
                    @foreach ($products as $item)
                        <div class="col">
                            <div class="card h-100 border-0">
                                <a href="{{ route('products.show', $item->id) }}" class="text-decoration-none text-dark">
                                    <div class="ratio ratio-3x4 bg-light">
                                        @if ($item->image && is_file(public_path('assets/images/' . $item->image)))
                                            <img class="w-100 h-100 object-fit-cover" src="{{ asset('assets/images/' . $item->image) }}" alt="{{ $item->name }}">
                                        @endif
                                    </div>
                                </a>
                                <div class="card-body px-0">
                                    <span class="badge text-bg-light border mb-2">{{ $item->category }}</span>
                                    <h2 class="h6">{{ $item->name }}</h2>
                                    <p class="fw-semibold">Rp {{ number_format($item->price, 0, ',', '.') }}</p>
                                    <a class="btn btn-outline-dark btn-sm" href="{{ route('products.show', $item->id) }}">Lihat Detail</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="mt-4">{{ $products->links('pagination::bootstrap-5') }}</div>
            @else
                <p class="border p-4 text-center text-secondary">Produk tidak ditemukan</p>
            @endif
        </div>
    </div>
</section>
@endsection

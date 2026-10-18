@extends('layouts.app')

@section('title', 'About')

@section('content')
<section class="container py-5">
    <div class="row justify-content-center mb-5">
        <div class="col-lg-9">
            <p class="text-uppercase small fw-semibold text-secondary mb-2">Cerita kami</p>
            <h1 class="display-5 fw-bold">Tentang Project Benang Asa</h1>
            <p class="lead">Singkat saja jadi ini tugas proyek buat penilain uts dan saya mendapatkan pilihan untuk membuat web ecomers baju untuk memenuhi nilai</p>
            <p class="text-secondary">Rayhan Pryhandi 251011700371 03SIFM002</p>
        </div>
    </div>
    <div class="row g-3">
        @foreach ([['Kualitas', 'Kami memperhatikan bahan dan detail agar pakaian terasa nyaman digunakan.'], ['Nyaman', 'Potongan yang leluasa mendukung aktivitas tanpa mengorbankan tampilan.'], ['Terjangkau', 'Pilihan yang masuk akal untuk menemani rutinitas sehari-hari.']] as $value)
            <div class="col-md-4"><article class="card h-100 rounded-0"><div class="card-body p-4"><h2 class="h5">{{ $value[0] }}</h2><p class="text-secondary mb-0">{{ $value[1] }}</p></div></article></div>
        @endforeach
    </div>
</section>
@endsection

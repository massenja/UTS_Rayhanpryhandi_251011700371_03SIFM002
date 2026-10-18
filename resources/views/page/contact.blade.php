@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
<section class="container py-5">
    <div class="row g-4">
        <div class="col-lg-5">
            <p class="text-uppercase small fw-semibold text-secondary mb-2">Hubungi kami</p>
            <h1 class="display-6 fw-bold">Ada yang ingin ditanyakan?</h1>
            <p class="text-secondary">Tim Benang Asa siap membantu pertanyaan seputar koleksi dan informasi toko.</p>
            <div class="card rounded-0 mt-4"><div class="card-body p-4">
                <p class="mb-3"><span class="fw-semibold">Email</span><br><a class="link-dark" href="mailto:halo@namatoko.id">halo@namatoko.id</a></p>
                <p class="mb-3"><span class="fw-semibold">Telepon</span><br><a class="link-dark" href="tel:+62215550123">+62 0838 sisanya kapan2</a></p>
                <p class="mb-0"><span class="fw-semibold">Alamat</span><br>cari sendiri ajah</p>
            </div></div>
        </div>
        <div class="col-lg-7">
            <form class="border p-4 p-md-5">
                <h2 class="h4 mb-4">Kirim pesan</h2>
                <div class="mb-3"><label class="form-label" for="contact-name">Nama</label><input class="form-control" id="contact-name" name="name" type="text" placeholder="Nama kamu"></div>
                <div class="mb-3"><label class="form-label" for="contact-email">Email</label><input class="form-control" id="contact-email" name="email" type="email" placeholder="nama@email.com"></div>
                <div class="mb-3"><label class="form-label" for="contact-message">Pesan</label><textarea class="form-control" id="contact-message" name="message" rows="5" placeholder="Tulis pesan"></textarea></div>
                <button class="btn btn-dark" type="button">Kirim Pesan</button>
            </form>
        </div>
    </div>
</section>
@endsection

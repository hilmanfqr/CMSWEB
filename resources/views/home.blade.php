@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="hero-area d-flex align-items-center justify-content-center overly position-relative">
  <div class="block">
    <h1 class="animate__animated animate__fadeInDown">Selamat Datang di Vaganza CMS</h1>
    <p class="animate__animated animate__fadeInUp">Kelola konten website Anda dengan mudah, cepat, dan modern.</p>
    <a href="{{ route('login') }}" class="btn btn-light btn-lg mt-3 animate__animated animate__fadeInUp">Masuk Admin</a>
  </div>
  <div id="mouse-scroll">
    <div class="mouse">
      <div class="mouse-in"></div>
    </div>
    <span></span>
    <span></span>
    <span></span>
  </div>
</section>

<!-- Section Fitur -->
<section class="container py-5">
  <div class="row text-center mb-4">
    <h2 class="fw-bold">Keunggulan Vaganza CMS</h2>
    <p class="text-muted">Solusi terbaik untuk mengelola website Anda</p>
  </div>
  <div class="row justify-content-center">
    <div class="col-md-4 mb-4">
      <div class="card fitur-card shadow-sm border-0 h-100 text-center p-4">
        <div class="mb-3"><i class="mdi mdi-speedometer display-4 text-primary"></i></div>
        <h5 class="fw-bold">Cepat & Mudah</h5>
        <p class="text-muted">Pengelolaan konten yang sangat mudah dan responsif.</p>
      </div>
    </div>
    <div class="col-md-4 mb-4">
      <div class="card fitur-card shadow-sm border-0 h-100 text-center p-4">
        <div class="mb-3"><i class="mdi mdi-shield-check display-4 text-success"></i></div>
        <h5 class="fw-bold">Aman</h5>
        <p class="text-muted">Keamanan data terjamin dengan sistem terbaru.</p>
      </div>
    </div>
    <div class="col-md-4 mb-4">
      <div class="card fitur-card shadow-sm border-0 h-100 text-center p-4">
        <div class="mb-3"><i class="mdi mdi-palette display-4 text-warning"></i></div>
        <h5 class="fw-bold">Desain Modern</h5>
        <p class="text-muted">Tampilan website yang menarik dan profesional.</p>
      </div>
    </div>
  </div>
</section>

<!-- Section Postingan Terbaru (Dummy) -->
<section class="container py-5">
  <div class="row text-center mb-4">
    <h2 class="fw-bold">Postingan Terbaru</h2>
    <p class="text-muted">Update informasi dan berita terkini</p>
  </div>
  <div class="row">
    @for ($i = 1; $i <= 3; $i++)
    <div class="col-md-4 mb-4">
      <div class="card h-100 shadow-sm border-0 position-relative">
        <img src="https://source.unsplash.com/600x400/?blog,news,{{$i}}" class="card-img-top" alt="Post Image">
        <div class="position-absolute top-0 start-0 m-2">
          <span class="badge bg-primary">Kategori {{$i}}</span>
        </div>
        <div class="position-absolute top-0 end-0 m-2">
          <span class="badge bg-dark">{{ date('d M Y', strtotime('-'.$i.' days')) }}</span>
        </div>
        <div class="card-body">
          <h5 class="card-title">Judul Postingan {{$i}}</h5>
          <p class="card-text text-muted">Ini adalah deskripsi singkat postingan terbaru ke-{{$i}}. Konten menarik dan informatif.</p>
          <a href="#" class="btn btn-primary btn-sm">Baca Selengkapnya</a>
        </div>
      </div>
    </div>
    @endfor
  </div>
</section>

<!-- Section Testimoni -->
<section class="container py-5">
  <div class="row text-center mb-4">
    <h2 class="fw-bold">Apa Kata Pengguna?</h2>
    <p class="text-muted">Testimoni dari pengguna Vaganza CMS</p>
  </div>
  <div class="row justify-content-center">
    @foreach ([
      ['img' => 'https://randomuser.me/api/portraits/men/32.jpg', 'nama' => 'Budi', 'pesan' => 'CMS ini sangat membantu pekerjaan saya!'],
      ['img' => 'https://randomuser.me/api/portraits/women/44.jpg', 'nama' => 'Sari', 'pesan' => 'Desainnya keren dan mudah digunakan.'],
      ['img' => 'https://randomuser.me/api/portraits/men/65.jpg', 'nama' => 'Andi', 'pesan' => 'Fitur-fiturnya lengkap dan supportnya cepat!'],
    ] as $testi)
    <div class="col-md-4 mb-4">
      <div class="card shadow border-0 h-100 text-center p-4">
        <img src="{{ $testi['img'] }}" class="rounded-circle mx-auto mb-3" width="80" height="80" alt="User">
        <blockquote class="blockquote mb-2">"{{ $testi['pesan'] }}"</blockquote>
        <footer class="blockquote-footer">{{ $testi['nama'] }}</footer>
      </div>
    </div>
    @endforeach
  </div>
</section>

<!-- Call to Action -->
<section class="call-to-action text-center">
  <div class="container">
    <h2 class="mb-4">Siap Mengelola Website Lebih Mudah?</h2>
    <a href="{{ route('register') }}" class="btn btn-buy-button">Daftar Sekarang</a>
  </div>
</section>

<!-- Footer Modern -->
<footer class="mt-5">
  <div class="container text-center">
    <div class="mb-3">
      <a href="#" class="mx-2"><i class="mdi mdi-facebook-box mdi-24px"></i></a>
      <a href="#" class="mx-2"><i class="mdi mdi-twitter-box mdi-24px"></i></a>
      <a href="#" class="mx-2"><i class="mdi mdi-instagram mdi-24px"></i></a>
      <a href="#" class="mx-2"><i class="mdi mdi-youtube mdi-24px"></i></a>
    </div>
    <p>&copy; {{ date('Y') }} Vaganza CMS. All rights reserved.</p>
  </div>
</footer>
@endsection

body, html, .container-scroller, .container-fluid, .page-body-wrapper {
  background: #f2edf3 !important;
}

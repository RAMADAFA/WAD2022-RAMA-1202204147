@extends('after.header')
@section('content')
 @auth

  <!-- Jumbotron -->
  <section id="home">
    <div class="container">
      <div class="d-flex gap-5 rap justify-content-center align-items-center">
        <div>
          <h1>Selamat Datang Di<br /> Show Room Rama</h1>
          <p class="mt-3">Kami Merupakan showroom mobil terbaik dan terlegit. kami menyediakan semua jenis mobil
                              dari mobil harian hingga luxury mobil.
          <a href="/mobil" class="button btn-primary">MyCar</a>
          <div class="d-flex align-items-center gap-5 mt-5">
            <img src="/asset/images/logo.png" alt="logoead" style="width:100px;">
            <p style="margin-top: 20px; font-size:15px;">Dafa Dinda Bayu Rama Dika_1202204147</p>
          </div>
        </div>
        <img src="/asset/images/mobil2.png" height="400px" width="800px" alt="mobil2.png">
      </div>
    </div>
  </section>

  
  <!-- Jumbotron End -->


@endauth
@guest

<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <div class="container">
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNavAltMarkup"
          aria-controls="navbarNavAltMarkup"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-link active" aria-current="page" href="/">Home</a>
          </div>
        </div>
        <div class="d-flex">
          <a href="/login">
          <button class="btn btn-primary" type="submit">Login</button></a>
      </div>
      </div>
    </nav>
<!-- Navbar End -->

<!-- Jumbotron -->
<section id="home">
    <div class="container">
      <div class="d-flex gap-5 rap justify-content-center align-items-center">
        <div>
          <h1>Selamat Datang Di<br /> Show Room Rama</h1>
          <p class="mt-3">Kami Merupakan showroom mobil terbaik dan terlegit</p>
          <div class="d-flex align-items-center gap-5 mt-5">
            <img src="/asset/images/logo.png"  style="width:100px;">
            <p style="margin-top: 20px; font-size:15px;">Dafa Dinda Bayu Rama Dika_1202204147</p>
          </div>
        </div>
        <img src="/asset/images/mobil2.png" height="400px" width="800px">
      </div>
    </div>
  </section>
  <!-- Jumbotron End -->
  @endguest
  @endsection
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-dark navbar-dark">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="RAMA_home.php">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="RAMA_booking.php">BOOKING</a>
        </li>
        <li class="nav-item dropdown">
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<section id="ban"> <div class="container">
     <CENTER><h1 class="mt-2">WELCOME TO EAD RENT</h1></CENTER>
     <center><h4 class="fw-normal mt-3 mb-4">find your best deal, here!</h4></center>

     <section id="RAMA_home.php"> <div class="container pb-5 ">
       <div class="row">
        <div class="col-lg-3">
            <div class="card" style="width: 18rem;">
                <img src="kendaraan1.png" width="75" height="160" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="type">Avanza</h5>
                  <p class="text">mobil ini memiliki spesifikasi 6 kursi penumpang dan 1 pengemudi, serta mobil ini manual.</p>
                  <a href="RAMA_booking.php?tipe=kendaraan1" class="btn btn-primary">Go book</a>
                </div>
              </div>
        </div>
        <div class="col-lg-3">
            <div class="card" style="width: 18rem;">
                <img src="mobil2.png" width="75" height="160" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="type">Pajero</h5>
                  <p class="text">mobil ini memiliki spesifikasi 7 kursi penumpang dan 1 pengemudi, serta mobil ini matic.</p>
                  <a href="RAMA_booking.php?tipe=mobil2" class="btn btn-primary">Go book</a>
                </div>
              </div>
        </div>
        <div class="col-lg-3">
            <div class="card" style="width: 18rem;">
                <img src="mobil3.png" width="75" height="160"  class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="type">Range Rover</h5>
                  <p class="text">mobil ini memiliki spesifikasi 5 kursi penumpang dan 1 pengemudi, serta mobil ini matic.</p>
                  <a href="RAMA_booking.php?tipe=mobil3" class="btn btn-primary">Go book</a>
                </div>
              </div>
        </div>
        <div class="col-lg-3">
            <div class="card" style="width: 18rem;">
                <img src="mobil4.png" width="75" height="160" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="type">Ayla</h5>
                  <p class="text">mobil ini memiliki spesifikasi 4 kursi penumpang dan 1 pengemudi, serta mobil ini matic.</p>
                  <a href="RAMA_booking.php?tipe=mobil4" class="btn btn-primary">Go book</a>
                </div>
              </div>
        </div>
       </div>
    </div>
</section>
<footer class="d-flex justify-content-center mt-3 p-2   ">
        <p class="text">Copyright © 2022(Dafa Dinda Bayu Rama Dika_1202204147)</p>
    </footer>
</body>
</html>
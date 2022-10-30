<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="nameth=device-width, initial-scale=1.0">
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
          <a class="nav-link" href="RAMA_home.php">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="RAMA_booking.php">BOOKING</a>
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
<section id="RAMA_booking.php">
        <div class="container">
            <center><h2 class="mt-5">Pendaftaran Mobil</h2></center>
            <form method="POST"     action="RAMA_mybooking.php">
            <div class="mb-3">
                  <label for="nama" class="form-label">Nama_NIM</label>
                  <input type="text" class="form-control" name="nama">
                </div>
                <div class="mb-3">
                  <label for="nama" class="form-label">Book Date</label>
                  <input type="date" class="form-control" name="tanggalSewa">
                </div>
                <div class="mb-3">
                  <label for="nama" class="form-label">Start Time</label>
                  <input type="time" class="form-control" name="mulaiSewa">
                </div>
                <div class="mb-3">
                  <label for="nama" class="form-label">Duration(Days)</label>
                  <input type="number" class="form-control" name="durasi">
                </div>
                <div class="mb-3">
                    <label for="mobil" class="form-label">Jenis</label>
                    <select class="form-select" name="tipe">
                <option selected disabled>Pilih jenis mobil</option>
                <option value="avanza">avanza</option>
                <option value="pajero">pajero</option>
                <option value="range rover">range rover</option>
                <option value="ayla">ayla</option>
              </select>
                 </div>
                 <div class="mb-3">
                  <label for="nama" class="form-label">Phone Number</label>
                  <input type="number" class="form-control"name="phone">

                  <div class="mb-3 mt-4">
                  <label for="mobil" class="form-label">Add Services(s)</label>
                  <div class="form-check">
                     <input class="form-check-input" type="checkbox" value="health protocol" name="servis">
                     <label class="form-check-label" for="flexCheckDefault">
                         Healt Protocol (Rp25.000)
                     </label>
                    </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="driver" name="servis">
                    <label class="form-check-label" for="flexCheckChecked">
                         Driver (Rp100.000)
                        </label>
                    </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="fuel filled" name="servis">
                    <label class="form-check-label" for="flexCheckChecked">
                         Fuel Filled (Rp250.000)
                        </label>
                     </div>
                     <button type="submit" class="btn btn-primary mt-4">Submit</button>
            </form>
            <footer class="d-flex justify-content-center mt-3 p-2   ">
                 <p class="text">Copyright © 2022(Dafa Dinda Bayu Rama Dika_1202204147)</p>
            </footer>
            
</body>
</html>
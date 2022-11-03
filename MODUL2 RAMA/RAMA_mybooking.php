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
          <a class="nav-link" href="RAMA_home.php">HOME</a>
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
<center><h2 class="mt-4">THANK YOU DAFA DINDA BAYU RAMA DIKA_1202204147 FOR RESERVING</h2></center>
<center><h4 class="fw-normal mt-3">please double check your reserving detail</h4></center>

<?php

$nama=$_POST['nama'];
$tanggalSewa = $_POST['tanggalSewa'];
$durasi = $_POST['durasi'];
$phone = $_POST['phone'];
$tipe = $_POST['tipe'];

//Total_Price
if (isset($_POST['servis'])) {
  $servis = $_POST['servis'];
}
else {
  $servis = '';
}

if ($tipe == "avanza") {
  $total_price = $durasi * 250000;
} else if ($tipe == "pajero") {
  $total_price = $durasi * 600000;
} else if ($tipe == "range rover") {
  $total_price = $durasi * 900000;
}

// Service
if (!empty($servis)) {
  foreach ($servis as $srv) {
      if ($srv == "health") {
          $total_price += 25000;
          '<li>' . $srv . '</li>';
      }
      else if($srv == "driver") {
          $total_price += 100000;
          '<li>' . $srv . '</li>';
      }
      else {
          $total_price += 250000;
          '<li>' . $srv . '</li>';
      }
  }
}

?>

    <table class="table mt-4">
        <thead>
            <tr>
                <th scope="col">Booking Number</th>
                <th scope="col">Name</th>
                <th scope="col">Check in</th>
                <th scope="col">Check Out</th>
                <th scope="col">Car Type</th>
                <th scope="col">Phone Number</th>
                <th scope="col">Service(s)</th>
                <th scope="col">Total Price</th>

            </tr>
        </thead>
    <tbody>
            <tr>
             <td scope="row"><?php echo rand()?></td>
             <td><?php echo $nama;?></td>
             <td><?php echo date('d F Y', strtotime($tanggalSewa)) ?></td>
             <td><?php echo date('d F Y', strtotime($tanggalSewa."+".$durasi."days")) ?></td>
             <td><?php echo $tipe?></td>
             <td><?php echo $phone?></td>
             <td><?php 
                    if(count($servis)>0){
                      foreach ($servis as $serv){
                        echo $serv.'<br>';
                      }
                    }
                    else{
                      echo "No service.";
                    }
                  ?></td>
              <td><?php echo $total_price?></td>
            

            </tr>
           
    </tbody>
    </table>
      <footer class="d-flex justify-content-center mt-3 p-2   ">
    <p class="text">Copyright © 2022(Dafa Dinda Bayu Rama Dika_1202204147)</p>
      </footer>
</body>
</html>
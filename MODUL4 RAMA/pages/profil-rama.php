<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=], initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="../asset/style/index.css">

    <!--tampilan atas-->
    <section>
        <nav class="navbar navbar-expand-lg bg-primary fixed-top">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="Home-rama.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="ListCar-rama.php">My Car</a>
                        </li>
                    </ul>
                    <div class="row">
                        <div class="col">
                            <a class="btn btn btn-light" href="add-rama.php" role="button">Add Car</a>
                        </div>
                        <div class="col">
                            <div class="dropdown">
                                <button type="button" class="btn btn btn-light dropdown-toggle"
                                    data-bs-toggle="dropdown">
                                    Rama
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="profil-rama.php">Profile</a></li>
                                    <li><a class="dropdown-item" href="login-rama.php">LogOut</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </section>

    <!--Profile ku disini-->
    <section>
        <div class="additem">
            <div class="judul">
                <h1 style="text-align:center">Profile</h1>
                <h6 style="color:grey; text-align:center;">Edit datanya kak disni</h6>
            </div>
            <form action="">
                <div class="mb-3 row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="text" readonly class="form-control-plaintext" id="staticEmail"
                            value="<?php echo $_COOKIE['email']; ?>">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama" name="nama"
                            value="<?php echo $_COOKIE['nama']; ?>">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="hp" class="col-sm-2 col-form-label">Nomor Handphone</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="hp" name="hp"
                            value="<?php echo $_COOKIE['no_hp']; ?>">
                    </div>
                </div>
                <hr>
                <div class="mb-3 row">
                    <label for="pswrd" class="col-sm-2 col-form-label">Kata Sandi</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="pswrd" name="pswrd"
                            placeholder="Kata Sandi">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="pswrd2" class="col-sm-2 col-form-label">confirm Kata Sandi</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="pswrd2" name="pswrd2"
                            placeholder="Konfirmasi Kata Sandi">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="navbar" class="col-sm-2 col-form-label">Warna Navbar nya itu..</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="navbar" value="Blue">
                    </div>
                </div>
                <div style="text-align:center;">
                    <br>
                    <div class="col-12">
                        <button class="btn btn-secondary" type="submit">Updatenya di sini</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
</body>
</html>
<?php
    require '../config/connector.php';

    $id_mobil = rand();
    $nama_mobil = $_POST['nama_mobil'];
    $nama_pemilik = $_POST['nama_pemilik'];
    $merek = $_POST['merek'];
    $tgl_beli = $_POST['tgl_beli'];
    $deskripsi = $_POST['deskripsi'];
    $status = $_POST['status'];
    $foto_mobil = $_FILES['foto_mobil']['name'];
    $target = "../asset/images";

    if (move_uploaded_file($_FILES['foto_mobil']['tmp_name'], $target . $foto_mobil)) {
        $sql = "INSERT INTO showroom_rama_table (id_mobil, nama_mobil, pemilik_mobil, merk_mobil, tanggal_beli, deskripsi, foto_mobil, status_pembayaran) 
        VALUES ('$id_mobil','$nama_mobil', '$nama_pemilik', '$merek', '$tgl_beli', '$deskripsi', '$foto_mobil', '$status')";
        
        if (mysqli_query($connect, $sql)) {
            header("location: ../pages/Home-rama.php");
            } else {
                echo "Gagal";
            }
        } else {
            echo "Gagal";
        }
?>
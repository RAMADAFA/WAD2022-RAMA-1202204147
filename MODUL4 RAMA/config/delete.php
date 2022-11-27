<?php
    require '../config/connector.php';

    $id_mobil = $_GET['id_mobil'];

    mysqli_query($connect, "DELETE FROM showroom_rama_table WHERE id_mobil = $id_mobil");
    header("location: ../pages/ListCar-rama.php");
?>
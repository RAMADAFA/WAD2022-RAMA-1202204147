<?php
    require './connector_usr.php';

    $id = rand();
    $name = $_POST['nama'];
    $email = $_POST['email'];
    $hp = $_POST['hp'];
    $pswrd = $_POST['pass'];
    $pswrd2 = $_POST['conf_pass'];

    if($pswrd == $pswrd2){
        $query = mysqli_query($connector, "INSERT INTO user_rama (id, nama, email, password, no_hp) 
        VALUES ('$id','$name', '$email', '$pswrd', '$hp')");
    if($query){
        setcookie('nama', $name, time()+4344*5, '/' );
        setcookie('email', $email, time()+4344*5, '/' );
        setcookie('password', $pswrd, time()+4344*5, '/' );
        setcookie('no_hp', $hp, time()+4344*5, '/' );
        header('location: ../pages/Home-rama.php');
    }else{
        echo 'salah cuy';
    }
    
    }
?>
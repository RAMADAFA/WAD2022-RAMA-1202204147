<?php
    require './connector_usr.php';

    $email=$_POST['email'];
    $password=$_POST['password'];
    
    $query=mysqli_query($connector, "SELECT * from users where email = '$email' && password = '$password'");
    $rows=mysqli_num_rows($query);

    if (!$rows) {
        $data=mysqli_fetch_assoc($query);
        if (isset($_POST['remember'])){
            $remember = $_POST['remember'];
            setcookie('remember', $remember, time()+4344*5, '/');
        }

        setcookie('email', $email, time()+4344*5, '/');
        setcookie('nama', $data['nama'], time()+4344*5, '/');
        setcookie('hp', $data['hp'], time()+4344*5, '/');
        header('location: ../pages/Home-rama.php');

    }else{
        echo 'wrong email/password';
    }
?>
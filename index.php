<?php

include "koneksi.php";

error_reporting(1);

session_start();

if (isset($_SESSION['username'])) {
    header('location: index.php');
}

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $call = "call login('$username' , '$password')";
    // $call = "SELECT * FROM login WHERE username='$username' and password='$password'";

    $result = mysqli_query($koneksi, $call);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        if($row['hak_akses'] == '1') {
            $_SESSION['username'] = $row['username'];
            $_SESSION['hak_akses'] = $row['hak_akses'];
            header('location: admin/welcome.php');
            // var_dump($row);
        } elseif ($row['hak_akses'] == '9') {
            $_SESSION['username'] = $row['username'];
            $_SESSION['hak_akses'] = $row['hak_akses'];
            header('location: welcome.php');
            // var_dump($row);

            
        }
                
    } else {
        echo "<script>alert('Username atau Password Salah, Silahkan di ulangi')</script>";
        // echo "error";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <style>
        body{
            font family: sans-serif;
            background-image: url('assest/images/background.jpg');
            background-size: cover;
            background-repeat: no-repeat;
        }
        .kotak_login{
            width: 350px;
            background: white;
            margin: 80px auto;
            padding: 30px 20px;
        }
        .judul {
            text-align: center;
            text-transform: uppercase;
            font-weight: bold;
        }
        .input_form{
            box-sizing: border-box;
            width: 100%;
            padding: 10px;
            font-size: 11px;
            margin-bottom: 20px;
            border-color: black;
        }
        .tombol_login{
            background: black;
            color: white;
            font-size: 11pt;
            width: 100%;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
        }
        .link{
            color: red;
            text-decoration: none;
            font-size: 11pt;

        }
        .teks{
            text-align: center;
        }
    </style>
</head>

<body>
    <div>
        <h4 style="color: red;"><?= $_SESSION['error'] ?></h4>
    </div>
    <div class="kotak_login">
        <p class="judul">Ayo Login Sekarang
        <form action="" method="post">
    

        <input class="input_form" type="text" placeholder="Username" name="username" required>
        <br><br>
        <input class="input_form" type="password" placeholder="Password" name="password" required>
        <br><br>
        <button class="tombol_login" name="submit" class="btn">Login</button>

        <p class="teks">Anda belum punya akun? <a class="link" href="#">Register</a></p>
    </form>
        </p>
    </div>     
    
    
</body>
</html>
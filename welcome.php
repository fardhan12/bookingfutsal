<?php
session_start();

if($_SESSION['level'] = "") {
    header('location: index.php');
}
?>
<DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatile" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang</title>
    <style>
        .body{
            margin: 0;
            padding: 0;
        }
        .menu{
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: red;
        }
        .menu-list{
            float: left;
        }
        .menu-list a{
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 25px;
        }
        .menu-list a:hover{
            background-color: black;
        }
        .jumbotron{
            padding: 30px;
        }
        .container{
            margin: 0 auto;
            padding: 30px;
            border-radius: 10px;
        }
        .jumbotron .container{
            max-width: 100%;
            background-color: black;
        }
        .jumbotron h1{
            text-align: left;
            color: white;
            font-family: 'roleway', helvetica, arial, sans-serif;
            font-weight: 600;
            font-size: 50px;
            text-transform: uppercase;
        }
        .jumbotron p{
            text-align: left;
            color: white;
            font-family: 'roleway', helvetica, arial, sans-serif;
            font-weight: 600;
            font-size: 20px;
            text-transform: uppercase;
        }
    </style>
</head>

<body>
    <ul class="menu">
        <li class="menu-list"><a href="./form/pendaftar.php">Daftar</a></li>
        <li class="menu-list"><a href="./logout.php">LOGOUT</a></li>
    </ul>
    <div class="jumbotron">
        <div class="container">
        <h1>Selamat datang di Futsal KUY</h1>
    <p>Silahkan klik menu daftar</p>
    <br><br>
        </div>
    </div>
</body>

</html>
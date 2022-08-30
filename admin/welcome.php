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
</head>

<body>
    <h3>Masuk sebagai admin</h3>
    <a href="data_lapangan.php">Lapangan</a> ||
    <a href="data_pembayaran.php">Pembayaran</a> ||
</body>

</html>
<a href="../logout.php">Logout</a>


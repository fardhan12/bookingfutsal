<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "dhan_futsal";
$koneksi = mysqli_connect($host, $user, $password, $database);
if(!$koneksi){
    echo "koneksi gagal";
}
?>
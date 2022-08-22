<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "dhan_futsal";
$con = mysqli_connect($host, $user, $password, $database);
if($con){
    echo "koneksi gagal";
}
?>
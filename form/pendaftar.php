<?php
    include "../koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
     body{
        padding: 0;
        margin: 0;
     }
    .form{
        background-color: green;
        padding: 20px;
        border-radius: 5px;
    }
    input,textarea,select{
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: #ccc;
        box-sizing: border-box;
    }
    button{
        width: 100%;
        background-color: black;
        padding: 14px 20px;
        margin: 8px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
        color: white;
    }
    button:hover{
        background-color: white;
    }
    </style>
</head>
<body>
    <h1>Silahkan isi bidang di bawah ini</h1>
    <form class="form"action="../input/input_data_pendaftar.php" method="post">
        
        <label for="">Id Pendaftar</label><br>
        <input type="text" name="id_pendaftar" id="" value="<?= rand(0000,9999)?>" readonly>
        <br><br>
        <label for="">Nama Pendaftar</label><br>
        <input type="text" name="nama_pendaftar" id="">
        <br><br>
        <label for="">Nomor HP</label><br>
        <input type="tel" name="nomor_hp" id="">
        <br><br>
        <label for="">Alamat</label><br>
        <textarea name="alamat" id="" cols="50" rows="10"></textarea>
        <br><br>
        <label for="">Jenis Lapangan</label><br>
        <select name="jenis_lapangan" id="">
            <option value="a">Lapangan A (MATRAS)</option>
            <option value="b">Lapangan B (SINTESIS)</option>
            <option value="c">Lapangan C (VINYL)</option>
        </select>
        <br><br>
        <label for="">Jam Mulai</label><br>
        <input type="time" name="jam_mulai" id="">
        <br><br>
        <label for="">Jam Selesai</label><br>
        <input type="time" name="jam_selesai" id="">
        <br><br>
        <label for="">Jenis Pembayaran</label><br>
        <select name="jenis_pembayaran" id="">
            <option value="cash">Cash</option>
            <option value="transfer">Transfer</option>
        </select>

        <button type="submit">Kirim Data</button>


    </form>

</body>

</html>
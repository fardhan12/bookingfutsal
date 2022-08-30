<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Lapangan</title>
</head>

<body>
    <a href="welcome.php">Back To Home</a>
    <h1>Silahkan isi data lapangan</h1>
    <form action="input_data_lapangan.php" method="post">

        <label for="">Id Lapangan</label><br>
        <input type="text" name="id_lapangan" id="" value="<?= rand(0000,9999)?>" readonly>
        <br><br>
        <label for="">Jenis Lapangan</label><br>
        <select name="jenis_lapangan" id="">
            <option value="a">Lapangan A (MATRAS)</option>
            <option value="b">Lapangan B (SINTESIS)</option>
            <option value="c">Lapangan C (VINYL)</option>
        </select>
        <br><br>
        <label for="">Type Lapangam</label><br>
        <select name="type_lapangan" id="">
            <option value="matras">Matras</option>
            <option value="sintesis">Sintesis</option>
            <option value="vinyl">Vinyl</option>
        </select>
        <br><br>

        <button type="submit">Kirim Data</button>

    </form>
</body>

</html>
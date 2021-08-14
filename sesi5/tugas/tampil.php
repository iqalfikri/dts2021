<?php
$nama = $_POST['nama'];
$tempat = $_POST['tempat'];
$umur = $_POST['umur'];
$alamat = $_POST['alamat'];
$jenis_kelamin = $_POST['jenis_kelamin'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form HTML Muhammad Fikri Haikal</title>
</head>

<body>

    <h1>Tampil Data</h1>
    <?php
    if (isset($_POST['submit'])) {
        echo '<ul>';
        echo '<li>Nama: ' . $nama . '</li>';
        echo '<li>Tempat Tinggal: ' . $tempat . '</li>';
        echo '<li>Umur: ' . $umur . '</li>';
        echo '<li>Alamat: ' . $alamat . '</li>';
        echo '<li>Jenis Kelamin: ' . $jenis_kelamin . '</li>';
    }
    ?>


</body>

</html>

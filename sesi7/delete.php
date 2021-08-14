<?php
include('koneksi.php');
//cukup ambil data "id" saja 
$id = $_GET['id_mhs'];

$delete = mysqli_query($koneksi, "DELETE FROM mahasiswa WHERE id_mhs='$id'");

if ($delete) {
    //akan diarahkan ke list.php
    header('Location: index.php');
} else {
    // echo "Failed to input database";
    die('Query Error : ' . mysqli_errno($koneksi) .
        ' - ' . mysqli_error($koneksi));
}

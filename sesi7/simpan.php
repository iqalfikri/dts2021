<?php
include('koneksi.php');
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jurusan = $_POST['jurusan'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];

$input = mysqli_query($koneksi, "INSERT INTO `mahasiswa` (`nim`, `id_mhs`, `nama`, `jenis_kelamin`, `jurusan`, `alamat`) VALUES ('$nim', NULL, '$nama', '$jenis_kelamin', '$jurusan', '$alamat');");

//pengecekan kondisi
if ($input) {
    //akan diarahkan ke list.php
    header('Location: index.php');
} else {
    // echo "Failed to input database";
    die('Query Error : ' . mysqli_errno($koneksi) .
        ' - ' . mysqli_error($koneksi));
}

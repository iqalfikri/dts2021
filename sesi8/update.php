<?php
include('koneksi.php');
$id = $_POST['id_mhs'];
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jurusan = $_POST['jurusan'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];

$update = mysqli_query($koneksi, "UPDATE mahasiswa SET nim='$nim', nama='$nama', jenis_kelamin='$jenis_kelamin', jurusan='$jurusan', alamat='$alamat' WHERE id_mhs='$id'");

//pengecekan kondisi
if ($update) {
    //akan diarahkan ke list.php
    header('Location: index.php');
} else {
    // echo "Failed to input database";
    die('Query Error : ' . mysqli_errno($koneksi) .
        ' - ' . mysqli_error($koneksi));
}

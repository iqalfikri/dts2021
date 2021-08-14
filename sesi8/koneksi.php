<?php
$server = "localhost";
$user = "admin";
$password = "whoami2002";
$nama_database = "db_mhs";
$koneksi = mysqli_connect($server, $user, $password, $nama_database);

if (!$koneksi) {
    die("Gagal terhubung dengan database : " . mysqli_connect_error());
}

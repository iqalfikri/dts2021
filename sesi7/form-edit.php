<?php

include('koneksi.php');

$id = $_GET['id_mhs'];

$query = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE id_mhs='$id' LIMIT 1");

$result = mysqli_fetch_all($query, MYSQLI_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Mahasiswa</title>
</head>

<body>
    <center>
        <h2>Masukkan Data</h2>
        <form action="update.php" method="post">
            <input type="hidden" value="<?php echo $result[0]['id_mhs']; ?>" name="id_mhs">

            <label><b>NIM</b></label><br>
            <input type="text" name="nim" value="<?php echo $result[0]['nim']; ?>" />
            <br><br>

            <label><b>Nama</b></label><br>
            <input type="text" name="nama" value="<?php echo $result[0]['nama']; ?>" />
            <br><br>

            <label><b>Jenis Kelamin</b></label><br>
            <select name="jenis_kelamin">
                <option value="L" <?php echo ($result[0]['jenis_kelamin'] == 'L') ? 'selected' : ''; ?>>
                    Laki-Laki
                </option>
                <option value="P" <?php echo ($result[0]['jenis_kelamin'] == 'P') ? 'selected' : ''; ?>>
                    Perempuan
                </option>
            </select>
            <br><br>
            <label><b>Alamat</b></label><br>
            <input type="text" name="alamat" value="<?php echo $result[0]['alamat']; ?>" />
            <br><br>

            <label><b>Jurusan</b></label><br>
            <select name="jurusan">
                <option value="Manajemen Informatika"
                    <?php echo ($result[0]['jurusan'] == 'Manajemen Informatika') ? 'selected' : ''; ?>>
                    Manajemen Informatika
                </option>
                <option value="Teknik Komputer"
                    <?php echo ($result[0]['jurusan'] == 'Teknik Komputer') ? 'selected' : ''; ?>>
                    Teknik Komputer
                </option>
                <option value="Teknik Mesin" <?php echo ($result[0]['jurusan'] == 'Teknik Mesin') ? 'selected' : ''; ?>>
                    Teknik Mesin
                </option>
                <option value="Teknik Elektro"
                    <?php echo ($result[0]['jurusan'] == 'Teknik Elektro') ? 'selected' : ''; ?>>
                    Teknik Elektro
                </option>
            </select>
            <br><br>

            <button type="submit">Edit Data</button>
        </form>
        <br>
        <button onclick="document.location='index.php'">Back</button>
    </center>
</body>

</html>

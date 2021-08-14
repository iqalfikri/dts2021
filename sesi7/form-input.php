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
        <form action="simpan.php" method="post">
            <label><b>NIM</b></label><br>
            <input type="text" name="nim" />
            <br><br>

            <label><b>Nama</b></label><br>
            <input type="text" name="nama" />
            <br><br>

            <label><b>Jenis Kelamin</b></label><br>
            <select name="jenis_kelamin">
                <option value="L">Laki - Laki</option>
                <option value="P">Perempuan</option>
            </select>
            <br><br>

            <label><b>Alamat</b></label><br>
            <input type="text" name="alamat" />
            <br><br>

            <label><b>Jurusan</b></label><br>
            <select name="jurusan">
                <option value='Manajemen Informatika'>Manajemen Informatika</option>
                <option value='Teknik Komputer'>Teknik Komputer</option>
                <option value='Teknik Mesin'>Teknik Mesin</option>
                <option value='Teknik Elektronika'>Teknik Elektronika</option>
            </select>
            <br><br>

            <button type="submit">Insert Data</button>
        </form>
        <br>
        <button onclick="document.location='index.php'">Back</button>
    </center>
</body>

</html>

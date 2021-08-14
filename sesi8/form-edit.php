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
    <link rel="stylesheet" href="css/bootstrap.css" />
    <style>
    body {
        font-family: Arial, Helvetica, sans-serif;
        margin: 20px 200px 20px 200px;
    }

    b {
        color: white;
    }

    /* Add padding to containers */
    .container {
        padding: 16px;
        background-color: white;
    }

    .card {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        transition: 0.3s;
        border-radius: 25px;
    }

    .card:hover {
        box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
    }

    .card-box {
        background-color: #055052;
        padding-left: 25px;
        padding-right: 25px;
    }

    </style>
</head>

<body>
    <div class="container">
        <div class="col align-self-center">
            <h2>Edit Data</h2>
            <div class="card ">
                <div class="card-box">
                    <div class="card-body">
                        <form action="update.php" method="post">
                            <input type="hidden" value="<?php echo $result[0]['id_mhs']; ?>" name="id_mhs">
                            <div class="form-group">
                                <label>
                                    <b>NIM</b>
                                </label>
                                <input type="text" class="form-control" name="nim"
                                    value="<?php echo $result[0]['nim']; ?>" />
                            </div>
                            <div class="form-group">
                                <label><b>Nama</b></label>
                                <input type="text" class="form-control" name="nama"
                                    value="<?php echo $result[0]['nama']; ?>" />
                            </div>
                            <div class="form-group">
                                <label><b>Jenis Kelamin</b></label><br>
                                <select name="jenis_kelamin" class="form-control">
                                    <option value="L"
                                        <?php echo ($result[0]['jenis_kelamin'] == 'L') ? 'selected' : ''; ?>>
                                        Laki-Laki
                                    </option>
                                    <option value="P"
                                        <?php echo ($result[0]['jenis_kelamin'] == 'P') ? 'selected' : ''; ?>>
                                        Perempuan
                                    </option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label><b>Alamat</b></label><br>
                                <input type="text" name="alamat" class="form-control"
                                    value="<?php echo $result[0]['alamat']; ?>" />
                            </div>
                            <div class="form-group">
                                <label><b>Jurusan</b></label><br>
                                <select name="jurusan" class="form-control">
                                    <option value="Manajemen Informatika"
                                        <?php echo ($result[0]['jurusan'] == 'Manajemen Informatika') ? 'selected' : ''; ?>>
                                        Manajemen Informatika
                                    </option>
                                    <option value="Teknik Komputer"
                                        <?php echo ($result[0]['jurusan'] == 'Teknik Komputer') ? 'selected' : ''; ?>>
                                        Teknik Komputer
                                    </option>
                                    <option value="Teknik Mesin"
                                        <?php echo ($result[0]['jurusan'] == 'Teknik Mesin') ? 'selected' : ''; ?>>
                                        Teknik Mesin
                                    </option>
                                    <option value="Teknik Elektro"
                                        <?php echo ($result[0]['jurusan'] == 'Teknik Elektro') ? 'selected' : ''; ?>>
                                        Teknik Elektro
                                    </option>
                                </select>
                            </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="col-md-4 offset-md-9">
                        <button class="btn btn-dark" onclick="document.location='index.php'">Back</button>
                        <button type="submit" class="btn btn-primary">Update Data</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="js/bootstrap.js"></script>
</body>

</html>

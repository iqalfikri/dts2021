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
        background-color: #476072;
        padding-left: 25px;
        padding-right: 25px;
    }

    </style>
</head>

<body>
    <div class="container">
        <div class="col align-self-center">
            <h2>Masukkan Data</h2>
            <div class="card ">
                <div class="card-box">
                    <div class="card-body">
                        <form action="simpan.php" method="post">
                            <div class="form-group">
                                <label>
                                    <b>NIM</b>
                                </label>
                                <input type="text" class="form-control" name="nim" placeholder="Masukkan NIM"
                                    autocomplete="off" required />
                            </div>
                            <div class="form-group">
                                <label><b>Nama</b></label>
                                <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama Anda"
                                    autocomplete="off" required />
                            </div>
                            <div class="form-group">
                                <label><b>Jenis Kelamin</b></label><br>
                                <select name="jenis_kelamin" class="form-control" autocomplete="off" required>
                                    <option value="L">Laki - Laki</option>
                                    <option value="P">Perempuan</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label><b>Alamat</b></label><br>
                                <input type="text" name="alamat" class="form-control"
                                    placeholder="Masukkan Alamat Kota Anda" autocomplete="off" required />
                            </div>
                            <div class="form-group">
                                <label><b>Jurusan</b></label><br>
                                <select name="jurusan" class="form-control" autocomplete="off" required>
                                    <option value='Manajemen Informatika'>Manajemen Informatika</option>
                                    <option value='Teknik Komputer'>Teknik Komputer</option>
                                    <option value='Teknik Mesin'>Teknik Mesin</option>
                                    <option value='Teknik Elektronika'>Teknik Elektronika</option>
                                </select>
                            </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="col-md-4 offset-md-9">
                        <button class="btn btn-dark" onclick="document.location='index.php'">Back</button>
                        <button type="submit" class="btn btn-success">Insert Data</button>
                    </div>
                </div>
                </form>
            </div>


        </div>
    </div>
    <script type="text/javascript" src="js/bootstrap.js"></script>
</body>

</html>

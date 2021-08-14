<?php
include('koneksi.php');
$mahasiswa = mysqli_query($koneksi, "SELECT * FROM mahasiswa");
$no = 1;

// $results = mysqli_fetch_all($query, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Mahasiswa</title>
    <link rel="stylesheet" href="css/bootstrap.css" />
</head>

<body>
    <div class="container">
        <h2 class="mt-4">List Mahasiswa</h2>
        <table class="table table-striped mt-3">
            <thead class="thead-dark">
                <tr>
                    <th>No</th>
                    <th>NIM</th>
                    <th>NAMA</th>
                    <th>GENDER</th>
                    <th>JURUSAN</th>
                    <th>ALAMAT</th>
                    <th>ACTION</th>
                </tr>
            </thead>

            <?php foreach ($mahasiswa as $row) : ?>
            <?php $jenis_kelamin = $row['jenis_kelamin'] == 'P' ? 'Perempuan' : 'Laki laki'; ?>
            <?php echo "<tr>
                <td>$no</td>
                <td>" . $row['nim'] . "</td>
                <td>" . $row['nama'] . "</td>
                <td>" . $jenis_kelamin . "</td>
                <td>" . $row['jurusan'] . "</td>
                <td>" . $row['alamat'] . "</td>" ?>
            <td>
                <button class='btn btn-success'
                    onclick="document.location='form-edit.php?id_mhs=<?php echo $row['id_mhs']; ?>'">Edit</button>
                <a class='btn btn-danger' href="delete.php?id_mhs=<?php echo $row['id_mhs']; ?>"
                    onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">Delete</a>
            </td>
            </tr>
            <?php $no++; ?>
            <?php endforeach; ?>
        </table>
        </br>
        <div class="col-md-4 offset-md-5">
            <button class="btn btn-primary" onclick="document.location='form-input.php'">Add Data</button>
        </div>
    </div>
    <script type="text/javascript" src="js/bootstrap.js"></script>
</body>

</html>

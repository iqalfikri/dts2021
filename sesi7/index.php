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
    <style>
    table,
    th,
    td {
        border: 1px solid #ddd;
        border-collapse: collapse;
    }

    th,
    td {
        padding: 13px;
    }

    th {
        background-color: #4CAF50;
        color: white;
    }

    a:link,
    a:visited {
        color: white;
        padding: 3px 7px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
    }

    .delete:link,
    .delete:visited {
        background-color: #f44336;
    }

    .delete:hover,
    .delete:active {
        background-color: red;
    }

    .edit:link,
    .edit:visited {
        background-color: #f48236;
    }

    .edit:hover,
    .edit:active {
        background-color: #cc6d2d;
    }

    </style>
</head>

<body>
    <center>
        <h2>List Mahasiswa</h2>
        <table>
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>NAMA</th>
                <th>Gender</th>
                <th>JURUSAN</th>
                <th>ALAMAT</th>
                <th>Action</th>
            </tr>

            <?php foreach ($mahasiswa as $row) {
                $jenis_kelamin = $row['jenis_kelamin'] == 'P' ? 'Perempuan' : 'Laki laki';
                echo "<tr>
                <td>$no</td>
                <td>" . $row['nim'] . "</td>
                <td>" . $row['nama'] . "</td>
                <td>" . $jenis_kelamin . "</td>
                <td>" . $row['jurusan'] . "</td>
                <td>" . $row['alamat'] . "</td>
                <td>
                <a class='edit' href='form-edit.php?id_mhs=$row[id_mhs]'>Edit</a>
                <a class='delete' href='delete.php?id_mhs=$row[id_mhs]'>Delete</a>
                </td>
            </tr>";
                $no++;
            }
            ?>
        </table>
        </br>
        <button onclick="document.location='form-input.php'">Add Data</button>
    </center>
</body>

</html>

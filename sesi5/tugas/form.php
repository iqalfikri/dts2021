<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form HTML Muhammad Fikri Haikal</title>
</head>

<body>
    <center>
        <h2>Form Pendaftaran</h2>
        <form action="tampil.php" method="POST" name="frmdaftar">
            <table border="0" width="80%" cellpadding="6" cellspacing="0">
                <tr>
                    <td bgcolor="silver" width="25%">Nama</td>
                    <td width="5%" align="center"> : </td>
                    <td width="50%"> <input type="text" name="nama"></td>
                </tr>
                <tr>
                    <td bgcolor="silver" width="25%">Tempat Tinggal</td>
                    <td width="5%" align="center"> : </td>
                    <td width="50%"><input type="text" name="tempat"></td>
                </tr>
                <tr>
                    <td bgcolor="silver" width="25%">Umur</td>
                    <td width="5%" align="center"> : </td>
                    <td width="50%"><input type="number" name="umur"></td>
                </tr>
                <tr>
                    <td bgcolor="silver" width="25%"> Alamat </td>
                    <td width="5%" align="center"> : </td>
                    <td width="50%"><textarea name="alamat" cols="30" rows="5"></textarea></td>
                </tr>
                <tr>
                    <td bgcolor="silver" width="25%"> Jenis Kelamin </td>
                    <td width="5%" align="center"> : </td>
                    <td width="50%"><?php
                                    $jenis_kelamin = array('Laki-Laki' => 'Laki Laki', 'Perempuan' => 'Perempuan');
                                    foreach ($jenis_kelamin as $kode => $detail) {
                                        $checked = @$_POST['jenis_kelamin'] == $kode ? ' checked="checked"' : '';
                                        echo '<label class="radio">
						<input name="jenis_kelamin" type="radio" value="' . $kode . '"' . $checked . '>' . $detail . '</option>
					</label>';
                                    }
                                    ?>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" align="center">
                        <input type="submit" name="submit" value="Submit">
                        <input type="reset" name="tblreset" value="Reset">
                    </td>
                </tr>
            </table>
        </form>
        <br><br>
    </center>

</body>

</html>

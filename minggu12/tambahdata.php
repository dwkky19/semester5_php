<!DOCTYPE html>
<br lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
</head>

<br>
<h1>Tambah Data Mahasiswa</h1>
<br />
<a href="index.php">Data Mahasiswa</a>
<br /><br />
<form action="prosestambah.php" method="post" enctype="multipart/form-data">
    <table width="400">
        <tr>
            <td>NPM</td>
            <td><input type="text" name="npm"></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama" required></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>
                <input type="radio" value=L name="jekel">Laki Laki
                <input type="radio" value=L name="jekel">Perempuan
            </td>
        </tr>
        <tr>
            <td>Jurusan</td>
            <td>
                <select name="jurusan">
                    <option value=SI informasi>SI</option>
                    <option value=TI informatika>TI</option>
                    <option value=SIA informatika>SIA</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Kelas</td>
            <td><input type="text" name="kelas"></td>
        </tr>
        <tr>
            <td>Photo</td>
            <td><input type="file" name="file"></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <br />
                <br />
                <input name="save" type="submit" value="SIMPAN">
                <input name="BtnBatal" type="reset" value="BATAL">
            </td>
        </tr>
    </table>
</form>
</body>

/

</html>
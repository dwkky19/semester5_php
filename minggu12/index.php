<!DOCTYPE html>
<html>

<head>
    <title>Tambah Data</title>
</head>

<body>
    <h1>Tambah Data Mahasiswa</h1>
    <?php
    include 'koneksi.php';
    ?>
    <br />
    <a href="tambahdata.php">Tambah Data</a>
    <br /><br />
    <table border="1" cellpadding="10">
        <tr>
            <th>No</th>
            <th>NPM</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Jurusan</th>
            <th>Kelas</th>
            <th>Photo</th>
            <th>Action</th>
        </tr>
        <?php
        $no = 1;
        $data = mysqli_query($koneksi, "SELECT * FROM mahasiswa");
        if (!$data) {
            echo "<tr><td colspan='8'>Query error: " . mysqli_error($koneksi) . "</td></tr>";
        } else {
            while ($d = mysqli_fetch_assoc($data)) {
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo htmlspecialchars($d['npm']); ?></td>
            <td><?php echo htmlspecialchars($d['nama']); ?></td>
            <td>
                <?php
                if ($d['jns_kelamin'] == 'L') echo 'Laki-laki';
                elseif ($d['jns_kelamin'] == 'P') echo 'Perempuan';
                ?>
            </td>
            <td><?php echo htmlspecialchars($d['jurusan']); ?></td>
            <td><?php echo htmlspecialchars($d['kelas']); ?></td>
            <td>
                <?php if (file_exists("file/" . $d['photo'])) { ?>
                <img src="<?php echo "file/" . $d['photo']; ?>" width="100" height="130" alt="Photo">
                <?php } else { ?>
                <span>Photo tidak ditemukan</span>
                <?php } ?>
            </td>
            <td>
                <a href="edit_datamahasiswa.php?id=<?php echo urlencode($d['npm']); ?>">Edit</a> |
                <a href="proses_hapus.php?id=<?php echo urlencode($d['npm']); ?>"
                    onclick="return confirm('Anda yakin akan menghapus data ini? <?php echo htmlspecialchars($d['npm']); ?>')">Hapus</a>
            </td>
        </tr>
        <?php
            }
        }
        ?>
    </table>
    <br />
    <?php
    echo "Total data: " . mysqli_num_rows($data) . " Mahasiswa";
    ?>
</body>

</html>
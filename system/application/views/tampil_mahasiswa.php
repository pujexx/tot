<table border="1">
    <tr>
        <td>Nim</td><td>Nama</td><td>Aksi</td>
    </tr>

    <?php
    if (isset($mahasiswa)) {
        foreach ($mahasiswas as $mahasiswa) {
            echo "<tr><td>" . $mahasiswa['nim'] . "</td><td>" . $mahasiswa['nama'] . "</td>";
            echo '<td>delete|<a href="' . site_url() . '/mahasiswa/delete/' . $mahasiswa['id'] . '" onclick="return confirm(\'Yakin\')">Delete</a></td></tr>';
        }
    }
    ?>
</table>
<?php echo anchor("mahasiswa/tambah", "Tambah"); ?>

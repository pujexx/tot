<table border="1">
    <tr>
        <td>Nim</td><td>Nama</td><td>Aksi</td>
    </tr>

    <?php
    foreach ($mahasiswas as $mahasiswa) {
        echo "<tr><td>" . $mahasiswa['nim'] . "</td><td>" . $mahasiswa['nama'] . "</td>";
        echo "<td>delete|edit</td></tr>";
    }
    ?>
</table>
<?php echo anchor("mahasiswa/tambah","Tambah");?>

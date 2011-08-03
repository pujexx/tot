<table border="1">
    <tr>
        <td>Nim</td><td>Nama</td>
    </tr>

    <?php
    foreach ($mahasiswas as $mahasiswa) {
        echo "<tr><td>" . $mahasiswa['nim'] . "</td><td>" . $mahasiswa['nama'] . "</td><tr>";
    }
    ?>
</table>

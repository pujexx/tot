<table border="1">
    <tr>
        <td>Nim</td><td>Nama</td><td>Aksi</td>
    </tr>

    <?php

        foreach ($mahasiswas as $mahasiswa) {
            echo "<tr><td>" . $mahasiswa['nim'] . "</td><td>" . $mahasiswa['nama'] . "</td>";
            echo '<td><a href="'.site_url().'/mahasiswa/form_update/'.$mahasiswa['id'].'">update</a>|<a href="' . site_url() . '/mahasiswa/delete/' . $mahasiswa['id'] . '" onclick="return confirm(\'Yakin\')">Delete</a></td></tr>';
        }
    
    ?>
</table>
<?php echo anchor("mahasiswa/tambah", "Tambah"); ?>

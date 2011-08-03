<?php echo form_open('mahasiswa/tambah');?>
Nim<input type="text" name="nim"><?php echo form_error('nim');?></br>
Nama<input type="text" name="nama"><?php echo form_error('nama');?></br>
<input type="submit" value="Tambah"/>
<?php echo form_close();?>
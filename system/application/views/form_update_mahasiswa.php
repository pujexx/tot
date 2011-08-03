<?php echo form_open('mahasiswa/update'); ?>
Nim<input type="text" name="nim" value="<?php echo $mahasiswa['nim']?>"><?php echo form_error('nim'); ?></br>
Nama<input type="text" name="nama" value="<?php echo $mahasiswa['nama'];?>"><?php echo form_error('nama'); ?></br>
<?php echo form_hidden('id',$mahasiswa['id']);?>
<input type="submit" value="Update"/>

<?php echo form_close(); ?>
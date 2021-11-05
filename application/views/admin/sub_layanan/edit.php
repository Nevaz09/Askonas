  <?php
// Validasi error
echo validation_errors('<div class="alert alert-warning">','</div>');

// Form buka 
echo form_open(base_url('admin/sub_layanan/edit/'.$sub_layanan->id_sub_layanan));
?>

<div class="form-group">
<input type="text" name="nama_sub_layanan" class="form-control" placeholder="Nama Sub Layanan" value="<?php echo $sub_layanan->nama_sub_layanan ?>" required>
</div>

<div class="form-group">
<input type="number" name="urutan" class="form-control" placeholder="Urutan" value="<?php echo $sub_layanan->urutan ?>" required>
</div>

<div class="form-group text-center">
<input type="submit" name="submit" class="btn btn-success btn-lg" value="Simpan Data">
</div>
<div class="clearfix"></div>

<?php
// Form close 
echo form_close();
?>


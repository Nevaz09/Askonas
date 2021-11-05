
<?php
// Validasi error
echo validation_errors('<div class="alert alert-warning">','</div>');

// Error upload
if(isset($error)) {
	echo '<div class="alert alert-warning">';
	echo $error;
	echo '</div>';
}

// Form open
echo form_open_multipart(base_url('admin/cabang/edit/'.$cabang->id_cabang));
?>

<div class="row">

<div class="col-md-8">

<div class="form-group form-group-lg">
<label>Nama Cabang</label>
<input type="text" name="nama" class="form-control" placeholder="Nama Cabang" required="required" value="<?php echo $cabang->nama ?>">
</div>

</div>

<div class="col-md-4">

<div class="form-group form-group-lg">
<label>Nomor Telepon</label>
<input type="number" name="no_telepon" class="form-control" placeholder="Nomor Telepon" value="<?php echo $cabang->no_telepon ?>">
</div>

</div>


<div class="col-md-12">

<div class="form-group">
<label>Alamat</label>
<textarea name="alamat" class="form-control" placeholder="Alamat"><?php echo $cabang->alamat ?></textarea>
</div>

<div class="form-group">
<label>Email</label>
<input type="text" name="email" class="form-control" id="email" placeholder="Email" value="<?php echo $cabang->email ?>" />
</div>

<div class="form-group">
<label>Struktur Organisasi</label>
<textarea name="struktur_organisasi" id="isi" class="form-control" id="struktur_organisasi" placeholder="Struktur Organisasi"><?php echo $cabang->struktur_organisasi ?></textarea>
</div>

<div class="form-group text-right">
<button type="submit" name="submit" class="btn btn-success btn-lg"><i class="fa fa-save"></i> Simpan Data</button>
<input type="reset" name="reset" class="btn btn-default btn-lg" value="Reset">
</div>

</div>

<?php
// Form close
echo form_close();
?>

</div>

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
echo form_open(base_url('admin/email/kirim'));
?>

<div class="row">

<div class="col-md-4">

<div class="form-group form-group-lg">
<label>Email Penerima</label>
<input type="hidden" name="id_pesan" value="<?php echo $pesan->id_pesan ?>">
<input readonly="readonly" type="text" name="email_penerima" class="form-control" placeholder="Email Penerima" required="required" value="<?php echo $pesan->email ?>">
</div>
</div>
<div class="col-md-8">
<div class="form-group form-group-lg">
<label>Isi Email Pengirim</label>
<textarea readonly="readonly" name="isi_email_pengirim" class="form-control" placeholder="Isi email pengirim"><?php echo $pesan->pesan ?></textarea>
</div>

</div>
</div>


<div class="col-md-12">


<div class="form-group">
<label>Subjek</label>
<textarea name="subject" class="form-control" placeholder="Subject Balasan"><?php echo set_value('subject') ?></textarea>
</div>

<div class="form-group">
<label>Isi email</label>
<textarea name="isi" class="form-control" id="isi" placeholder="Isi email"><?php echo set_value('isi') ?></textarea>
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

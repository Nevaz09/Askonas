<?php
$site   = $this->konfigurasi_model->listing();
echo form_open(base_url('admin/cabang/proses'));
?>
<p class="btn-group">
  <a href="<?php echo base_url('admin/cabang/tambah') ?>" class="btn btn-success btn-lg">
  <i class="fa fa-plus"></i> Tambah Cabang</a>

  <button class="btn btn-danger" type="submit" name="hapus" onClick="check();" >
      <i class="fa fa-trash-o"></i> Hapus
    </button> 
<?php 
$url_navigasi = $this->uri->segment(2); 
if($this->uri->segment(3) != "") { 
 ?>
<a href="<?php echo base_url('admin/'.$url_navigasi) ?>"  class="btn btn-primary">
 <i class="fa fa-backward"></i> Kembali</a>
 <?php } ?>
</p>
<div class="table-responsive mailbox-messages">
<table id="example1" class="display table table-bordered table-hover" cellspacing="0" width="100%">
<thead>
<tr>
    <th width="5%">
        <div class="mailbox-controls">
            <!-- Check all button -->
            <button type="button" class="btn btn-default btn-xs checkbox-toggle"><i class="fa fa-square-o"></i>
            </button>
        </div>
    </th>
    <th width="30%">CABANG</th>
    <th width="50%">STRUKTUR ORGANISASI</th>
    <th width="15%">ACTION</th>
</tr>
</thead>
<tbody>

<?php $i=1; foreach($cabang as $cabang) { ?>

<tr class="odd gradeX">
    <td>
      <div class="mailbox-star text-center"><div class="text-center">
        <input type="checkbox" class="icheckbox_flat-blue " name="id_cabang[]" value="<?php echo $cabang->id_cabang ?>">
        <span class="checkmark"></span>
      </div>
    </td>
    <td>
      <a href="<?php echo base_url('admin/cabang/edit/'.$cabang->id_cabang) ?>">
      <?php echo $cabang->nama ?> <sup><i class="fa fa-pencil"></i></sup>
      </a>
        <small>
          <br>Alamat: <?php echo $cabang->alamat ?>
          <br>No Telepon: <?php echo $cabang->no_telepon ?>
          <br>Email: <?php echo $cabang->email ?>
        </small>
    </td>
    <td>
      <?php echo $cabang->struktur_organisasi ?> 
    </td>
    <td>
      <div class="btn-group">
        <a href="<?php echo base_url('admin/cabang/edit/'.$cabang->id_cabang) ?>" 
        class="btn btn-warning btn-xs"><i class="fa fa-edit"></i></a>

        <a href="<?php echo base_url('admin/cabang/delete/'.$cabang->id_cabang) ?>" class="btn btn-danger btn-xs" onclick="confirmation(event)"><i class="fa fa-trash-o"></i></a>
      </div>
    </td>
</tr>

<?php $i++; } ?>

</tbody>
</table>
</div>
<?php echo form_close(); ?>
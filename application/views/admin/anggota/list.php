
<div class="row">
<div class="col-md-6">
    

<p>

    <?php include('tambah.php') ?>
</p>
</div>
</div>
<?php
echo form_open(base_url('admin/anggota/proses'));
?>
<p class="text-right">
<div class="btn-group">
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
      <i class="fa fa-plus"></i> Tambah Anggota
    </button>

    
    <button class="btn btn-danger" type="submit" name="hapus" onClick="check();" >
      <i class="fa fa-trash-o"></i> Hapus
    </button>
    <button class="btn btn-primary" type="submit" name="export" onClick="Export();" >
      <i class="fa fa-file-excel-o"></i> Export Excel (Terpilih)
    </button>

    <button class="btn btn-info" type="submit" name="exportAll" onClick="Export();" >
      <i class="fa fa-file-excel-o"></i> Export Excel (Semua)
    </button>
    
  </div>
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
        <th style="vertical-align: middle;" class="text-center" width="20%">NAMA</th>
        <th style="vertical-align: middle;" class="text-center" width="20%">EMAIL</th>
        <th style="vertical-align: middle;" class="text-center">STATUS ANGGOTA</th>
        <!-- <th style="vertical-align: middle;" class="text-center">JENIS</th> -->
        <th style="vertical-align: middle;" class="text-center">REG ID</th>
        <th style="vertical-align: middle;" class="text-center">KUALIFIKASI</th>
        <th width="20%"></th>
    </tr>
</thead>
<tbody>

  <?php 
  // Looping data user dg foreach
  $i=1;
  foreach($anggota as $anggota) {
    $id_anggota = $anggota->id_anggota;
    $up       = $this->up_model->listing($id_anggota);
  ?>

  <tr>
    <td class="text-center">
      <input type="checkbox" name="id_anggota[]" value="<?php echo $anggota->id_anggota ?>">
    </td>
    <td><?php echo $anggota->nama ?><br>
        <small>
        Pimpinan: <?php echo $anggota->pimpinan ?>
        <br>Telepon: <?php echo $anggota->telepon ?>
        <br>Alamat: <br><?php echo nl2br($anggota->alamat) ?></small></td>
    <td><?php echo $anggota->email ?></td>
    <td><?php echo $anggota->status_anggota == 'Yes' ? 'Sudah' : 'Belum' ?> Dikonfirmasi</td>
    <!-- <td><?php //echo $anggota->jenis_anggota ?></td> -->
    <td><?php echo $anggota->reg_id ?></td>
    <td><?php echo $anggota->kualifikasi_anggota ?></td>
    <td>
      <div class="btn-group">
        <?php if($anggota->status_anggota!="Yes") { ?>
          <a href="<?php echo base_url('admin/anggota/konfirmasi/'.$anggota->id_anggota) ?>" class="btn btn-info btn-sm" title="Konfirmasi Anggota"><i class="fa fa-check"></i> Konfirmasi</a>
        <?php } ?>
        <a href="<?php echo base_url('admin/anggota/edit/'.$anggota->id_anggota) ?>" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
        <a href="<?php echo base_url('admin/anggota/delete/'.$anggota->id_anggota) ?>" class="btn btn-danger btn-sm" onclick="confirmation(event)"><i class="fa fa-trash-o"></i></a>
      </div>
    </td>
  </tr>

  <?php $i++; } //End looping ?>
</tbody>
</table>
</div>


<?php echo form_close(); ?>
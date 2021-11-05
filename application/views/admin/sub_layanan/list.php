<p>
  <?php include('tambah.php') ?>
</p>



<table class="table table-bordered table-hover table-striped" id="example1">
<thead class="bordered-darkorange">
<tr>
    <th>#</th>
    <th>Nama Sub Layanan</th>
    <th>Slug</th>
    <th>Urutan</th>
    <th>Action</th>
</tr>
</thead>
<tbody>

<?php $i=1; foreach($sub_layanan as $sub_layanan) { ?>

<tr class="odd gradeX">
    <td><?php echo $i ?></td>
    <td><?php echo $sub_layanan->nama_sub_layanan ?></td>
    <td><?php echo $sub_layanan->slug_sub_layanan ?></td>
    <td><?php echo $sub_layanan->urutan ?></td>
    <td>
      
      <a href="<?php echo base_url('admin/sub_layanan/edit/'.$sub_layanan->id_sub_layanan) ?>" 
      class="btn btn-warning btn-xs"><i class="fa fa-edit"></i></a>

      <a href="<?php echo base_url('admin/sub_layanan/delete/'.$sub_layanan->id_sub_layanan) ?>" 
      class="btn btn-danger btn-xs " onclick="confirmation(event)"><i class="fa fa-trash-o"></i></a>

    </td>
</tr>

<?php $i++; } ?>

</tbody>
</table>
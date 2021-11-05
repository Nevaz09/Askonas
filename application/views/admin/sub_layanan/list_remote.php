
<table class="table table-bordered table-hover table-striped" id="searchable">
<thead class="bordered-darkorange">
<tr>
    <th>#</th>
    <th>Nama sub layanan</th>
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

       <a class="btn btn-success btn-xs" data-toggle="modal" href="#Detail<?php echo $periode->id_periode ?>" id="modellink<?php echo $periode->id_periode ?>"><i class="fa fa-eye"></i></a>

       <script type="text/javascript">
  $(document).ready(function(){
    var url = "<?php echo base_url('admin/periode/detail/'.$periode->id_periode) ?>";
    jQuery('#modellink<?php echo $periode->id_periode ?>').click(function(e) {
        $('.modal-container').load(url,function(result){
        $('#Detail<?php echo $periode->id_periode ?>').modal({show:true});
      });
    });
  });
</script>

      <?php include('delete.php'); ?>

    </td>
</tr>

<?php $i++; } ?>

</tbody>
</table>
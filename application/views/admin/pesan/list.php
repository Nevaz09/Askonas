<table class="table table-bordered table-hover table-striped" id="example1">
<thead class="bordered-darkorange">
<tr>
    <th>#</th>
    <th>Tanggal Masuk</th>
    <th>Nama</th>
    <th>Subjek</th>
    <th>Pesan</th>
    <th>Balasan</th>
    <th>Action</th>
</tr>
</thead>
<tbody>

<?php $i=1; foreach($pesan as $pesan) { ?>

<tr class="odd gradeX">
    <td><?php echo $i ?></td>
    <td><?php echo date('d F Y, h:i', strtotime($pesan->tanggal)) ?></td>
    <td><?php echo $pesan->nama ?></td>
    <td><?php echo $pesan->subject ?></td>
    <td><?php echo $pesan->pesan ?></td>
    <td>
      <a href="<?php echo base_url('admin/pesan/detail/'.$pesan->id_pesan) ?>" 
          class="btn btn-primary btn-xs "><i class="fa fa-eye"></i>&nbsp;Balasan</a>
    </td>
    <td>
      <a href="<?php echo base_url('admin/email/form/'.$pesan->id_pesan) ?>" 
        class="btn btn-info btn-xs "><i class="fa fa-pencil"></i>&emsp;Balas</a>
      
      <a href="<?php echo base_url('admin/pesan/delete/'.$pesan->id_pesan) ?>" 
        class="btn btn-danger btn-xs " onclick="confirmation(event)"><i class="fa fa-trash-o"></i></a>

    </td>
</tr>

<?php $i++; } ?>

</tbody>
</table>
<table class="table table-bordered table-hover table-striped" id="example1">
<thead class="bordered-darkorange">
<tr>
    <th>#</th>
    <th>Tanggal Terkirim</th>
    <th>Email Penerima</th>
    <th>Subjek</th>
    <th>Isi Email</th>
    <th>Action</th>
</tr>
</thead>
<tbody>

<?php $i=1; foreach($email as $email) { ?>

<tr class="odd gradeX">
    <td><?php echo $i ?></td>
    <td><?php echo date('d F Y, h:i', strtotime($email->tanggal_terkirim)) ?></td>
    <td><?php echo $email->email ?></td>
    <td><?php echo $email->subject ?></td>
    <td><?php echo $email->isi ?></td>
    <td>
      <a href="<?php echo base_url('admin/email/delete/'.$email->id_email) ?>" 
        class="btn btn-danger btn-xs " onclick="confirmation(event)"><i class="fa fa-trash-o"></i></a>

    </td>
</tr>

<?php $i++; } ?>

</tbody>
</table>
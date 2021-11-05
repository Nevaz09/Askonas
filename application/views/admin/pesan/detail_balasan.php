<div class="row">

<div class="col-md-4">
    <div class="row">
        <div class="col-md-12">
            <div class="form-group form-group-lg">
            <label>Email</label>
            <input readonly="readonly" type="text" name="email_penerima" class="form-control" placeholder="Email Penerima" required="required" value="<?php echo $pesan->email ?>">
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group form-group-lg">
            <label>Subjek</label>
            <input type="hidden" name="id_pesan" value="<?php echo $pesan->id_pesan ?>">
            <input readonly="readonly" type="text" name="email_penerima" class="form-control" placeholder="Email Penerima" required="required" value="<?php echo $pesan->subject ?>">
            </div>
        </div>
    </div>
</div>

<div class="col-md-8">
<div class="form-group form-group-lg">
<label>Isi Email Pengirim</label>
<textarea readonly="readonly" name="isi_email_pengirim" class="form-control" placeholder="Isi email pengirim"><?php echo $pesan->pesan ?></textarea>
</div>

</div>
</div>

<table class="table table-bordered table-hover table-striped" id="example1">
    <hr><h5>Daftar Balasan</h5>
<thead class="bordered-darkorange">
<tr>
    <th>#</th>
    <th>Tanggal Terkirim</th>
    <th>Subjek</th>
    <th>Isi Email</th>
</tr>
</thead>
<tbody>

<?php $i=1; foreach($email as $email) { ?>

<tr class="odd gradeX">
    <td><?php echo $i ?></td>
    <td><?php echo date('d F Y, h:i', strtotime($email->tanggal_terkirim)) ?></td>
    <td><?php echo $email->subject ?></td>
    <td><?php echo $email->isi ?></td>
</tr>

<?php $i++; } ?>

</tbody>
</table>
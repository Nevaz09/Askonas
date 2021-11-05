<p class="text-right">
	<a href="<?php echo base_url('admin/anggota/cetak/'.$anggota->id_anggota) ?>" target="_blank" class="btn btn-success btn-sm">
      <i class="fa fa-print"></i> Cetak Profil
    </a>
    <a href="<?php echo base_url('admin/anggota/edit/'.$anggota->id_anggota) ?>" class="btn btn-info btn-sm">
      <i class="fa fa-edit"></i> Update
    </a>
    <a href="<?php echo base_url('admin/anggota/kursus/'.$anggota->id_anggota) ?>" class="btn btn-primary btn-sm">
      <i class="fa fa-graduation-cap"></i> Kursus
    </a>
</p>

<div class="row">
	<div class="col-md-5">
		 <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
		<?php if($anggota->gambar != "") { ?>
			<img src="<?php echo base_url('assets/upload/anggota/'.$anggota->gambar) ?>" alt="<?php echo $anggota->nama ?>" class="img img-thumbnail img-circle img-responsive">
		<?php }else{ ?>
			<img src="<?php echo base_url('assets/admin/dist/img/boxed-bg.jpg') ?>" alt="<?php echo $anggota->nama ?>" class="img img-thumbnail img-circle">
		<?php } ?>
		</div>
				<hr>
                <h3 class="profile-username text-center"><?php echo $anggota->nama ?></h3>

                <p class="text-muted text-center"><?php echo $anggota->email ?></p>
                <table class="table">
                	<tbody>
                		<tr>
                			<td>Username</td>
                			<td>: <?php echo $anggota->email ?></td>
                		</tr>
                		<tr>
                			<td>Password</td>
                			<td>: <?php echo $anggota->password_hint ?></td>
                		</tr>
                	</tbody>
                </table>
            </div>
        </div>
	</div>
	<div class="col-md-7">
		<table class="table">
			<thead>
				<tr>
					<th width="30%">Nama</th>
					<th width="1%">:</th>
					<th><?php echo $anggota->nama ?></th>
				</tr>
				<tr>
					<th width="25%">Tempat, tanggal lahir</th>
					<th width="1%">:</th>
					<th><?php echo $anggota->tempat_lahir.', '.date('d-m-Y',strtotime($anggota->tanggal_lahir)) ?></th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Email</td>
					<td>:</td>
					<td><?php echo $anggota->email ?></td>
				</tr>
				<tr>
					<td>Telepon</td>
					<td>:</td>
					<td><?php echo $anggota->telepon ?></td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td>:</td>
					<td><?php echo $anggota->alamat ?></td>
				</tr>
				<tr>
					<td>Jenis anggota</td>
					<td>:</td>
					<td><?php echo $anggota->jenis_anggota ?></td>
				</tr>
				<tr>
					<td>Anggota Ditampilkan?</td>
					<td>:</td>
					<td><?php echo $anggota->status_anggota ?></td>
				</tr>
				<tr>
					<td>Testimoni ditampilkan?</td>
					<td>:</td>
					<td><?php echo $anggota->status_testimoni ?></td>
				</tr>
				
				<tr>
					<td>Isi Testimoni</td>
					<td>:</td>
					<td><?php echo $anggota->isi_testimoni ?></td>
				</tr>
				<tr>
					<td>Keywords di Google</td>
					<td>:</td>
					<td><?php echo $anggota->keywords ?></td>
				</tr>
				<tr>
					<td>IP Address</td>
					<td>:</td>
					<td><?php echo $anggota->ip_address ?></td>
				</tr>
				<tr>
					<td>Tanggal update</td>
					<td>:</td>
					<td><?php echo $anggota->tanggal ?></td>
				</tr>
			</tbody>
		</table>
	</div>
</div>
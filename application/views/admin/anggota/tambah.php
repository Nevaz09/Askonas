

<?php echo form_open_multipart(base_url('admin/anggota'),'id="tambah"') ?>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Anggota Baru</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-5">
            <div class="form-group has-error">
              <label class="text-danger">Nama anggota <span class="text-danger">*</span></label>
              <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama lengkap" value="<?php echo set_value('nama') ?>">
            </div>

            <div class="form-group has-error">
              <label class="text-danger">Nama Pimpinan/CP <span class="text-danger">*</span></label>
              <input type="text" name="pimpinan" id="pimpinan" class="form-control" placeholder="Nama Pimpinan" value="<?php echo set_value('pimpinan') ?>">
            </div>

            <div class="form-group">
              <label>Telepon</label>
              <input type="text" name="telepon" id="telepon" class="form-control" placeholder="Telepon" value="<?php echo set_value('telepon') ?>">
            </div>

            <div class="form-group">
              <label>Email</label>
              <input type="email" name="email" id="email" class="form-control" placeholder="Email" value="<?php echo set_value('email') ?>">
            </div>

            <div class="form-group">
              <label>Alamat website (jika ada)</label>
              <input type="text" name="website" id="website" class="form-control" placeholder="Website" value="<?php echo set_value('website') ?>">
            </div>

            <div class="form-group">
              <label>Jenis anggota</label>
              <select name="jenis_anggota" class="form-control">
                <option value="Perorangan">Perorangan</option>
                <option value="Perusahaan">Perusahaan</option>
                <option value="Organisasi">Organisasi</option>
              </select>
            </div>
            
          </div>

          <div class="col-md-7">

            <div class="form-group">
              <label>Alamat rumah/kantor</label>
              <textarea name="alamat" id="alamat" class="form-control" placeholder="Alamat"><?php echo set_value('alamat') ?></textarea>
            </div>

            <div class="form-group">
              <label>Status anggota</label>
              <select name="status_anggota" class="form-control">
                <option value="No">Belum Dikonfirmasi</option>
                <option value="Yes">Sudah Dikonfirmasi</option>
              </select>
            </div>

            <div class="form-group">
              <label>Kualifikasi anggota</label>
              <select name="kualifikasi_anggota" class="form-control">
                <option value="K">K</option>
                <option value="M">M</option>
                <option value="B">B</option>
              </select>
            </div>

            <div class="form-group">
              <label>REG ID</label>
              <input type="text" maxlength="8" minlength="8" name="reg_id" placeholder="REG ID" class="form-control" />
            </div>

            <div class="form-group">
              <label>Cabang</label>
              <select name="id_cabang" class="form-control">
                <?php
                  foreach ($cabang as $cabang) {
                    echo "<option value='$cabang->id_cabang'>$cabang->nama</option>";
                  }
                ?>
              </select>
            </div>

            <div class="form-group">
              <label>Upload Foto/Logo</label>
              <div class="input-group">
                  <div class="custom-file">
                    <input type="file" name="gambar" id="gambar" class="custom-file-input" placeholder="gambar" value="<?php echo set_value('gambar') ?>">
                    <label class="custom-file-label" for="exampleInputFile">Upload Foto/Logo</label>
                  </div>
              </div>
            </div>

            <div class="form-group btn-group">
              <button type="submit" name="submit" class="btn btn-success btn-lg"><i class="fa fa-save"></i> Simpan Data</button>
              <button type="reset" name="reset" class="btn btn-info btn-lg"><i class="fa fa-cut"></i> Reset</button>
              <button type="button" class="btn btn-secondary btn-lg" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
            </div>


          </div>
        </div>
      </div>
      <div class="modal-footer">
        
        
      </div>
    </div>
  </div>
</div>


<script>
$().ready(function() {
  // validate signup form on keyup and submit
  $("#tambah").validate({
    rules: {
      nama: {
        required: true,
        minlength: 4
      },
      email: {
        required: false,
        email: true
      },
    },
    messages: {
      nama: {
        required: "Isi nama dengan lengkap",
        minlength: "Nama minimal 4 karakter"
      },
      email: "Masukkan alamat email",
    }
  });
});
</script>
<?php echo form_close(); ?>
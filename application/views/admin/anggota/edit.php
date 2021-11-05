<?php echo form_open_multipart(base_url('admin/anggota/edit/'.$anggota->id_anggota),'id="tambah"') ?>

    <div class="row">
      <div class="col-md-5">
        <div class="form-group has-error">
          <label class="text-danger">Nama anggota <span class="text-danger">*</span></label>
          <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama lengkap" value="<?php echo $anggota->nama ?>">
        </div>

        <div class="form-group has-error">
              <label class="text-danger">Nama Pimpinan/CP <span class="text-danger">*</span></label>
              <input type="text" name="pimpinan" id="pimpinan" class="form-control" placeholder="Nama Pimpinan" value="<?php echo $anggota->pimpinan ?>">
            </div>

        <div class="form-group">
          <label>Telepon</label>
          <input type="text" name="telepon" id="telepon" class="form-control" placeholder="Telepon" value="<?php echo $anggota->telepon ?>">
        </div>

        <div class="form-group">
          <label>Email anggota</label>
          <input type="email" name="email" id="email" class="form-control" placeholder="Email" value="<?php echo $anggota->email ?>">
        </div>

        <div class="form-group">
          <label>Alamat website (jika ada)</label>
          <input type="text" name="website" id="website" class="form-control" placeholder="Website" value="<?php echo $anggota->website ?>">
        </div>

          <div class="form-group">
            <label>Jenis anggota</label>
            <select name="jenis_anggota" class="form-control">
              <option value="Perorangan">Perorangan</option>
              <option value="Perusahaan" <?php if($anggota->jenis_anggota=="Perusahaan") { echo "selected"; } ?>>Perusahaan</option>
              <option value="Organisasi" <?php if($anggota->jenis_anggota=="Organisasi") { echo "selected"; } ?>>Organisasi</option>
            </select>
          </div>
          
        
      </div>

      <div class="col-md-7">

        <div class="form-group">
          <label>Alamat rumah/kantor</label>
          <textarea name="alamat" id="alamat" class="form-control" placeholder="Alamat"><?php echo $anggota->alamat ?></textarea>
        </div>

        <div class="form-group">
          <label>Status anggota</label>
          <select name="status_anggota" class="form-control">
            <option value="No" <?php if($anggota->status_anggota == 'No') echo 'selected'?>>Belum Dikonfirmasi</option>
            <option value="Yes" <?php if($anggota->status_anggota == 'Yes') echo 'selected'?>>Sudah Dikonfirmasi</option>
          </select>
        </div>

        <div class="form-group">
          <label>Kualifikasi anggota</label>
          <select name="kualifikasi_anggota" class="form-control">
            <option value="K">K</option>
            <option value="M" <?php if($anggota->kualifikasi_anggota=="M") { echo "selected"; } ?>>M</option>
            <option value="B" <?php if($anggota->kualifikasi_anggota=="B") { echo "selected"; } ?>>B</option>
          </select>
        </div>

        <div class="form-group">
          <label>REG ID</label>
          <input type="text" maxlength="8" minlength="8" name="reg_id" value="<?php echo $anggota->reg_id?>" class="form-control" />
        </div>

        <div class="form-group">
          <label>Cabang</label>
          <select name="id_cabang" class="form-control">
            <?php
              foreach ($cabang as $cabang) {
                if($cabang->id_cabang == $anggota->id_cabang) { 
                  echo "<option value='$cabang->id_cabang' selected>$cabang->nama</option>";
                } else {
                  echo "<option value='$cabang->id_cabang'>$cabang->nama</option>";
                }
              }
            ?>
          </select>
        </div>

        <div class="form-group">
          <label>Upload Foto/Logo</label>
          <div class="input-group">
              <div class="custom-file">
                <input type="file" name="gambar" id="gambar" class="custom-file-input" placeholder="gambar" value="<?php echo $anggota->gambar ?>">
                <label class="custom-file-label" for="exampleInputFile">Upload Foto/Logo</label>
              </div>
          </div>
        </div>

        <div class="form-group">
          <button type="submit" name="submit" class="btn btn-success btn-lg"><i class="fa fa-save"></i> Simpan Data</button>
          <button type="reset" name="reset" class="btn btn-info btn-lg"><i class="fa fa-cut"></i> Reset</button>
         
        </div>


      </div>
    </div>
  
<?php echo form_close(); ?>

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
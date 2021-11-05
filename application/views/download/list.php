<section class="bg-contact-us">
  <div class="container">
    <div class="row">
      <div class="our-services-option">
        <!-- .section-header -->
        <div class="row">
          <div class="col-sm-12">
            <h2 class="text-center">Produk Hukum Jasa Konstruksi</h2>
            <p>
              Berikut adalah produk-produk hukum yang berkaitan dengan dunia konstruksi untuk bersama-sama
              dapat kita pelajari sehingga bisa menjadi pedoman kita dalam mengembangkan dunia konstruksi Indonesia.
            </p>
          </div>
          
          <!-- <div class="col-md-12">
            <div class="row"> -->
              <div class="col-md-4 col-sm-12">
                <p>Daftar Kategori Unduhan</p>
                <?php 
                  $uri3 = $this->uri->segment(3);
                  $keterangan_kategori = '.';
                  echo "<a href='".base_url('download')."' class='btn btn-danger btn-block ".($uri3 == "" ? 'active' : '')."'>Semua Kategori</a>";
                  foreach ($list_kategori_download as $list_kategori_download) {
                    $active = ($uri3 == $list_kategori_download->slug_kategori_download) ? 'active' : '';
                    if(($uri3 == $list_kategori_download->slug_kategori_download)) 
                    $keterangan_kategori = " pada kategori $list_kategori_download->nama_kategori_download.";
                    echo "<a href='".base_url('download/kategori/'.$list_kategori_download->slug_kategori_download)."' class='btn btn-danger btn-block $active'>$list_kategori_download->nama_kategori_download</a>";
                  }
                ?>
              </div>
              
              <div class="col-md-8 col-sm-12">
                  Berikut adalah file yang dapat anda unduh<?php echo $keterangan_kategori ?>
                  <hr/>
                  <!-- <ul> -->
                    <?php foreach($download as $download) { ?>
                    <!-- <li> -->
                      <a href="<?php echo base_url('download/unduh/'.$download->id_download) ?>" class="text-danger" target="_blank">
                      &emsp;<?php echo $download->judul_download ?>
                      </a>
                      <br>
                    <!-- </li> -->
                    <?php } ?>
                  <!-- </ul> -->
              </div>
            <!-- </div>
          </div> -->
        </div>
      </div>
    </div>
  </div>
 </section>
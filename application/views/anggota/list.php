<!-- Start Contact us Section -->
<section class="bg-contact-us">
    <div class="container">
        <div class="row">
            <div class="contact-us">
                <div class="row">
                    <div class="col-md-8">
                        <h3 class="contact-title">DAFTAR ANGGOTA</h3>
                        <div class="table-responsive mailbox-messages">
                            <table id="example1" class="display table table-bordered table-hover" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th style="vertical-align: middle;" class="text-center" width="10%">NO</th>
                                        <th style="vertical-align: middle;" class="text-center" width="30%">BADAN USAHA</th>
                                        <!-- <th style="vertical-align: middle;" class="text-center" width="20%">ALAMAT</th> -->
                                        <th style="vertical-align: middle;" class="text-center">KUALIFIKASI</th>
                                        <th style="vertical-align: middle;" class="text-center">REG ID</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php 
                                    // Looping data user dg foreach
                                    $i=1;
                                    if($anggota !== NULL) {
                                    foreach($anggota as $anggota) {
                                    if($anggota->status_anggota == 'No') continue;
                                    ?>

                                    <tr>
                                        <td><?php echo $i ?></td>
                                        <td><?php echo $anggota->nama ?></td>
                                        <td><?php echo $anggota->kualifikasi_anggota ?></td>
                                        <td><?php echo $anggota->reg_id ?></td>
                                    </tr>

                                    <?php $i++; } }//End looping ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- .col-md-8 -->
                    <div class="col-md-4">
                        <h3 class="contact-title"></h3>
                        <?php echo form_open(base_url('anggota/cariAnggota')) ?>
                        
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
                                <label>Kualifikasi</label>
                                <select name="kualifikasi_anggota" class="form-control">
                                    <option value="K">K</option>
                                    <option value="M">M</option>
                                    <option value="B">B</option>
                                </select>
                            </div>
                            <div class="form-group btn-group">
                                <button type="submit" name="submit" class="btn btn-success btn-lg"><i class="fa fa-check"></i> Cari</button>
                                <button type="reset" name="reset" class="btn btn-info btn-lg"><i class="fa fa-cut"></i> Reset</button>
                            </div>
                        <?php echo form_close(); ?>

                        <!-- .contact-address -->
                        <ul class="social-icon-rounded contact-social-icon">
                            <li><a href="<?php echo $site->facebook; ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="<?php echo $site->twitter; ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="<?php echo $site->instagram; ?>"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            <!-- <li><a href="<?php echo $site->google_plus; ?>"><i class="fa fa-google" aria-hidden="true"></i></a></li> -->
                        </ul>
                    </div>
                    <!-- .col-md-4 -->
                </div>
                <!-- .row -->
            </div>
            <!-- .contact-us -->
        </div>
        <!-- .row -->
    </div>
    <!-- .container -->
</section>
<!-- End Contact us Section -->
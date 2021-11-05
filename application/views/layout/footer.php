<?php
$site = $this->konfigurasi_model->listing();
?>
<style type="text/css" media="screen">
  .kontakwa {
    z-index: 9999;
    position: fixed;
    background-color: #cc9000;
    padding: 10px;
    bottom: 0;
    right: 120px;
    font-weight: 700;
    font-size: 40px;
    color: white;
    text-align: center;
    /* border-top: solid 2px green;
    border-left: solid 2px green;
    border-right: solid 2px green; */
    min-width: 80px;
    border-radius: 0 10px 0 0;
  }
  .telepon {
    z-index: 9999;
    position: fixed;
    background-color: #cc8800;
    padding: 10px;
    bottom: 0;
    right: 200px;
    min-width: 80px;
    font-weight: 700;
    font-size: 40px;
    color: white;
    text-align: center;
    /* border-top: solid 2px #e93478;
    border-left: solid 2px #e93478;
    border-right: solid 2px #e93478; */
    border-radius: 10px 0 0 0;
  }
  .kontakwa a, .telepon a {
    color: white;
    font-size: 40px;
    font-weight: 700;
    text-align: center;
  }
  .kontakwa:hover, .telepon:hover {
    background-color: pink;

  }
</style>
<!-- <div class="telepon">
  <a href="tel:<?php echo $site->telepon ?>"><i class="fa fa-phone"></i></a>
</div>
<div class="kontakwa">
  <a href="https://wa.me/<?php echo str_replace('+','',$site->hp) ?>?text=Saya%20tertarik%20untuk%20Menggunakan%20Layanan%20di%20Perusahan%20Anda.%20Apakah%20bisa%20dibantu?" class="topbar-social-item"><i class="fa fa-whatsapp"></i>
        </a>
</div> -->
<!-- END WA -->
<?php 
$site           = $this->konfigurasi_model->listing();
$nav_profil     = $this->nav_model->nav_profil();
?>
<!-- Start Footer Section -->
<!-- <div class="container-fluid bg-footer-top">
  <div class="container">
    <div class="col-md-6 col-sm-12">
      <div class="footer-widgets">
          <div class="widgets-title">
              <h4 style="color:white;"><?php echo $site->namaweb ?></h4>
          </div>
      
          <div class="address-box">
              <ul class="address">
                  <li>
                      <i class="fa fa-map-marker" aria-hidden="true"></i>
                      <span><?php echo nl2br($site->alamat) ?></span>
                  </li>
                  <li>
                      <i class="fa fa-phone" aria-hidden="true"></i>
                      <span><?php echo $site->telepon ?></span>
                  </li>
                  <li>
                      <i class="fa fa-envelope-o" aria-hidden="true"></i>
                      <span><?php echo $site->email ?></span>

                  </li>
              </ul>
          </div>
      </div>
    </div>
    <div class="col-md-6 col-sm-12">
      <div class="footer-widgets">
          <?php echo $site->google_map ?>
      </div>
    </div>
  </div>
</div> -->

<footer>
<div class="bg-footer-top">
<div class="container">
<div class="row">
    <div class="footer-top">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="footer-widgets">
                    <div class="widgets-title">
                        <h4 style="color:white;"><?php echo $site->namaweb ?></h4>
                    </div>
                
                    <div class="address-box">
                        <ul class="address">
                            <li>
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                <span><?php echo nl2br($site->alamat) ?></span>
                            </li>
                            <li>
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <span><?php echo $site->telepon ?></span>
                            </li>
                            <li>
                                <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                <span><?php echo $site->email ?></span>

                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 col-sm-12">
                <div class="footer-widgets">
                    <?php echo $site->google_map ?>
                </div>
                
            </div>
            
        </div>
        
    </div>
    
</div>
<!-- .row -->
</div>
<!-- .container -->
</div>
<!-- .bg-footer-top -->

<!-- <div class="bg-footer-bottom">
<div class="container">
<div class="row">
    <div class="footer-bottom">
        <div class="copyright-txt">
            <p>&copy; <?php echo date('Y') ?>. Designer By <a href="http://cindiarama.com" title="Java Web Media">Java Web Media</a></p>
        </div> -->
        <!-- .copyright-txt -->
        <!-- <div class="social-box">
            <ul class="social-icon-rounded">
                <li><a href="<?php echo $site->facebook ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="<?php echo $site->instagram ?>"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                <li><a href="<?php echo $site->twitter ?>"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
            </ul>
        </div> -->
        <!-- .social-box -->

    <!-- </div> -->
    <!-- .footer-bottom -->
<!-- </div> -->
<!-- .row -->
<!-- </div> -->
<!-- .container -->
<!-- </div> -->
<!-- .bg-footer-bottom -->

</footer>

<!-- End Footer Section -->


<!-- Start Scrolling -->

<div class="scroll-img"><i class="fa fa-angle-up" aria-hidden="true"></i></div>


<!-- End Scrolling -->


</div>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v12.0" nonce="7rCsbiJq"></script>

<script type="text/javascript" src="<?php echo base_url() ?>assets/tema/assets/js/jquery-2.2.3.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/tema/assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/tema/assets/js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/tema/assets/js/jquery.waypoints.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/tema/assets/js/jquery.counterup.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/tema/assets/js/swiper.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/tema/assets/js/lightcase.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/tema/assets/js/jquery.nstSlider.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/tema/assets/js/jquery.flexslider.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/tema/assets/js/custom.map.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/tema/assets/js/plugins.isotope.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/tema/assets/js/isotope.pkgd.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/tema/assets/js/custom.isotope.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/tema/assets/js/custom.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/tema/assets/js/lightslider.js"></script>
<!-- Select2 -->
<script src="<?php echo base_url() ?>assets/admin/plugins/select2/select2.full.min.js"></script>
<!-- DataTables JS -->
<script src="<?php echo base_url() ?>assets/admin/plugins/datatables/jquery.dataTables.js"></script>
<script src="<?php echo base_url() ?>assets/admin/plugins/datatables/dataTables.bootstrap4.js"></script>
<script>
      $(document).ready(function() {
    $("#content-slider").lightSlider({
              loop:true,
              keyPress:true
          });
          $('#image-gallery').lightSlider({
              gallery:true,
              item:1,
              thumbItem:9,
              slideMargin: 0,
              speed:500,
              auto:true,
              loop:true,
              onSliderLoad: function() {
                  $('#image-gallery').removeClass('cS-hidden');
              }  
          });
  });
  </script>
<script>
  $(function () {
    $("#example1").DataTable();
  });
</script>
<script>
  $(function () {
     //Initialize Select2 Elements
    $('.select2').select2()
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    // ClassicEditor
    //   .create(document.querySelector('.editorku'))
    //   .then(function (editor) {
    //     // The editor instance
    //   })
    //   .catch(function (error) {
    //     console.error(error)
    //   })

    // bootstrap WYSIHTML5 - text editor

    // $('#keterangan').wysihtml5({
    //   toolbar: { fa: true }
    // })
  })
</script>
</html>

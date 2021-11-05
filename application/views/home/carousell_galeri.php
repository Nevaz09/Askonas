<style>
    .clearfix ul{
        list-style: none outside none;
        padding-left: 0;
        margin: 0;
    }
    .demo .item{
        width: 100%;
        margin-bottom: 20px;
    }
    .content-slider li{
        background-color: #ed3020;
        text-align: center;
        color: #FFF;
    }
    .content-slider h3 {
        margin: 0;
        padding: 70px 0;
    }
    .demo{
        width: 100%;
    }

    @media screen and (min-width: 560px) {
        .img-galeri-carousell {
            width: 100%;
            height: 300px;
        }
    }

    .img-galeri-carousell {
        width: 80%;
        height: auto;
    }
</style>

<section class="bg-servicesstyle2-section">
<div class="container-fluid bg-process-gallery">
    <div class="row">
        <div class="our-services-option">
            <div class="section-header">
                <h3 style="color: #fff">Galeri <?php echo $site->namaweb ?></h3>
            </div>
            <!-- .section-header -->
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <center>

                        <div class="demo">
                            <div class="item">            
                                <div class="clearfix">
                                    <ul id="image-gallery" class="gallery list-unstyled cS-hidden">
                                        <?php foreach ($slider2 as $slider) {
                                            echo "<li data-thumb='".base_url('assets/upload/image/'.$slider->gambar)."'> 
                                            <img src='".base_url('assets/upload/image/'.$slider->gambar)."' class='img-galeri-carousell' />
                                            </li>";
                                        }
                                        ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </center>
                </div>
                <!-- <div class="col-md-6 col-sm-12">
                    <p style="color: #fff">
                        Askonas memiliki baynak kegiatan, berikut adalah dokumentasinya.
                    </p>
                </div> -->
            </div>
            <!-- .row -->
        </div>
        <!-- .our-services-option -->
    </div>
    <!-- .row -->
</div>
<!-- .container -->
</section>


<!-- End Service Style2 Section -->


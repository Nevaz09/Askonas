<section class="bg-servicesstyle2-section">
<div class="container">
    <div class="row">
        <div class="our-services-option">
            <div class="section-header">
                <h2>Lebih dekat dengan kami di Social Media</h2>
            </div>
            <!-- .section-header -->
            <div class="row">
                <!-- Twitter subcontent -->
                <div class="col-md-4 col-sm-6 col-xs-6">
                    <div class="our-services-box">
                        <div class="our-services-items" style="max-height:300px; height:300px;overflow-y: scroll;">
                            <i class="fa fa-twitter fa-5x" style="color:#337ab7;"></i>
                            <a class="twitter-timeline" href="<?php echo $site->twitter ?>?ref_src=twsrc%5Etfw">Tweet kami</a> 
                            <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                            <!-- .our-services-content -->
                        </div>
                        <!-- .our-services-items -->
                    </div>
                    <!-- .our-services-box -->
                </div>
                <!-- End of Twitter subcontent -->

                <!-- IG subcontent -->
                <div class="col-md-4 col-sm-6 col-xs-6">
                    <div class="our-services-box">                        
                        <div class="our-services-items" style="max-height:300px; height:300px;overflow-y: scroll; overflow-x: hidden">
                            <i class="fa fa-instagram fa-5x" style="color:#eb34df;"></i>
                            <blockquote class="instagram-media" data-instgram-version="7" >
                            <a class="instagram-timeline" href="<?php echo $site->widget_instagram ?>"></a> 
                            </blockquote>
                            <script async src="//platform.instagram.com/en_US/embeds.js"></script>
                            <!-- .our-services-content -->
                        </div>
                        <!-- .our-services-items -->
                    </div>
                    <!-- .our-services-box -->
                </div>
                <!-- End of IG subcontent -->

                <!-- Youtube subcontent -->
                <div class="col-md-4 col-sm-6 col-xs-6">
                    <div class="our-services-box">
                        <div class="our-services-items" style="max-height:300px; height:300px;overflow-y: scroll;">
                            <i class="fa fa-youtube fa-5x" style="color: red; margin-bottom: 15px"></i>
                            <?php foreach($videoTerbaru as $videos) { ?>
                            <iframe
                                id="videoPlayer"
                                width="100%" height="60%" 
                                src="https://www.youtube.com/embed/<?php echo $videos->video ?>" 
                                title="YouTube video player" 
                                frameborder="0" 
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                                allowfullscreen>
                            </iframe>
                            <?php break; } ?>
                            
<!-- <div class="fb-page" data-href="<?php echo $site->facebook ?>" data-tabs="timeline" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/facebook" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/facebook">Facebook</a></blockquote></div> -->
                            <!-- .our-services-content -->
                        </div>
                        <!-- .our-services-items -->
                    </div>
                    <!-- .our-services-box -->
                </div>
                <!-- End of Youtube subcontent -->
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


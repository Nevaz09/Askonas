


<!-- Start Upcoming Events Section -->


<section class="bg-upcoming-events">
<div class="container">
<div class="row">
<div class="upcoming-events">
<div class="section-header">
    <h2>Video terbaru</h2>
</div>
<!-- .section-header -->
<div class="row">
    <?php
        $iv = 0; 
        foreach($video as $video) { 
            if($iv > 2) break; ?>
    <div class="col-md-4">
        <div class="event-items">
            <div class="event-img">
                <iframe
                    id="videoPlayer"
                    width="100%" height="320" 
                    src="https://www.youtube.com/embed/<?php echo $video->video ?>" 
                    title="YouTube video player" 
                    frameborder="0" 
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                    allowfullscreen>
                </iframe>
                <!-- .date-box -->
            </div>
            <!-- .event-img -->
            <div class="events-content">
                <div style="min-height: 120px !important;">
                <ul class="meta-post">
                    <li><i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo date('d F Y', strtotime($video->tanggal)); ?></li>
                </ul>
                <h3 style="color: #1a1818"><?php echo $video->judul; ?></h3>
                </div>
            </div>
            <!-- .events-content -->
        </div>
        <!-- .events-items -->
    </div>
    <?php
            $iv++; 
        } ?>
    <!-- .col-md-6 -->
</div>
<!-- .row -->
</div>
<!-- .upcoming-events -->
</div>
<!-- .row -->
</div>
<!-- .container -->
</section>


<!-- End Upcoming Events Section -->

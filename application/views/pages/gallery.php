<!DOCTYPE html>
<html lang="zxx">
    <head>
        <!-- meta tag -->
        <meta charset="utf-8">
        <title><?php echo $title ?? 'CDC Home'; ?></title>
        <meta name="description" content="">

        <?php $this->load->view("includes/links"); ?>
    </head>
    <body>

        <?php $this->load->view("includes/navbar"); ?>
		
        <!-- Breadcrumbs Start -->
        <div class="rs-breadcrumbs">
            <img src="<?php echo base_url() ?>assets/images/breadcrumbs-bg.jpg" alt="Breadcrumbs Image">
            <div class="container">
                <div class="breadcrumbs-content">
                    <h1 class="title"><?php echo $sub_title ?? 'CDC Service page'; ?></h1>
                    <div class="page-path text-center">
                        <ul>
                            <li><a href="<?php echo base_url() ?>">Home</a></li>
                            <li><?php echo $sub_title ?? 'CDC Service page'; ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
		<!-- Breadcrumbs End -->

        <!-- Services Start -->
        <div class="rs-gallery-section pt-90 pb-70">
            <div class="container">
                <!-- <div class="gridFilter text-center mb-30">
                    <button class="active" data-filter="*">All</button>
                    <button data-filter=".filter1">Library</button>
                    <button data-filter=".filter2">Program</button>
                    <button data-filter=".filter3">Workshop</button>
                </div> -->
                <!-- .gridFilter end-->
                <div class="row grid">
                    <?php for($i=1; $i < 57; $i++): ?>
                    <div class="col-lg-4 col-md-6 col-sm-6 mb-30 grid-item filter1 filter3">
                        <div class="single-gallery style-2">
                            <img src="<?php echo base_url() ?>assets/images/gallery/image-00<?php echo $i; ?>.<?php if($i === 2): echo 'png'; else: echo 'webp'; endif; ?>" alt="Gallery Image" />
                            <div class="popup-icon">
                                <a class="image-popup" href="<?php echo base_url() ?>assets/images/gallery/image-00<?php echo $i; ?>.<?php if($i === 2): echo 'png'; else: echo 'webp'; endif; ?>" title="Photo Title Here">
                                    <i class="fa fa-plus-circle"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <?php endfor; ?>
                </div>
            </div>
        </div>
        <!-- Services End -->
       
        <!-- Footer -->
        <?php $this->load->view("includes/footer"); ?>
        <!-- Footer -->

        <!-- Scripts -->
        <?php $this->load->view("includes/scripts"); ?>
        <!-- Scripts -->

    </body>
</html>
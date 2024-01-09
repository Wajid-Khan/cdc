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
        
        <!-- Blog Details Start -->
        <div class="rs-blog-details sec-spacer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mb-md-30">
                        <div class="h-img">
                            <img src="<?php echo base_url() ?>assets/images/blog-single/1.jpg" alt="Blog Single">
                        </div>
                        <div class="h-desc">
							<h2 class="blog-single-title primary-color"></h2>
                            <p></p>                  
                            <p></p>                  
                            <p></p>                  
                            <p></p>                  
                            <p></p>                  
                        </div>
                    </div>
                    <div class="col-lg-4 pl-40 mpl-15">
                        <div class="h-sidebar">
                            <?php $this->load->view('includes/service_page_sidebar'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog Details End -->
       
        <!-- Footer -->
        <?php $this->load->view("includes/footer"); ?>
        <!-- Footer -->

        <!-- Scripts -->
        <?php $this->load->view("includes/scripts"); ?>
        <!-- Scripts -->

    </body>
</html>
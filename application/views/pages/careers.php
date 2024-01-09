<!DOCTYPE html>
<html lang="zxx">
    <head>
        <!-- meta tag -->
        <meta charset="utf-8">
        <title><?php echo $title; ?></title>
        <meta name="description" content="">
        <!-- responsive tag -->
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- Links -->
        <?php $this->load->view('includes/links'); ?>
        <!-- Links -->

    </head>
    <body>
        
        <!-- Navbar -->
        <?php $this->load->view('includes/navbar'); ?>
        <!-- Navbar -->
        
        <!-- Breadcrumbs Start -->
        <div class="rs-breadcrumbs">
            <img src="<?php echo base_url() ?>assets/images/breadcrumbs-bg.jpg" alt="Breadcrumbs Image">
            <div class="container">
                <div class="breadcrumbs-content">
                    <h1 class="title"><?php echo $sub_title; ?></h1>
                    <div class="page-path text-center">
                        <ul>
                            <li><a href="<?php echo base_url() ?>">Home</a></li>
                            <li><?php echo $sub_title; ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Breadcrumbs End -->

        <!-- Services Start -->
        <div class="rs-services relative pt-100 pb-100">
            <div class="container">
                <div class="sec-title text-center">
                    <h2 class="section-title mb-10 kinder-pulm">Content will be updated...</h2> 
                </div>
            </div>
        </div>
        <!-- Services End -->

       
        <!-- Footer Start -->
        <?php $this->load->view('includes/footer'); ?>
        <!-- Footer End -->
        
        <!-- Scripts -->
        <?php $this->load->view('includes/scripts'); ?>
        <!-- Scripts -->
    </body>
</html>
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

        <!-- Team Single Start -->
        <div class="rs-team-single pt-100 py-5">
            <div class="container">
                <div class="row team">
                    <div class="col-lg-4 col-md-12 mb-md-30">
                        <div class="team-item text-md-center gray-bg mr-30">
                            <div class="team-img">
                                <img src="<?php echo base_url() ?>assets/avatar-1.webp" alt="team Image" />
                            </div>
                            
                            <div class="team-content kinder-pulm-bg">
                                <div class="team-top">
                                    <h4 class="team-title"><a href="<?php echo base_url('expert/dr-habib') ; ?>">Dr. Habib G Pathan</a></h4>
                                </div>
                                <div class="round-shape kinder-pulm-bg"></div>
                                <div class="team-bottom">
                                    <!-- <span class="team-subtitle">English Teacher</span> -->
                                    <ul class="team-social">
                                        <li><a href="javascript:void(0)"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="javascript:void(0)"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="javascript:void(0)"><i class="fa fa-pinterest-p"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 mb-md-30">
                        <div class="team-item text-md-center gray-bg mr-30">
                            <div class="team-img">
                                <img src="<?php echo base_url() ?>assets/avatar-1.webp" alt="team Image" />
                            </div>
                            
                            <div class="team-content kinder-pulm-bg">
                                <div class="team-top">
                                    <h4 class="team-title"><a href="<?php echo base_url('expert/dr-sadiya') ; ?>">Dr. Sadiya Akhter</a></h4>
                                </div>
                                <div class="round-shape kinder-pulm-bg"></div>
                                <div class="team-bottom">
                                    <!-- <span class="team-subtitle">English Teacher</span> -->
                                    <ul class="team-social">
                                        <li><a href="javascript:void(0)"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="javascript:void(0)"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="javascript:void(0)"><i class="fa fa-pinterest-p"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 mb-md-30">
                        <div class="team-item text-md-center gray-bg mr-30">
                            <div class="team-img">
                                <img src="<?php echo base_url() ?>assets/avatar-1.webp" alt="team Image" />
                            </div>
                            
                            <div class="team-content kinder-pulm-bg">
                                <div class="team-top">
                                    <h4 class="team-title"><a href="<?php echo base_url('expert/dr-zafar') ; ?>">Dr. Zafar Sultana</a></h4>
                                </div>
                                <div class="round-shape kinder-pulm-bg"></div>
                                <div class="team-bottom">
                                    <!-- <span class="team-subtitle">English Teacher</span> -->
                                    <ul class="team-social">
                                        <li><a href="javascript:void(0)"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="javascript:void(0)"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="javascript:void(0)"><i class="fa fa-pinterest-p"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team Single End -->

       
        <!-- Footer Start -->
        <?php $this->load->view('includes/footer'); ?>
        <!-- Footer End -->
        
        <!-- Scripts -->
        <?php $this->load->view('includes/scripts'); ?>
        <!-- Scripts -->
    </body>
</html>
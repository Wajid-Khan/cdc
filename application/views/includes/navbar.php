<?php $this->load->view('pages/custom_functions'); ?>
<!--Preloader area start here-->
<div class="preloader-section">
    <div class="preloader">
         <div class="loader"></div>
    </div>
</div>
<!--Preloader area end here-->

<!--Full width header Start-->
<div class="full-width-header">
    <!--Header Start-->
    <header id="rs-header" class="rs-header style-1">
        <!-- Menu Start -->
        <div class="menu-area menu-sticky">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-12">
                        <div class="logo-area">
                            <a href="<?php echo base_url() ?>">
                                <!-- <img src="<?php echo base_url() ?>assets/images/logo.png" alt="logo"> -->
                                <h1 class="logo-text">CDC</h1>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-12">
                        <div class="main-menu clearfix">
                            <a class="rs-menu-toggle"><i class="fa fa-bars"></i>Menu</a>
                            <nav class="rs-menu">
                                <ul class="nav-menu">
                                    <!-- Home -->
                                    <li class="<?php echo url('/') ? 'active' : ''; ?>"> <a href="<?php echo base_url() ?>">Home</a>
                                    </li>
                                    <!-- End Home --> 

                                    <!--About Start-->
                                    <li class="<?php echo url('/about-cdc') ? 'active' : ''; ?>"><a href="<?php echo base_url() ?>about-cdc">About CDC</a></li>
                                    <!--About End-->

                                    <!-- Mega Menu Start -->
                                    <li class="rs-mega-menu mega-rs menu-item-has-children"> <a href="javascript:void(0)">Services</a>
                                        <ul class="mega-menu"> 
                                            <li class="mega-menu-container">
                                                <div class="mega-menu-innner">
                                                    <div class="single-megamenu">
                                                        <ul class="sub-menu">
<li class="<?php echo url('/behavioural-therapy-hyderabad') ? 'active' : ''; ?>"><a href="<?php echo base_url() ?>behavioural-therapy-hyderabad">Behavioural Therapy</a></li>
<li class="<?php echo url('/speech-therapy-hyderabad') ? 'active' : ''; ?>"><a href="<?php echo base_url() ?>speech-therapy-hyderabad">Speech Therapy</a></li>
<li class="<?php echo url('/special-education') ? 'active' : ''; ?>"><a href="<?php echo base_url() ?>special-education">Special Education</a></li>
<li class="<?php echo url('/best-parent-training') ? 'active' : ''; ?>"><a href="<?php echo base_url() ?>best-parent-training">Parent Training</a></li>
<li class="<?php echo url('/psychotherapy-and-counselling') ? 'active' : ''; ?>"><a href="<?php echo base_url() ?>psychotherapy-and-counselling">Psychotherapy  & Counselling</a></li>
<li class="<?php echo url('/yoga-therapy') ? 'active' : ''; ?>"><a href="<?php echo base_url() ?>yoga-therapy">Yoga Therapy</a></li>
<li class="<?php echo url('/postural-and-mobility-therapy') ? 'active' : ''; ?>"><a href="<?php echo base_url() ?>postural-and-mobility-therapy">Postural & Mobility Therapy</a></li>
<li class="<?php echo url('/early-intervention-services') ? 'active' : ''; ?>"><a href="<?php echo base_url() ?>early-intervention-services">Early Intervention Services</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="single-megamenu">
                                                        <ul class="sub-menu">
<li class="<?php echo url('/cognitive-behavioural-therapy') ? 'active' : ''; ?>"><a href="<?php echo base_url() ?>cognitive-behavioural-therapy">Cognitive Behavioural Therapy</a></li> 
<li class="<?php echo url('/occupational-therapy-hyderabad') ? 'active' : ''; ?>"><a href="<?php echo base_url() ?>occupational-therapy-hyderabad">Occupational Therapy</a></li>
<li class="<?php echo url('/group-teaching') ? 'active' : ''; ?>"><a href="<?php echo base_url() ?>group-teaching">Group Teaching </a></li>
<li class="<?php echo url('/teachers-training') ? 'active' : ''; ?>"><a href="<?php echo base_url() ?>teachers-training">Teachers' Training</a></li>
<li class="<?php echo url('/certified-courses') ? 'active' : ''; ?>"><a href="<?php echo base_url() ?>certified-courses">Certified Courses</a></li>
<li class="<?php echo url('/hydrotherapy') ? 'active' : ''; ?>"><a href="<?php echo base_url() ?>hydrotherapy">Hydrotherapy</a></li>
<li class="<?php echo url('/best-developmental-pediatrician-in-hyderabad') ? 'active' : ''; ?>"><a href="<?php echo base_url() ?>best-developmental-pediatrician-in-hyderabad">Developmental Therapy</a></li>
<li class="<?php echo url('/autism-therapy-in-hyderabad') ? 'active' : ''; ?>"><a href="<?php echo base_url() ?>autism-therapy-in-hyderabad">Autism Therapy</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul> <!-- //.mega-menu -->
                                    </li>
                                    <!--Mega Menu End -->

                                    <li class="<?php echo url('/experts') ? 'active' : ''; ?>"><a href="<?php echo base_url() ?>experts">Experts</a></li>
                                    <li><a href="<?php echo base_url() ?>testimonials">Testimonials</a></li>
                                    <li class="<?php echo url('/gallery') ? 'active' : ''; ?>"><a href="<?php echo base_url() ?>gallery">Gallery</a></li>
                                    <li class="<?php echo url('/careers') ? 'active' : ''; ?>"><a href="<?php echo base_url() ?>careers">Careers</a></li>
                                    <li class="<?php echo url('/centers') ? 'active' : ''; ?>"><a href="<?php echo base_url() ?>centers">Centers</a></li>
                                    <li class="<?php echo url('/blogs') ? 'active' : ''; ?>"><a href="<?php echo base_url() ?>blogs">Blogs</a></li>
                                    <li class="<?php echo url('/contact-us') ? 'active' : ''; ?>"><a href="<?php echo base_url() ?>contact-us">Contact</a></li>
                                </ul> <!-- //.nav-menu -->
                            </nav>
                        </div> <!-- //.main-menu -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Menu End -->
    </header>
    <!--Header End-->

    <!-- Toolbar Start -->
    <div class="rs-toolbar hidden-md">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="rs-toolbar-left">
                        <div class="welcome-message">
                            <i class="fa fa-map-marker"></i>
                            <span>Toli Chowki, Hyderabad, Telangana 500008</span> 
                        </div>
                        <div class="welcome-message">
                            <i class="fa fa-phone"></i>
                            <span><a href="tel:+919391138499">+91 9391138499</a></span> 
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="rs-toolbar-right">
                        <div class="toolbar-share-icon">
                            <ul>
                                <li><a href="javascript:void(0)"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="fa fa-pinterest-p"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="fa fa-linkedin"></i></a></li>
                                <li><a class="hidden-xs rs-search" data-target=".search-modal" data-toggle="modal" href="javascript:void(0)"><i class="fa fa-search"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Toolbar End -->
</div>
<!--Full width header End-->
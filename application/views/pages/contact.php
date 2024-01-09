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
        <style>
            .contact-page-section .contact-address-section .contact-info p{
                max-width: 100%;
            }
        </style>
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

        <!-- Contact Section Start -->
        <div class="contact-page-section sec-spacer">
            <div class="container">
                <div class="row contact-address-section pb-100">
                    <div class="col-md-6 mb-sm-30">
                        <div class="contact-info contact-address text-center kinder-pulm-bg">
                            <div class="contact-icon kinder-pulm">
                                <i class="fa fa-map-marker"></i>
                            </div>                          
                            <h5>Head Office</h5>
                            <p style="line-height: 18px;">Dr. Habib's Foster CDC Fourth Floor, above ICICI Bank, beside TATA Motors, Brindavan Colony, Toli Chowki, Hyderabad, Telangana 500008</p>
                        </div>
                    </div>
                    <div class="col-md-3 mb-sm-30">
                        <div class="contact-info contact-phone text-center kinder-orange-bg">
                            <div class="contact-icon kinder-orange">
                                <i class="fa fa-volume-control-phone"></i>
                            </div>                          
                            <h5>24/7 Phone Support</h5>
                            <p><a href="tel:+919391138499">+91 9391138499</a></p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="contact-info contact-email text-center kinder-blue-bg">
                            <div class="contact-icon kinder-blue">
                                <i class="fa fa-commenting-o"></i>
                            </div>                          
                            <h5>Email Us</h5>
                            <p><a href="mailto:info@cdc.com">info@cdc.com</a></p>
                        </div>
                    </div>
                </div>
                <div class="row onepage-style">
                    <div class="col-lg-6 mb-md-30 pr-25">
                        <div class="contact-comment-section">
                            <div id="form-messages"></div>
                            <form id="contact-form" method="post" action="mailer.php">
                                <fieldset>
                                    <div class="row">                                      
                                        <div class="col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label>First Name*</label>
                                                <input name="fname" id="fname" class="form-control" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label>Last Name*</label>
                                                <input name="lname" id="lname" class="form-control" type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label>Email*</label>
                                                <input name="email" id="email" class="form-control" type="email">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label>Subject *</label>
                                                <input name="subject" id="subject" class="form-control" type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row"> 
                                        <div class="col-md-12 col-sm-12">    
                                            <div class="form-group">
                                                <label>Message *</label>
                                                <textarea id="message" name="message" class="textarea form-control" rows="4"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-xs-12">         
                                            <div class="form-group mb-0">
                                                <input class="btn-send" type="button" value="Submit Now">
                                            </div>
                                        </div>
                                    </div>    
                                </fieldset>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6 pl-25">
                        <div class="g-map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15228.711644358524!2d78.4100739!3d17.4032476!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb970ddfaf8697%3A0x98ae42d7f8e9a644!2sDr.%20Habib&#39;s%20Foster%20CDC%20Child%20Neuro%20Center!5e0!3m2!1sen!2sin!4v1704057613298!5m2!1sen!2sin" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact Section End -->

       
        <!-- Footer Start -->
        <?php $this->load->view('includes/footer'); ?>
        <!-- Footer End -->
        
        <!-- Scripts -->
        <?php $this->load->view('includes/scripts'); ?>
        <!-- Scripts -->
    </body>
</html>
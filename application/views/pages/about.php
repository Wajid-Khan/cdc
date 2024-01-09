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
            .full-width-header .rs-header .menu-area .main-menu .rs-menu ul li a:hover, .full-width-header .rs-header .menu-area .main-menu .rs-menu ul li.active a, .full-width-header .rs-header .menu-area .main-menu .rs-menu ul li.about > a {
                color: #fe6500;
            }
            .rs-about .list{
                list-style: disc;
                padding-left: 30px;
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

        <div id="rs-about" class="rs-about align-items-center gray-bg sec-spacer">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Dr. Habib's Foster CDC</h2>
                        <p class="section-desc mb-15">The centre has been established to foster the growth, positive development & behaviour, special skills and overall development of children with special needs in a holistic environment.</p>
                        <p class="section-desc mb-15">Dr. Habib's Pathan. The centre has a multidisciplinary team of paediatric neurologist, development paediatricians, clinical psychologists, occupational and physical therapists, speech and language therapists, remedial educators and nutritionists.</p>
                        <p class="section-desc mb-15"></p>
                    </div>
                    <div class="col-md-6">
                        <h6>Objective: Fostering skills, growth and development of kids with special needs Fostering children with the following neuro developmental problems:</h6>
                        <ul class="list">
                            <li>Autism</li>
                            <li>ADHD</li>
                            <li>Specific learning disability dyslexia, dysgraphia, dyscalculia</li>
                            <li>Intellectual disability</li>
                            <li>Cerebral palsy</li>
                            <li>Speech and language problems</li>
                            <li>Vision and hearing issues</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <h6>Our Child Neurology Division addresses the following neurological issues of children:</h6>
                        <ul class="list">
                            <li>Epilepsy</li>
                            <li>Seizures</li>
                            <li>Headaches</li>
                            <li>Movement disorders</li>
                            <li>Stroke</li>
                            <li>Neuro genetic disorders </li>
                            <li>Inborn errors of metabolism</li>
                            <li>Neuro muscular problems</li>
                            <li>Muscular dystrophy</li>
                        </ul>
                    </div>
                    <div class="col-12 mb-5">
                        <h4>Founder / Director</h4>
                        <p class="section-desc mb-15">Dr. Habib G Pathan is an elite paediatric neurologist in Hyderabad with more than 18 years of experience in all aspects of paediatric neurology. He handles all the neurological issues of children with a diligent approach involving keen observation, evaluation of symptoms, physical examination and makes a profound diagnosis and comes out with an apt treatment plan. Owing to his extensive experience, skils and expertise in diagnosing and treatment all types of neurological disorders in children, he is the most sought-after child neurologist in Hyderabad.</p>
                    </div>
                    <div class="col-lg-5 col-md-12 mb-md-30">
                        <div class="about-img text-center">
                            <img src="http://cdc.loc/assets/image-0026.webp" alt="img02">
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-12 mpl-15 pl-40">
                        <div class="about-tab style-1 extra-padding ">
                            <div class="sec-title margin-0 text-left">

                                <h2 class="section-title primary-color"><span class="kinder-blue">Dr. Habib Khan Pathan</span>MBBS, MD(Pediatrics)</h2>

                                <h4 class="section-subtitle-right" style="font-size: 16px;"></h4>     
                                <p class="section-desc mb-15">
                                    Fellowship in Padiatrics Neurology <br>
                                    Professor of Pediatrics, <br>
                                    Deccan College of Medical Science, Hyderabad <br>
                                    Sr. Consultant Pediatric Neurologist
                                </p>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
        <!-- Footer Start -->
        <?php $this->load->view('includes/footer'); ?>
        <!-- Footer End -->
        
        <!-- Scripts -->
        <?php $this->load->view('includes/scripts'); ?>
        <!-- Scripts -->
    </body>
</html>
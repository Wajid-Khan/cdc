<!DOCTYPE html>
<html lang="zxx">
    <head>
        <!-- meta tag -->
        <meta charset="utf-8">
        <title><?php echo $title !== '' ? $title : 'Dr. Habib’s Foster CDC' ?></title>
        <meta name="description" content="">
        <!-- responsive tag -->
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- Links -->
        <?php $this->load->view('includes/links'); ?>
        <!-- Links -->

        <!-- style -->
        <style>
            .icon-style i:before{
                top:38px !important;
            }
            .pt-120{
                padding-top: 120px;
            }
            .pb-120{
                padding-bottom: 120px;
            }
            .white-bg{
                background: #fff !important;
            }
        </style>
        <!-- style -->
    </head>
    <body>
        
        <!-- Navbar -->
        <?php $this->load->view('includes/navbar'); ?>
        <!-- Navbar -->
		
		<!-- Slider Area Start -->
        <div id="rs-slider" class="slider-overlay-2">
        	<div id="home-slider">
				<!-- Item 1 -->
				<div class="item active">
					<img src="<?php echo base_url() ?>assets/img/banner/banner-1.png" alt="Best Child Development Centre in Hyderabad" />
				</div>

				<!-- Item 2 -->
				<div class="item">
					<img src="<?php echo base_url() ?>assets/img/banner/banner-2.png" alt="Developmental Therapy – A path to unlocking the full potential of your Child" />
				</div>

                <!-- Item 3 -->
                <div class="item">
                    <img src="<?php echo base_url() ?>assets/img/banner/banner-3.png" alt="Fostering growth, positive development & behavior" />
                </div>

                <!-- Item 4 -->
                <div class="item">
                    <img src="<?php echo base_url() ?>assets/img/banner/banner-4.png" alt="Fostering Special Skills and Overall Development of Your Child" />
                </div>
        	</div>         
        </div>
        <!-- Slider Area End -->
		
		<!-- CTA Start -->
        <div class="rs-kid-cta primary-bg pt-50 pb-50 d-none">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-9">
                    	<div class="cta-text white-color text-md-left">
                    	    <h2 class="margin-0 white-color">Enroll Your Child In Our School</h2>
                    	</div>
                    </div>
                    <div class="col-lg-3 col-md-3">
                    	<div class="cta-button text-md-right">
                            <a href="javascript:void(0)" class="readon hvr-ripple-out readon-cta white uppercase">Enroll Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<!-- CTA End -->

        <div class="rs-services pt-120 pb-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-12 mb-md-70">
                        <div class="single-service style-3 kinder-pulm-shape text-center">
                            <div class="service-icon">
                                <i class="flaticon-teacher-1"></i>
                            </div>
                            <div class="service-text">
                                <h3 class="service-title"><a class="kinder-pulm" href="#">Expert Therapists</a></h3>
                                <p class="service-desc">We have expert therapists who use a wide range of methods and techniques to help children overcome mental health issues, emotional and behavioral difficulties.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 mb-md-70">
                        <div class="single-service style-3 kinder-blue-shape text-center">
                            <div class="service-icon">
                                <i class="flaticon-lesson"></i>
                            </div>
                            <div class="service-text">
                                <h3 class="service-title"><a class="kinder-blue" href="#">Customized Therapies</a></h3>
                                <p class="service-desc">Based on the outcome of the initial assessment, our therapists work closely with the child and their parents to develop an individualized Care and therapy plan.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 mb-sm-70">
                        <div class="single-service style-3 kinder-orange-shape text-center">
                            <div class="service-icon">
                                <i class="flaticon-ebook"></i>
                            </div>
                            <div class="service-text">
                                <h3 class="service-title"><a class="kinder-orange" href="#">Active Participation</a></h3>
                                <p class="service-desc">We consider family members and parents as an integral part of the team. Therefore, we take inputs pertaining to child’s plan of care and goals from the parents.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="single-service style-3 kinder-green-shape text-center">
                            <div class="service-icon">
                                <i class="flaticon-leaf"></i>
                            </div>
                            <div class="service-text">
                                <h3 class="service-title"><a class="kinder-green" href="#">Holistic Approach</a></h3>
                                <p class="service-desc">Dr. Habib's CDC supports children with neurodevelopmental issues, including Autism, ADHD, learning disabilities (dyslexia, dysgraphia, dyscalculia), and more.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

		<!-- About Us Start -->
        <div id="rs-about" class="rs-about align-items-center gray-bg sec-spacer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-12 mb-md-30">
                        <div class="about-img text-center">
							<img src="<?php echo base_url() ?>assets/images/about/about-tab.png" alt="img02"/>
						</div>
                    </div>
                    <div class="col-lg-7 col-md-12 mpl-15 pl-40">
						<div class="about-tab style-1 extra-padding ">
							<div class="sec-title margin-0 text-left">

							    <h2 class="section-title primary-color"><span class="kinder-blue">Welecome to</span>Dr. Habib’s Foster CDC</h2> 

							    <h4 class="section-subtitle-right" style="font-size: 16px;">Our therapies are tailored specifically for your child’s special needs</h4>     
							    <p class="section-desc mb-15">Dr. Habib’s Foster CDC’s Child Development services help restore maximum functionality and self-sufficiency (skills and functions for daily living) in children who have lost their skills. Children with developmental disabilities and developmental delays need our services.</p>

							    <!-- <div class="author-sign">
                                    <div class="name">Director - <span>John Tyler</span></div> 
                                    <img src="<?php echo base_url() ?>assets/images/signature.png" alt="signature">
                                </div> -->
							</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About Us End -->

        <!-- Counter Up Section Start-->
        <div class="rs-counter counter-bg pt-100 pb-100">
            <div class="container">
                <div class="icon-image">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 mb-md-30">
                            <div class="rs-counter-list">
                                <div class="counter-number plus">0</div>                  
                                <h3 class="counter-desc">Children Enrolled</h3>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-md-30">
                            <div class="rs-counter-list blue-color">
                                <div class="counter-number plus">0</div>
                                <h3 class="counter-desc">Therapy hours</h3>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-sm-30">
                            <div class="rs-counter-list orange-color">
                                <div class="counter-number plus">0</div>                  
                                <h3 class="counter-desc">Happy Kids</h3>
                            </div>
                        </div>
                    </div>
                    <div class="left-bottom-image animated pulse infinite">
                        <img src="<?php echo base_url() ?>assets/images/bg/ball2.png" alt="Hand Image">
                    </div>
                </div>
            </div>
        </div>
        <!-- Counter Down Section End -->

        <!-- Services Start -->
        <div class="rs-services pt-90 pb-100">
            <div class="container">
                <div class="sec-title text-center">
                    <h2 class="section-title mb-10 kinder-pulm">Our Services</h2> 
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-50">
                        <div class="single-service style-2">
                            <div class="icon-style pulm">
                                <i class="flaticon-teacher"></i>
                            </div>
                            <div class="service-text">
                                <h3 class="service-title"><a class="kinder-pulm" href="<?php echo base_url() ?>behavioural-therapy-hyderabad">Behavioral Therapy</a></h3>
                                <p class="service-desc">Behavioral therapists employ several methods and techniques including the ones that link behaviors, rewards, and learning. They help both the parents and their child to develop positive behaviors.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-50">
                        <div class="single-service style-2">
                            <div class="icon-style blue">
                                <i class="flaticon-bus"></i>
                            </div>
                            <div class="service-text">
                                <h3 class="service-title"><a class="kinder-blue" href="<?php echo base_url() ?>speech-therapy-hyderabad">Speech Therapy</a></h3>
                                <p class="service-desc">Through targeted interventions, Speech Therapy helps enhance speech clarity, language development, and overall communication skills. Children experience improved academic performance, as communication skills are vital for learning</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-50">
                        <div class="single-service style-2">
                            <div class="icon-style orange">
                                <i class="flaticon-fast"></i>
                            </div>
                            <div class="service-text">
                                <h3 class="service-title"><a class="kinder-orange" href="<?php echo base_url() ?>autism-therapy-in-hyderabad">Autism Therapy</a></h3>
                                <p class="service-desc">Our expert team determines intervention techniques according to the needs of the child and family. Early intervention is critical. Therapy can begin as early as 18 months if developmental concerns arise.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-50">
                        <div class="single-service style-2">
                            <div class="icon-style yellow">
                                <i class="flaticon-guitar"></i>
                            </div>
                            <div class="service-text">
                                <h3 class="service-title"><a class="kinder-yellow" href="<?php echo base_url() ?>best-developmental-pediatrician-in-hyderabad">Developmental Therapy</a></h3>
                                <p class="service-desc">Developmental therapy is a multifaceted approach that helps children, overcome developmental challenges and reach their full potential. It focuses on assessing, diagnosing, and treating developmental delays or disorders.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-50">
                        <div class="single-service style-2">
                            <div class="icon-style pink">
                                <i class="flaticon-walk"></i>
                            </div>
                            <div class="service-text">
                                <h3 class="service-title"><a class="kinder-pink" href="<?php echo base_url() ?>occupational-therapy-hyderabad">Occupational Therapy</a></h3>
                                <p class="service-desc">Occupational therapists at CDC assess a child’s needs, develop customized treatment plans, and implement interventions aimed at improving children’s ability to perform daily activities. Occupational therapists work in diverse settings.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-50">
                        <div class="single-service style-2">
                            <div class="icon-style green">
                                <i class="flaticon-language"></i>
                            </div>
                            <div class="service-text">
                                <h3 class="service-title"><a class="kinder-green" href="<?php echo base_url() ?>cognitive-behavioural-therapy">Cognitive Behavioral Therapy</a></h3>
                                <p class="service-desc">CBT for children can be highly effective in treating a wide range of childhood issues, including anxiety disorders, depression, ADHD, behavioral problems, and more. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-50">
                        <div class="single-service style-2">
                            <div class="icon-style pulm">
                                <i class="flaticon-language"></i>
                            </div>
                            <div class="service-text">
                                <h3 class="service-title"><a class="kinder-pulm" href="<?php echo base_url() ?>early-intervention-services">Early Intervention Services</a></h3>
                                <p class="service-desc">Dr. Habib’s Foster CDC offers many early intervention programs ranging from programs supporting vulnerable parents to school-based programs that help improve children’s behavioral, emotional, and social skills.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-50">
                        <div class="single-service style-2">
                            <div class="icon-style blue">
                                <i class="flaticon-language"></i>
                            </div>
                            <div class="service-text">
                                <h3 class="service-title"><a class="kinder-blue" href="<?php echo base_url() ?>postural-and-mobility-therapy">Postural & Mobility Therapy</a></h3>
                                <p class="service-desc">Proper body symmetry can prove beneficial in the long run with positive outcomes. Dr. Habib’s Foster CDC offers individualized and cost-effective postural care and mobility therapy that provides both tangible and intangible benefits in the long term.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-50">
                        <div class="single-service style-2">
                            <div class="icon-style orange">
                                <i class="flaticon-language"></i>
                            </div>
                            <div class="service-text">
                                <h3 class="service-title"><a class="kinder-orange" href="<?php echo base_url() ?>psychotherapy-and-counselling">Psychotherapy & counselling</a></h3>
                                <p class="service-desc">The objective of psychotherapy is to bring change in a child’s emotions, feelings, and behaviors. Psychotherapists employ different types of psychotherapy, but they mostly rely on communication.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="viewmore-btn text-center">
                    <a class="readon readon-btn hvr-ripple-out uppercase" href="javascript:void(0)">View All Services</a>
                </div> -->
            </div>
        </div>
        <!-- Services End -->
       
        <!-- Services Start -->
        <div class="rs-services rs-classes style-1 class-bg sec-spacer2">
            <div class="container">
                <div class="sec-title text-center">
                    <h2 class="sec-title mb-10 kinder-pulm">Popular Therapies</h2> 
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-12 mb-md-30">
                        <div class="single-service text-center">
                            <div class="grid-style">
                                <div class="icon-style2">
                                    <div class="shape pulm">
                                        <i class="flaticon-teacher-1"></i>
                                    </div>
                                </div>
                                <div class="service-text">
                                    <h3 class="service-title"><a class="kinder-pulm" href="javascript:void(0)">1. Autism Therapy</a></h3>
                                    <p class="service-desc">Autism Therapy for Children: Unlocking the Path to a Brighter Future. CDC provides comprehensive therapies during the early days to ensure success at an early stage. Parents should not wait for the formal diagnosis.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 mb-md-30">
                        <div class="single-service text-center">
                            <div class="grid-style">
                                <div class="icon-style2">
                                    <div class="shape blue"><i class="flaticon-lesson"></i></div>
                                </div>
                                <div class="service-text">
                                    <h3 class="service-title"><a class="kinder-blue" href="javascript:void(0)">2. Developmental Therapy</a></h3>
                                    <p class="service-desc">Developmental Therapists at the CDC specialize in formulating customized therapies that help children with learning disabilities, developmental delays, and autism spectrum disorders. Therapies include play therapy, speech therapy, occupational therapy, and more.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 mb-sm-30">
                        <div class="single-service text-center">
                            <div class="grid-style">
                                <div class="icon-style2">
                                    <div class="shape orange"><i class="flaticon-ebook"></i></div>
                                </div>
                                <div class="service-text">
                                    <h3 class="service-title"><a class="kinder-orange" href="javascript:void(0)">3. Occupational Therapy</a></h3>
                                    <p class="service-desc">Occupational therapy is particularly valuable for children with developmental challenges. It helps children build essential skills for school, social interactions, and daily life.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="single-service text-center">
                            <div class="grid-style">
                                <div class="icon-style2">
                                    <div class="shape green"><i class="flaticon-leaf"></i></div>
                                </div>
                                <div class="service-text">
                                    <h3 class="service-title"><a class="kinder-green" href="javascript:void(0)">Cognitive Behavioral Therapy</a></h3>
                                    <p class="service-desc">CBT empowers children to regulate their emotions, reducing instances of emotional outbursts and helping them remain calm under pressure.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Services End -->

        <!-- Classes Start -->
        <div id="rs-classes" class="rs-classes style-1 class-bg sec-spacer2 d-none">
			<div class="container">
                <div class="icon-image">
    				<div class="sec-title text-center">
                        <h2 class="section-title mb-10 kinder-pulm">Popular Classes</h2> 
                        <h4 class="section-subtitle">Our Weekly Classes For Your Kids</h4>
                    </div>
    				<div class="row">
                        <div class="col-lg-6 mb-50">
                            <div class="classes-item classes-item2 blue-color">
                                <div class="classes-img">
                                    <img src="<?php echo base_url() ?>assets/images/classes/1.jpg" alt="Class Image" />
                                </div>
                                <div class="classes-body">
                                    <h4 class="classes-title"><a href="javascript:void(0)">Alphabet Matching</a></h4>
                                    <p class="classes-subtitle">Primary, Math, History</p>
                                    <span class="classes-date kinder-pulm">April 20, 2019</span>
                                    <div class="classes-desc">
                                        <p class="classes-txt"><span>Age</span> <span class="kinder-pulm">2-5 Years</span></p>
                                        <p class="classes-txt"><span>Size</span> <span class="kinder-orange">15 Seats</span></p>
                                        <p class="classes-txt margin-0"><span>Price</span> <span class="kinder-blue">$25/Day</span></p>
                                    </div>
                                    <a class="readon hvr-ripple-out small-readon kinder-pulm" href="javascript:void(0)">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-50">
                            <div class="classes-item classes-item2 blue-color">
                                <div class="classes-img">
                                    <img src="<?php echo base_url() ?>assets/images/classes/2.jpg" alt="Class Image" />
                                </div>
                                <div class="classes-body">
                                    <h4 class="classes-title"><a class="kinder-blue" href="javascript:void(0)">Colour Matching</a></h4>
                                    <p class="classes-subtitle">Primary, Math, History</p>
                                    <span class="classes-date kinder-blue">April 20, 2019</span>
                                    <div class="classes-desc">
                                        <p class="classes-txt"><span>Age</span> <span class="kinder-pulm">2-5 Years</span></p>
                                        <p class="classes-txt"><span>Size</span> <span class="kinder-orange">15 Seats</span></p>
                                        <p class="classes-txt margin-0"><span>Price</span> <span class="kinder-blue">$25/Day</span></p>
                                    </div>
                                    <a class="readon hvr-ripple-out small-readon kinder-blue" href="javascript:void(0)">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-50">
                            <div class="classes-item classes-item2 blue-color">
                                <div class="classes-img">
                                    <img src="<?php echo base_url() ?>assets/images/classes/3.jpg" alt="Class Image" />
                                </div>
                                <div class="classes-body">
                                    <h4 class="classes-title"><a class="kinder-green" href="javascript:void(0)">Starting Laptop</a></h4>
                                    <p class="classes-subtitle">Primary, Math, History</p>
                                    <span class="classes-date kinder-green">April 20, 2019</span>
                                    <div class="classes-desc">
                                        <p class="classes-txt"><span>Age</span> <span class="kinder-pulm">2-5 Years</span></p>
                                        <p class="classes-txt"><span>Size</span> <span class="kinder-orange">15 Seats</span></p>
                                        <p class="classes-txt margin-0"><span>Price</span> <span class="kinder-blue">$25/Day</span></p>
                                    </div>
                                    <a class="readon hvr-ripple-out small-readon kinder-green" href="javascript:void(0)">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-50">
                            <div class="classes-item classes-item2 blue-color">
                                <div class="classes-img">
                                    <img src="<?php echo base_url() ?>assets/images/classes/4.jpg" alt="Class Image" />
                                </div>
                                <div class="classes-body">
                                    <h4 class="classes-title"><a class="kinder-orange" href="javascript:void(0)">Learning English </a></h4>
                                    <p class="classes-subtitle">Primary, Math, History</p>
                                    <span class="classes-date kinder-orange">April 20, 2019</span>
                                    <div class="classes-desc">
                                        <p class="classes-txt"><span>Age</span> <span class="kinder-pulm">2-5 Years</span></p>
                                        <p class="classes-txt"><span>Size</span> <span class="kinder-orange">15 Seats</span></p>
                                        <p class="classes-txt margin-0"><span>Price</span> <span class="kinder-blue">$25/Day</span></p>
                                    </div>
                                    <a class="readon hvr-ripple-out small-readon kinder-orange" href="javascript:void(0)">Read More</a>
                                </div>
                            </div>
    			        </div>
    			    </div>
                    <div class="viewmore-btn text-center">
                        <a class="readon hvr-ripple-out readon-btn uppercase" href="javascript:void(0)">View All Classes</a>
                    </div>
                    <div class="right-bottom-image animated pulse infinite bottom-175">
                        <img src="<?php echo base_url() ?>assets/images/bg/ball3.png" alt="Hand Image">
                    </div>
                </div>
			</div>
        </div>
        <!-- Classes End -->
        
        <!-- Team Start -->
        <div id="rs-team" class="rs-team sec-spacer2">
            <div class="container">
                <div class="sec-title text-center">
                    <h2 class="section-title mb-10 kinder-pulm">Our Therapists/Experts</h2> 
                    <h4 class="section-subtitle">Meet Our Therapists/Experts</h4>
                </div>
				<div class="team-center-carousel owl-carousel extra-padding">
                    <div class="team-item gray-bg">
                        <div class="team-img">
                            <img src="<?php echo base_url() ?>assets/images/team/1.png" alt="team Image" />
                        </div>
                        <div class="team-content kinder-pulm-bg">
                            <div class="team-top">
                                <h4 class="team-title"><a href="javascript:void(0)">Maria Sharapova</a></h4>
                            </div>
                            <div class="team-bottom">
                                <span class="team-subtitle">English Teacher</span>
                                <ul class="team-social">
                                    <li><a href="javascript:void(0)"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="fa fa-pinterest-p"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="team-item gray-bg">
                        <div class="team-img">
                            <img src="<?php echo base_url() ?>assets/images/team/2.png" alt="team Image" />
                        </div>
                        <div class="team-content kinder-orange-bg">
                            <div class="team-top">
                                <h4 class="team-title"><a href="javascript:void(0)">Siam Hossain Don</a></h4>
                            </div>
                            <div class="team-bottom">
                                <span class="team-subtitle">Math Teacher</span>
                                <ul class="team-social">
                                    <li><a href="javascript:void(0)"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="fa fa-pinterest-p"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="team-item gray-bg">
                        <div class="team-img">
                            <img src="<?php echo base_url() ?>assets/images/team/3.png" alt="team Image" />
                        </div>
                        <div class="team-content kinder-blue-bg">
                            <div class="team-top">
                                <h4 class="team-title"><a href="javascript:void(0)">Jasica Andre Lew</a></h4>
                            </div>
                            <div class="team-bottom">
                                <span class="team-subtitle">Bangla Teacher</span>
                                <ul class="team-social">
                                    <li><a href="javascript:void(0)"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="fa fa-pinterest-p"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="team-item gray-bg">
                        <div class="team-img">
                            <img src="<?php echo base_url() ?>assets/images/team/4.png" alt="team Image" />
                        </div>
                        <div class="team-content kinder-pulm-bg">
                            <div class="team-top">
                                <h4 class="team-title"><a href="javascript:void(0)">Maria Sharapova</a></h4>
                            </div>
                            <div class="team-bottom">
                                <span class="team-subtitle">English Teacher</span>
                                <ul class="team-social">
                                    <li><a href="javascript:void(0)"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="fa fa-pinterest-p"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="team-item gray-bg">
                        <div class="team-img">
                            <img src="<?php echo base_url() ?>assets/images/team/5.png" alt="team Image" />
                        </div>
                        <div class="team-content kinder-orange-bg">
                            <div class="team-top">
                                <h4 class="team-title"><a href="javascript:void(0)">Siam Hossain Don</a></h4>
                            </div>
                            <div class="team-bottom">
                                <span class="team-subtitle">Math Teacher</span>
                                <ul class="team-social">
                                    <li><a href="javascript:void(0)"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="fa fa-pinterest-p"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="team-item gray-bg">
                        <div class="team-img">
                            <img src="<?php echo base_url() ?>assets/images/team/6.png" alt="team Image" />
                        </div>
                        <div class="team-content kinder-blue-bg">
                            <div class="team-top">
                                <h4 class="team-title"><a href="javascript:void(0)">Jasica Andre Lew</a></h4>
                            </div>
                            <div class="team-bottom">
                                <span class="team-subtitle">Bangla Teacher</span>
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
        <!-- Team End -->

        <!-- Testimonial Section Start -->
        <div class="rs-testimonial gray-bg pt-90 pb-170 mpb-70">
            <div class="container">
                <div class="sec-title text-center">
                    <h2 class="section-title mb-10 kinder-pulm">Parents Review</h2> 
                    <h4 class="section-subtitle">What Our Kids Parent Say About Us</h4>
                </div>
                <div class="testimonial-vertical-carousel">
                    <div class="row">
                        <div class="col-lg-6 mb-md-30 pl-0">
                            <div class="slider-for">
                                <div class="item">
                                    <img src="<?php echo base_url() ?>assets/images/testimonial/1.jpg" alt="image" draggable="false" />
                                </div>
                                <div class="item">
                                    <img src="<?php echo base_url() ?>assets/images/testimonial/2.jpg" alt="image" draggable="false" />
                                </div>
                                <div class="item">
                                    <img src="<?php echo base_url() ?>assets/images/testimonial/3.jpg" alt="image" draggable="false" />
                                </div>
                                <div class="item">
                                    <img src="<?php echo base_url() ?>assets/images/testimonial/4.jpg" alt="image" draggable="false" />
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 order-first">
                            <div class="slider-nav">
                                <div class="item kinder-pulm-bg">
                                    <p>Recently visited the CDC hospital Dr. Habib pathan guided us very professionally in opting for the best package and later took a lot of care in evaluating the reports and advice; The best thing about him is the overall experience leaves any patient feel secure with his best treatment.</p>
                                    <div class="author-info">
                                        <h6 class="name">MD Maulana</h6>
                                        <span>Kid Parent</span>
                                    </div>
                                </div>
                                <div class="item kinder-orange-bg">
                                    <p>Great team and setup. The staff is very cooperative and polite also they are highly trained and experienced. Results are goal-oriented. Very good experience after visiting here.</p>
                                    <div class="author-info">
                                        <h6 class="name">Anshu Pal</h6>
                                        <span>Kid Parent</span>
                                    </div>
                                </div>
                                <div class="item kinder-blue-bg">
                                    <p>A place where you find experts – qualified professionals! great attention! they give you full importance. Best place for your child. they earn your trust. great team work.</p>
                                    <div class="author-info">
                                        <h6 class="name">Tauseef Mohammed</h6>
                                        <span>Kid Parent</span>
                                    </div>
                                </div>
                                <div class="item kinder-green-bg">
                                    <p>Great team and setup. The staff is very cooperative and polite also they are highly trained and experienced. Results are goal-oriented. Very good experience after visiting here.</p>
                                    <div class="author-info">
                                        <h6 class="name">Anshu Pal</h6>
                                        <span>Kid Parent</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial Section End -->

        <!-- Latest News Start -->
        <div id="rs-blog" class="rs-blog white-bg pt-90 pb-100">
            <div class="container">
                <div class="sec-title text-center">
                    <h2 class="section-title mb-10 kinder-pulm">Latest Blog Post</h2> 
                    <h4 class="section-subtitle">Dr. Habib’s Foster CDC</h4>
                </div>
                <div class="row">
                    <?php if(!empty($posts)): foreach($posts as $post): ?>
                    <div class="col-lg-6 mb-30">
                        <div class="blog-item blog-item2">
                            <div class="blog-img">
                                <img src="<?php echo base_url('uploads/posts/') . $post->post_image; ?>" alt="<?php echo $post->post_keywords; ?>" />
                            </div>
                            <div class="blog-body">
                                <h4 class="blog-title">
                                    <a href="<?php echo base_url('blog/') . $post->post_slug ?>"><?php echo $post->post_heading; ?></a>
                                </h4>
                                
                                <ul class="blog-meta">
                                    <li>
                                        <i class="fa fa-calendar"> </i> <?php echo date('F d, Y', strtotime($post->created_at)); ?>
                                    </li>
                                </ul>

                                <p class="blog-desc">
                                    <?php echo mb_strimwidth($post->post_excert, 0, 50, '...'); ?>
                                </p>
                                <a class="readon hvr-ripple-out small-readon border" href="<?php echo base_url('blog/') . $post->post_slug ?>">Read More</a>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; endif; ?>
                </div>
                <div class="viewmore-btn text-center mt-20">
                    <a class="readon hvr-ripple-out uppercase" href="<?php echo base_url() ?>blogs">View All Blog</a>
                </div>
            </div>
        </div>
        <!-- Latest News End -->
        
        <!-- RS Gallery section start -->
        <?php $this->load->view('pages/gallery_section'); ?>
        <!-- RS Gallery section end -->

        <!-- CTA Start -->
        <div class="rs-kid-cta primary-bg pt-50 pb-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-9">
                        <div class="cta-text white-color text-md-left">
                            <h2 class="margin-0 white-color">Dr. Habib’s Foster CDC Photo Gallery</h2>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <div class="cta-button text-md-right">
                            <a href="<?php echo base_url() ?>gallery" class="readon hvr-ripple-out readon-cta white uppercase">View Gallery</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- CTA End -->
		
        <!-- Partner Start -->
        <div id="rs-partner" class="rs-partner pt-70 pb-70 d-none">
            <div class="container">
				<div class="rs-carousel owl-carousel" data-loop="true" data-items="5" data-margin="30" data-autoplay="false" data-autoplay-timeout="7000" data-smart-speed="800" data-dots="true" data-nav="false" data-nav-speed="false" data-mobile-device="2" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="3" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="3" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="5" data-md-device-nav="false" data-md-device-dots="false">
                    <div class="partner-item">
                        <a href="javascript:void(0)"><img src="<?php echo base_url() ?>assets/images/partner/1.png" alt="Partner Image"></a>
                    </div>
                    <div class="partner-item">
                        <a href="javascript:void(0)"><img src="<?php echo base_url() ?>assets/images/partner/2.png" alt="Partner Image"></a>
                    </div>
                    <div class="partner-item">
                        <a href="javascript:void(0)"><img src="<?php echo base_url() ?>assets/images/partner/3.png" alt="Partner Image"></a>
                    </div>
                    <div class="partner-item">
                        <a href="javascript:void(0)"><img src="<?php echo base_url() ?>assets/images/partner/4.png" alt="Partner Image"></a>
                    </div>
                    <div class="partner-item">
                        <a href="javascript:void(0)"><img src="<?php echo base_url() ?>assets/images/partner/5.png" alt="Partner Image"></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Partner End -->
       
        <!-- Footer -->
        <?php $this->load->view('includes/footer'); ?>
        <!-- Footer -->
        
        <!-- Script -->
        <?php $this->load->view('includes/scripts'); ?>
        <!-- Script -->
    </body>
</html>
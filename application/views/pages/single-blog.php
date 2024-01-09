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
                    <!-- <div class="page-path text-center">
                        <ul>
                            <li><a href="<?php //echo base_url() ?>">Home</a></li>
                            <li><?php //echo $sub_title; ?></li>
                        </ul>
                    </div> -->
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
                            <img src="<?php echo base_url('uploads/posts/') . $post->post_image ?>" alt="<?php echo $post->post_keywords; ?>">
                        </div>
                        <div class="h-info">
                            
                            <ul class="h-meta">
                                <li>
                                    <span class="p-date">
                                        <i class="fa fa-calendar"></i><?php echo date('F d, Y', strtotime($post->created_at)); ?>
                                    </span>
                                </li>
                            </ul>
                        </div>
                        <div class="h-desc">
                            <h2 class="blog-single-title primary-color">
                                <?php echo $post->post_heading; ?>
                            </h2>
                            <?php echo $post->post_content; ?>                 
                        </div>

                        <!-- <div class="page-nav">
                            <ul>
                                <li class="prev">
                                    <a href="javascript:void(0)">
                                        <i class="fa fa-angle-left"></i>
                                        <span>Previous Post</span>
                                    </a>
                                </li>
                                <li class="next">
                                    <a href="javascript:void(0)">
                                        <span>Next Post</span>
                                        <i class="fa fa-angle-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </div> -->


                        <div class="comment-block">
                            <div class="comment-form contact-page-section"> 
                                <h4 class="comment-title uppercase primary-color mb-10">Leave a Reply</h4>
                                <p>Your email address will not be published. Required fields are marked *</p>
                                <div class="contact-comment-section">
                                    <div id="form-messages"></div>
                                    <form id="contact-form" method="post" action="mailer.php">
                                        <fieldset>
                                            <div class="row">
                                                <div class="col-md-6 col-sm-12">
                                                    <div class="form-group">
                                                        <label>Name*</label>
                                                        <input name="name" id="name" class="form-control" type="text">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-12">
                                                    <div class="form-group">
                                                        <label>Email*</label>
                                                        <input name="email" id="email" class="form-control" type="email">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>Website</label>
                                                        <input name="website" id="website" class="form-control" type="text">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row"> 
                                                <div class="col-md-12 col-sm-12">
                                                    <div class="form-group">
                                                        <label>Comment</label>
                                                        <textarea id="message" name="message" class="textarea form-control" rows="4"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-sm-12 col-xs-12">     <div class="form-group mb-0">
                                                        <input class="btn-send" type="button" value="Submit Now">
                                                    </div>
                                                </div>
                                            </div>    
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 pl-40 mpl-15">
                        <div class="h-sidebar">
                            <div class="h-search">
                                <form class="h-search">
                                    <input type="text" placeholder="Search Here...">
                                    <span>
                                      <button type="submit"><i class="fa fa-search"></i></button> 
                                    </span>
                                </form>
                            </div>
                            <div class="h-post mb-45">
                                <h4 class="h-widget-title uppercase primary-color">Other Blogs</h4>
                                <?php if(!empty($posts)): foreach($posts as $p): ?>
                                <div class="post-item">
                                    <div class="post-img">
                                        <img src="<?php echo base_url('uploads/posts/') . $p->post_image; ?>" alt="<?php echo $p->post_keywords; ?>">
                                    </div>
                                    <div class="post-desc">
                                        <p class="post-title">
                                            <a href="<?php echo base_url('blog/') . $p->post_slug ?>"><?php echo $p->post_heading; ?></a>
                                        </p>
                                        <span class="post-admin">Admin</span>
                                        <span class="post-date"><?php echo date('F d, Y', strtotime($p->created_at)); ?></span>
                                    </div>
                                </div>
                                <?php endforeach; endif; ?>
                            </div>
                            <div class="h-caterories mb-35">
                                <?php $this->load->view('includes/service_page_sidebar'); ?>
                            </div>
                            <!-- <div class="h-caterories mb-35">
                                <h4 class="h-widget-title uppercase primary-color">Recent Comments</h4>
                                <ul>
                                    <li>
                                        <a href="javascript:void(0)">Luyes Figery on Chemestry Online Course</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">The bizarre translation was fodder</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">Education is the process of facilitating</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">When to Use Lorem Ipsum generally</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">School & College When to Use Lorem Ipsum</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="h-tags">
                                <h4 class="h-widget-title primary-color uppercase">Product Tags</h4>
                                <a href="javascript:void(0)">Science</a>
                                <a href="javascript:void(0)">Humanities</a>
                                <a href="javascript:void(0)">Diploma</a>
                                <a href="javascript:void(0)">Business</a>
                                <a href="javascript:void(0)">Sports</a>
                                <a href="javascript:void(0)">Research</a>
                                <a href="javascript:void(0)">Arts</a>
                                <a href="javascript:void(0)">Admissions</a>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog Details End -->

       
        <!-- Footer Start -->
        <?php $this->load->view('includes/footer'); ?>
        <!-- Footer End -->
        
        <!-- Scripts -->
        <?php $this->load->view('includes/scripts'); ?>
        <!-- Scripts -->
    </body>
</html>
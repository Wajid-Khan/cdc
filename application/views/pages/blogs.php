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

        <!-- Pricing Plan Start -->
        <div id="rs-blog" class="rs-blog pt-100 pb-50">
            <div class="container">
                <div class="row">
                    <?php if(!empty($posts)): foreach($posts as $post): ?>
                    <div class="col-lg-6 mb-50">
                        <div class="blog-item wow fadeInUp" data-wow-delay="0.4s">
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
            </div>
        </div>
        <!-- Pricing Plan End -->

       
        <!-- Footer Start -->
        <?php $this->load->view('includes/footer'); ?>
        <!-- Footer End -->
        
        <!-- Scripts -->
        <?php $this->load->view('includes/scripts'); ?>
        <!-- Scripts -->
    </body>
</html>
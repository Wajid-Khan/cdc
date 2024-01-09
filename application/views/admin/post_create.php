
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>CDC Dashboard</title>

    <!-- Favicons -->
		<link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
		<!-- Custom styles for this template -->
    <link href="<?php echo base_url(); ?>assets/css/dashboard.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
  </head>
  <body>
    
	<?php $this->load->view('admin/header'); ?>

	<div class="container-fluid">

	  <div class="row">
	    
	    <?php $this->load->view('admin/sidebar'); ?>

	    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
	      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
	        <h1 class="h2">Create Post</h1>
	        <div class="btn-toolbar mb-2 mb-md-0">
	          
	      	</div>
	      </div>

	      <div class="form-div">
	        <form method="post" action="<?php echo base_url('admin/posts/store'); ?>">
	        	<div class="row">
	        		<h5 class="pb-3">Post Information</h5>
						  <div class="mb-3 col-md-6">
						    <label for="post_heading" class="form-label">Post Heading</label>
						    <input type="text" class="form-control" id="post_heading" name="post_heading" required value="<?php echo set_value('post_heading'); ?>">
						  </div>
						  <div class="mb-3 col-md-6">
						    <label for="post_slug" class="form-label">Category</label>
						    <select class="form-control" name="cat_id" id="cat_id" required>
						    	<option value="" selected disabled>Select</option>
						    </select>
						  </div>
						  <div class="mb-3 col-md-12">
						    <label for="post_slug" class="form-label">Content</label>
						    <textarea name="post_content" class="form-control" id="post_content" rows="4"><?php echo set_value('post_content'); ?></textarea>
						  </div>
						  <div class="col-md-4">
						  	<button type="submit" class="btn btn-primary">Submit</button>
						  </div>
						  
						 </div>
					</form>
	      </div>
	    </main>
	  </div>
	</div>
<!-- <div class="mb-3 col-md-4">
						    <label for="post_slug" class="form-label">Post Slug</label>
						    <input type="text" class="form-control" id="post_slug" name="post_slug" required>
						  </div> -->
	<?php $this->load->view('admin/scripts'); ?>

  </body>
</html>

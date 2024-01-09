
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>CDC Dashboard</title>

    <!-- Favicons -->
		<link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">	
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
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
	        <h1 class="h2">Dashboard</h1>
	        <div class="btn-toolbar mb-2 mb-md-0">
	          <div class="btn-group me-2">
	            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
	            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
	          </div>
	          <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
	            <span data-feather="calendar"></span>
	            This week
	          </button>
	        </div>
	      </div>

	      <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>

	    </main>
	  </div>
	</div>

	<?php $this->load->view('admin/scripts'); ?>
  </body>
</html>

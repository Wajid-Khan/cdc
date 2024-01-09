<!DOCTYPE html>
<html lang="en">
<head>
  <title><?php echo $title; ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!-- Links -->
  <?php $this->load->view('includes/links'); ?>
  <!-- Latest compiled and minified CSS -->
	<style>
		.mediz-page-title-content{
			padding: 80px 0 !important;
		}
		.mediz-page-title{
			font-size: 40px !important;
			text-shadow: 1px 1px 2px #000;
		}
		.myH3Style h3, .myH3Style h4{
			margin: 20px 0 10px 0;
		}
	</style>
</head>
<body>

	<!-- Navbar -->
	<?php $this->load->view('includes/navbar'); ?>

	<div class="mediz-body-outer-wrapper ">
	  <div class="mediz-body-wrapper clearfix mediz-with-frame">
	  	
	  	<div class="mediz-page-title-wrap mediz-style-custom mediz-center-align">
          <div class="mediz-header-transparent-substitute"></div>
          <div class="mediz-page-title-overlay"></div>
          <div class="mediz-page-title-container mediz-container">
              <div class="mediz-page-title-content mediz-item-pdlr">
                  <h1 class="mediz-page-title">Appointment successful</h1>
              </div>
          </div>
      </div>
            <div class="mediz-page-wrapper" id="mediz-page-wrapper">
                <div class="gdlr-core-page-builder-body">
                    <div class="gdlr-core-pbf-sidebar-wrapper ">
                        <div class="gdlr-core-pbf-sidebar-container gdlr-core-line-height-0 clearfix gdlr-core-js gdlr-core-container">
                            <div class="gdlr-core-pbf-sidebar-content  gdlr-core-column-60 gdlr-core-pbf-sidebar-padding gdlr-core-line-height gdlr-core-column-extend-left" style="padding: 60px 0px 60px 0px;">
                                <h3 style="font-size: 22px !important;text-align: center;margin-bottom: 0;">Your appointment has been received, we contact you shortly...</h3>  
                            </div>
                        </div>
                    </div>

                </div>
            </div>

	  <?php $this->load->view('includes/footer'); ?>	
	  </div>
	</div>

	<!-- Scripts -->
	<?php $this->load->view('includes/scripts'); ?>
</body>
</html>
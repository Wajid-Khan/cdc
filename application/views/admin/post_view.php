<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard</title>

  <?php $this->load->view('admin/links'); ?>

</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <?php $this->load->view('admin/header1'); ?>

  <!-- Main Sidebar Container -->
  <?php $this->load->view('admin/sidebar1'); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Create Post</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#.">Home</a></li>
              <li class="breadcrumb-item active">Single Post</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">

            <div class="card">
              <!-- /.card-header -->
              <div class="card-header">
                <h3 class="float-right"><a href="<?php echo base_url('admin/posts'); ?>" class="btn btn-primary btn-sm"><i class="fa fa-arrow-left"></i> Back</a></h3>
              </div>
              <div class="card-body">
                <img src="<?php echo base_url('uploads/posts/') . $post->post_image; ?>" width="50%" alt="<?php echo $post->post_heading; ?>" style="margin-bottom:15px;" />
                <?php echo $post->post_content; ?>
              </div>
                
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Footer -->
  <?php $this->load->view('admin/footer'); ?>

</div>
<!-- ./wrapper -->

<?php $this->load->view('admin/script1'); ?>
<script>
  
</script>
</body>
</html>

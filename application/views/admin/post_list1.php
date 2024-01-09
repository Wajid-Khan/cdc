<?php  
$this->load->view('admin/custom_functions');
$obj = new Database;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard</title>

  <?php $this->load->view('admin/links'); ?>
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">

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
            <h1>Posts</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#.">Home</a></li>
              <li class="breadcrumb-item active">Posts</li>
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

            <?php if($msg = $this->session->flashdata('succ')): ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              <strong><?php echo $msg; ?></strong> 
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <?php endif; ?>
            
            <?php if($msg = $this->session->flashdata('fail')): ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              <strong><?php echo $msg; ?></strong> 
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <?php endif; ?>

            <div class="card">
              <!-- /.card-header -->
              <div class="card-header">
                <h3 class="float-right"><a href="<?php echo base_url('admin/posts/create'); ?>" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Create Post</a></h3>
              </div>
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Sno.</th>
                    <th width="30%">Title</th>
                    <th>Image</th>
                    <th>Post Date</th>
                    <th>Post Status</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php $i=1; if(!empty($posts)): foreach($posts as $post): ?>
                    <tr>
                      <td><?php echo $i; ?></td>
                      <td><?php echo $post->post_heading ?></td>
                      <td><img src="<?php echo base_url('uploads/posts/') . $post->post_image; ?>" width="100"> </td>
                      <td><?php echo date('d-m-Y h:i:s A', strtotime($post->created_at)); ?></td>
                      <td><?php echo ucfirst($post->post_status); ?></td>
                      <td>
<?php if($post->post_status === 'draft'): ?>
<a href="javascript:void(0)" class="text-secondary status" post-id="<?php echo $post->id; ?>" post-status="<?php echo $post->post_status; ?>"><i class="fa fa-power-off"></i></a>
<?php else: ?>
<a href="javascript:void(0)" class="text-success status" post-id="<?php echo $post->id; ?>" post-status="<?php echo $post->post_status; ?>"><i class="fa fa-power-off"></i></a>
<?php endif; ?>
                         &nbsp;&nbsp;
                        <a href="<?php echo base_url('admin/posts/view/') . $post->post_slug; ?>"><i class="fa fa-eye"></i></a> &nbsp;&nbsp;
                        <a href="javascript:void(0)" class="text-warning"><i class="fa fa-edit"></i></a> &nbsp;&nbsp;
                        <a href="javascript:void(0)" class="text-danger"><i class="fa fa-trash"></i></a>
                      </td>
                    </tr>
                    <?php $i++; endforeach; endif; ?>
                  </tbody>
                </table>
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

<!-- DataTables  & Plugins -->
<script src="<?php echo base_url(); ?>assets/backend/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/backend/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo base_url(); ?>assets/backend/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo base_url(); ?>assets/backend/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

<script>
  $(function () {
    $("#example1").DataTable();
  });
  document.addEventListener('DOMContentLoaded', function () {

    var deleteButtons = document.querySelectorAll('.status');

    deleteButtons.forEach(function (button) {
        button.addEventListener('click', function () {

            var itemId = this.getAttribute('post-id');
            var status = this.getAttribute('post-status');

            // Show confirmation dialog
            var isConfirmed = confirm("Are you sure you want to change post status");

            // If user confirms, proceed with deletion
            if (isConfirmed) {
                $.ajax({
                    url  : '<?php echo base_url('admin/posts/change_status/'); ?>',
                    type : 'post',
                    dataType:'json',
                    data : {post_id:itemId, post_status:status},
                    success:function(resp)
                    {
                        if(resp.status == 200) 
                        {
                            alert(resp.message);
                            location.reload();
                        } 
                        else 
                        {
                            alert(resp.message);
                        }
                    }
                });
            }
        });
    });
});
</script>
</body>
</html>

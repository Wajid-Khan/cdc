<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard</title>

  <?php $this->load->view('admin/links'); ?>
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/plugins/summernote/summernote-bs4.min.css">
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
              <li class="breadcrumb-item active">Create Post</li>
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

            <?php if(isset($error)): ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              <strong><?php echo $error; ?></strong> 
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
                <h3 class="float-right"><a href="<?php echo base_url('admin/posts'); ?>" class="btn btn-primary btn-sm"><i class="fa fa-arrow-left"></i> Back</a></h3>
              </div>
                <form method="post" action="<?php echo base_url() ?>admin/posts/store" enctype= multipart/form-data>
                  <div class="card-body">
                    
                    <div class="row">
                      <div class="form-group col-md-12">
                        <h4 class="border-bottom">Post Information</h4>
                      </div>
                      <div class="form-group col-md-12">
                        <label for="post_heading">Post Title <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" maxlength="255" id="post_heading" name="post_heading" placeholder="Enter Title" required value="<?php echo set_value('post_heading'); ?>">
                        <?php echo form_error('post_heading'); ?>
                      </div>

                      <!-- <div class="form-group col-md-6">
                        <label for="exampleInputPassword1">Category <span class="text-danger">*</span></label>
                        <select class="form-control" id="cat_id" name="cat_id" required>
                          <option value="" selected disabled>Select</option>
                          <?php //if($category): foreach($category as $cat): ?>
                          <option value="<?php //echo $cat->id ?>" <?php //echo set_select('cat_id', $cat->id); ?>><?php //echo $cat->cat_name ?></option>
                          <?php //endforeach; endif; ?>
                        </select>
                        <?php //echo form_error('cat_id'); ?>
                      </div> -->

                      <div class="form-group col-md-12">
                        <label for="post_image">Post Excert <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" maxlength="255" id="post_excert" name="post_excert" placeholder="Enter Excert" required value="<?php echo set_value('post_excert'); ?>">
                        <?php echo form_error('post_excert'); ?>
                      </div>

                      <div class="form-group col-md-12">
                        <label for="post_image">Post Image <span class="text-danger">*</span></label>
                        <div class="input-group">
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" name="post_image" id="post_image" required onchange="imageExtensionValidate(this)">
                            <label class="custom-file-label" for="post_image">Choose file</label>
                          </div>
                        </div>
                        <?php echo form_error('post_image'); ?>
                      </div>

                      <div class="form-group col-12">
                        <label for="exampleInputPassword1">Post Content <span class="text-danger">*</span></label>
                        <textarea id="summernote" name="post_content" required rows="4">
                          <?php echo set_value('post_content'); ?>
                        </textarea>
                        <?php echo form_error('post_content'); ?>
                      </div>

                      <div class="form-group col-md-12">
                        <h4 class="border-bottom">Seo Information</h4>
                      </div>

                      <div class="form-group col-md-12">
                        <label for="post_heading">Keywords</label>
                        <input type="text" class="form-control" maxlength="255" id="post_keywords" name="post_keywords" placeholder="Enter Keywords" value="<?php echo set_value('post_keywords'); ?>">
                        <?php echo form_error('post_keywords'); ?>
                      </div>

                      <div class="form-group col-md-6">
                        <label for="post_heading">Slug</label>
                        <input type="text" class="form-control" maxlength="255" id="post_slug" name="post_slug" placeholder="Enter Slug" value="<?php echo set_value('post_slug'); ?>">
                        <?php echo form_error('post_slug'); ?>
                      </div>

                      <div class="form-group col-md-6">
                        <label for="post_heading">Page Title</label>
                        <input type="text" class="form-control" maxlength="255" id="post_title" name="post_title" placeholder="Enter page title" value="<?php echo set_value('post_title'); ?>">
                        <?php echo form_error('post_title'); ?>
                      </div>

                      <div class="form-group col-md-12">
                        <label for="post_heading">Description</label>
                        <textarea id="post_description" maxlength="500" name="post_description" class="form-control" rows="2"><?php echo set_value('post_description'); ?></textarea>
                        <?php echo form_error('post_description'); ?>
                      </div>

                      <div class="form-group col-md-12">
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </div>

                    </div>

                  </div>
              </form>
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
<script src="<?php echo base_url(); ?>assets/backend/plugins/summernote/summernote-bs4.min.js"></script>
<script src="<?php echo base_url(); ?>assets/backend/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<script>
  $(function () {
    // Summernote
    $('#summernote').summernote({
      height: 300,
      focus: true
    });
    bsCustomFileInput.init();
  })
  function imageExtensionValidate(i) 
  {
    var validFileExtensions = ["jpg","jpeg","png","webp"];
    var fileVal = i.value;
    // alert(i.value);
    if (fileVal.length > 0) {
       var blnValid = false;
        for (var j = 0; j < validFileExtensions.length; j++) {
           var sCurExtension = validFileExtensions[j];
       if (fileVal.substr(fileVal.length - sCurExtension.length, sCurExtension.length).toLowerCase() == sCurExtension.toLowerCase()) {
                  blnValid = true;
                  break;
              }
          }
      
        if (!blnValid) {
             alert("Sorry, uploaded file is invalid, allowed extensions is: " + validFileExtensions.join(", ")+' only');
             document.getElementById('post_image').value = "";
              oInput.value = "";
              return false;
          }
    }
  }
  function createSlug(str) 
  {
    return str
      .toLowerCase()               // Convert to lowercase
      .replace(/\s+/g, '-')        // Replace spaces with hyphens
      .replace(/[^\w-]+/g, '')     // Remove non-word characters
      .replace(/--+/g, '-')        // Replace multiple hyphens with a single hyphen
      .replace(/^-+|-+$/g, '');    // Remove leading and trailing hyphens
  }

  function applySlug() 
  {
    const titleInput = document.getElementById('post_slug');
    const slugInput = document.getElementById('post_slug');

    // Get the value from the title input
    const titleValue = titleInput.value;

    // Generate the slug
    const slugValue = createSlug(titleValue);

    // Set the slug value to the slug input
    slugInput.value = slugValue;
    }

  document.addEventListener('DOMContentLoaded', function() {
    const titleInput = document.getElementById('post_slug');
    titleInput.addEventListener('focusout', applySlug);
  });
</script>
</body>
</html>

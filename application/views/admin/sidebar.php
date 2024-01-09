<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
  <div class="position-sticky pt-3">
    <ul class="nav flex-column">
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="<?php echo base_url('admin/dashboard/'); ?>">
          <span data-feather="home"></span>
          Dashboard
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('admin/posts/'); ?>">
          <span data-feather="file"></span>
          Posts List
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('admin/posts/create'); ?>">
          <span data-feather="file-plus"></span>
          Create
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('admin/category'); ?>">
          <span data-feather="grid"></span>
          Category
        </a>
      </li>
    </ul>
  </div>
</nav>
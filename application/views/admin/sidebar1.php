<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="<?php echo base_url(); ?>" class="brand-link">
    <!-- <img src="<?php echo base_url(); ?>assets/backend/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> -->
    <span class="brand-text font-weight-bold pl-1">Foster CDC</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item menu-open">
          <a href="<?php echo base_url('admin/dashboard/'); ?>" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#." class="nav-link">
            <i class="nav-icon fas fa-copy"></i>
            <p>Posts<i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?php echo base_url('admin/posts/create'); ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Create</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url('admin/posts/'); ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>List</p>
              </a>
            </li>
          </ul>
        </li>
        <!-- <li class="nav-item">
          <a href="<?php echo base_url('admin/category'); ?>" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Category
            </p>
          </a>
        </li> -->
        <li class="nav-item">
          <a href="<?php echo base_url() ?>admin/logout" class="nav-link">
            <i class="nav-icon fas fa-sign-out-alt"></i>
            <p>
              Logout
            </p>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
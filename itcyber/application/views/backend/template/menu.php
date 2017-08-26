
  <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>ITC</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>IT</b>CYBER</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">4</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 4 messages</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="#">
                      <div class="pull-left">
                        <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Support Team
                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <!-- end message -->
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        AdminLTE Design Team
                        <small><i class="fa fa-clock-o"></i> 2 hours</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Developers
                        <small><i class="fa fa-clock-o"></i> Today</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Sales Department
                        <small><i class="fa fa-clock-o"></i> Yesterday</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Reviewers
                        <small><i class="fa fa-clock-o"></i> 2 days</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">See All Messages</a></li>
            </ul>
          </li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url(); ?>assets/backend/image/anggota/<?php echo $this->session->userdata('foto'); ?>" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $this->session->userdata('nama'); ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo base_url(); ?>assets/backend/image/anggota/<?php echo $this->session->userdata('foto'); ?>" class="img-circle" alt="User Image">
                <p>
                  <?php echo $this->session->userdata('nama'); ?>
                  <small><?php echo $this->session->userdata('email'); ?></small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                  <div class="pull-left">
                    <a href="#" class="btn btn-default btn-flat">Profile</a>
                  </div>
                  <div class="pull-right">
                    <a href="<?php echo base_url(); ?>Itcyb3r/Auth/logout" class="btn btn-default btn-flat">Sign out</a>
                  </div>
                <!-- /.row -->
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $this->session->userdata('nama'); ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="">
          <a href="<?php echo base_url(); ?>Itcyb3r/backend.cpp">
            <i class="fa fa-dashboard text-aqua"></i> <span>Dashboard</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-chain text-aqua"></i> <span>Data Anggota</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <?php if ($this->session->userdata('status_active') == 1 && $this->session->userdata('status_jabatan') == 1 ): ?>
              <?php if ($this->session->userdata('id_jabatan') == 1 OR $this->session->userdata('id_jabatan') == 2 OR $this->session->userdata('id_jabatan') == 3): ?>
                  <li><a href="<?php echo base_url(); ?>Itcyb3r/anggota/angkatan.cpp"><i class="fa fa-circle-o text-aqua"></i> Angkatan</a></li>
                  <li><a href="<?php echo base_url(); ?>Itcyb3r/anggota/jabatan.cpp"><i class="fa fa-circle-o text-aqua"></i> Jabatan</a></li>
              <?php endif ?>
            <?php endif ?>
            <li><a href="<?php echo base_url(); ?>Itcyb3r/anggota/anggota.cpp"><i class="fa fa-circle-o text-aqua"></i> Anggota</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-chain text-aqua"></i> <span>News</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
              <li class="">
                <a href="<?php echo base_url(); ?>Itcyb3r/news.cpp">
                  <i class="fa fa-circle-o text-aqua"></i> <span>Artikel</span>
                </a>
              </li>
              <li class="">
                <a href="<?php echo base_url(); ?>Itcyb3r/news/tag.cpp">
                  <i class="fa fa-circle-o text-aqua"></i> <span>Tag</span>
                </a>
              </li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-chain text-aqua"></i> <span>Media</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
              <li class="">
                <a href="<?php echo base_url(); ?>Itcyb3r/Media.cpp">
                  <i class="fa fa-circle-o text-aqua"></i> <span>Galery</span>
                </a>
              </li>
              <li class="">
                <a href="<?php echo base_url(); ?>Itcyb3r/media/portfolio.cpp">
                  <i class="fa fa-circle-o text-aqua"></i> <span>Portfolio</span>
                </a>
              </li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-chain text-aqua"></i> <span>File Download</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
              <li class="">
                <a href="<?php echo base_url(); ?>Itcyb3r/File/kategori.cpp">
                  <i class="fa fa-circle-o text-aqua"></i> <span>Kategori</span>
                </a>
              </li>
              <li class="">
                <a href="<?php echo base_url(); ?>Itcyb3r/file/jenis.cpp">
                  <i class="fa fa-circle-o text-aqua"></i> <span>Jenis</span>
                </a>
              </li>
              <li class="">
                <a href="<?php echo base_url(); ?>Itcyb3r/file.cpp">
                  <i class="fa fa-circle-o text-aqua"></i> <span>Upload File</span>
                </a>
              </li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

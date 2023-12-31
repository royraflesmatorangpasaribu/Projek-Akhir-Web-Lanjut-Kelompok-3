<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="#" class="logo d-flex align-items-center ">
        <img src="assets/img/logo.png" alt="" style="border-color: black;">
        <span class="d-none d-lg-block">E-Learning</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">
        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown pe-3">
          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="assets/img/foto_def.png" alt="Profile" class="rounded-circle">
            <span class="">Super Admin</span>
          </a><!-- End Profile Iamge Icon -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
      <li class="nav-item">
        <a class="nav-link " href="<?php echo base_url('superadmin'); ?>">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Users</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
            <a href="<?php echo base_url('teacher'); ?>">
              <i class="bi bi-circle"></i><span>Teachers Tables</span>
            </a>
          </li>
          <li>
            <a href="<?php echo base_url('students'); ?>">
              <i class="bi bi-circle"></i><span>Student Tables</span>
            </a>
          </li>
          <li>
            <a href="<?php echo base_url('parents'); ?>">
              <i class="bi bi-circle"></i><span>Parents Tables</span>
            </a>
          </li>
        </ul>
      </li><!-- End Tables Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-card-list"></i><span>Class</span><i class=""></i>
        </a>
      </li><!-- End Charts Nav -->

      <li class="nav-heading">Pages</li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="#">
          <i class="bi bi-envelope"></i>
          <span>Information</span>
        </a>
      </li><!-- End Contact Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="<?= base_url('logout')?>">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>Logout</span>
        </a>
      </li><!-- End Login Page Nav -->

    </ul>

    </aside><!-- End Sidebar-->
  <main id="main" class="main">
    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active" href="<?php echo base_url('dashboard_super_admin'); ?>">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <center>
    <img src="<?php echo base_url('assets/img/greet.png'); ?>" alt="" style="height: 450px; width: 850px;"><br><br>
    </center>
    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-8">
          <div class="row">
          <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
              <div class="col-md-8">
                <div class="card-body">
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">
                    <h4><?= $user->username; ?><h4>
                  </li>

                  <li class="list-group-item"><?= $user->email; ?></li>
                  <li class="list-group-item">
                    <span class="badge badge-<?= ($user->name == 'admin') ? 'success' : 'warning'; ?>"><?= $user->name; ?></span>
                  </li>

                  <li class="list-group-item">
                    <small><a href="<?= base_url('admin') ?>">&laquo; back to user list</a></small>
                  </li>

                </ul>
                </div>
              </div>
            </div>
          </div>
          </div>
        </div><!-- End Left side columns -->

        <!-- Right side columns -->
        <div class="col-lg-4">

          
          <!-- News & Updates Traffic -->
          <div class="card">
            <div class="filter">
            </div>

            <div class="card-body pb-0">
              <h5 class="card-title">News &amp; Updates <span>| Today</span></h5>

              <div class="news">
                <div class="post-item clearfix">
                  <img src="<?php echo base_url('assets/img/news.png'); ?>" alt="">
                  <h4><a href="#">Judul Berita</a></h4>
                  <p>...</p>
                </div>

                <div class="news">
                  <div class="post-item clearfix">
                    <img src="<?php echo base_url('assets/img/news.png'); ?>" alt="">
                    <h4><a href="#">Judul Berita</a></h4>
                    <p>...</p>
                  </div>

                  <div class="news">
                    <div class="post-item clearfix">
                      <img src="<?php echo base_url('assets/img/news.png'); ?>" alt="">
                      <h4><a href="#">Judul Berita</a></h4>
                      <p>...</p>
                    </div>

                    <div class="news">
                      <div class="post-item clearfix">
                        <img src="<?php echo base_url('assets/img/news.png'); ?>" alt="">
                        <h4><a href="#">Judul Berita</a></h4>
                        <p>...</p>
                      </div>         
            </div>
          </div><!-- End News & Updates -->
        </div><!-- End Right side columns -->
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>E-Learning</span></strong>. All Rights Reserved
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <?= $this->endSection('page-content'); ?> 
<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>
<div>

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
        <a class="nav-link collapsed" href="<?php echo base_url('superadmin'); ?>">
          <i class="bi bi-layout-text-window-reverse"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      
      <li class="nav-item">
        <a class="nav-link " data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Users</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
          <li>
            <a href="<?php echo base_url('teacher'); ?>" class="active">
              <i class="bi bi-circle"></i><span>Teachers Tables</span>
            </a>
          </li>
          <li>
            <a href="<?php echo base_url('students'); ?>" >
              <i class="bi bi-circle"></i><span>Students Tables</span>
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
        <a class="nav-link collapsed" href="#">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>Logout</span>
        </a>
      </li><!-- End Login Page Nav -->

    </ul>

  </aside><!-- End Sidebar-->
  <main id="main" class="main">
    <div class="pagetitle">
      <h1>Teacher</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Users</a></li>
          <li class="breadcrumb-item active" href="<?php echo base_url('teachers'); ?>">Teachers Tables</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section teachers">
      <div class="row">

        <!-- Left side columns -->
        <div class="container-fluid">

           <!-- Teacher Tabel -->

           <div class="col-12">
              <div class="card recent-sales overflow-auto">

                <div class="card-body">
                  <h5 class="card-title">Teachers Table </h5>
                <button
                    type="button"
                    class="btn btn-primary btn-icon-split"
                    data-bs-toggle="modal"
                    data-bs-target="#addParents"
                >
                    <span class="text">Add Data</span>
                </button>
              </div>
              <div class="card-body">             
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                          <th scope="col">No</th>
                          <th scope="col">Name</th>
                          <th scope="col">Class</th>
                          <th scope="col">NIP</th>
                          <th scope="col">Username</th>
                          <th scope="col">Password</th>
                          <th scope="col">Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        
                        <tr>
                          <th scope="row">1</th>
                          <td>Maulana</td>
                          <td>A</td>
                          <td>1283791247010147</td>
                          <td>@maulana.id</td>
                          <td>456</td>
                          <td>
                            <button
                                type="button"
                                class="btn btn-warning btn-icon-split"
                                data-bs-toggle="modal"
                                data-bs-target="#editParents"
                            >
                                <span class="text">Edit</span>
                            </button>
                            <a href="#">
                            <button class="btn btn-danger btn-icon-split" data-bs-target="#deleteParents">
                              <span class="icon text-white-50">
                                <i class="fas fa-trash"></i>
                              </span>
                              <a class="text-white" href="<?php echo base_url('teacher'); ?>" onclick="return confirm('Yakin Data Akan Dihapus');">Delete</a>
                            </button>     
                          </a>      
                        </td>
                        </tr>
                        <div
                          class="modal fade"
                          id="editParents"
                          tabindex="-1"
                          aria-labelledby="exampleModalLabel"
                          aria-hidden="true" >
                          <div class="modal-dialog">
                              <div class="modal-content">
                                  <div class="modal-header">
                                  <h1 class="modal-title fs-5" id="exampleModalLabel">
                                      Edit Teacher
                                  </h1>
                                  <button
                                      type="button"
                                      class="btn-close"
                                      data-bs-dismiss="modal"
                                      aria-label="Close"
                                  ></button>
                                  </div>
                                  <div class="modal-body">
                                  <!-- Vertical Form -->
                                    <form class="row g-3"
                                          action="teacher"
                                          method="POST"
                                          enctype="multipart/form-data"
                                    >
                                      <div class="col-12">
                                        <label for="inputNanme4" class="form-label">Name</label>
                                        <input type="text" class="form-control" id="nis">
                                      </div>
                                      <div class="col-12">
                                        <label for="inputNanme4" class="form-label">Class</label>
                                        <select name="class" type="text" class="form-control" id="class">
                                          <?php
                                          foreach($class as $item){
                                          ?>
                                            <option value="<?= $item['id'] ?>">
                                              <?= $item['name_class'] ?>

                                            </option>
                                          <?php
                                          }
                                          ?>
                                        </select>
                                      </div>
                                      <div class="col-12">
                                        <label for="inputNanme4" class="form-label">NIP</label>
                                        <input type="text" class="form-control" id="nis">
                                      </div>
                                      <div class="col-12">
                                        <label for="inputEmail4" class="form-label">Username</label>
                                        <input type="email" class="form-control" id="inputEmail4">
                                      </div>
                                      <div class="col-12">
                                        <label for="inputPassword4" class="form-label">Password</label>
                                        <input type="password" class="form-control" id="inputPassword4">
                                      </div>
                                      <br>
                                      <div class="text-center">
                                        <a type="submit" class="btn btn-primary" href="<?php echo base_url('teacher'); ?>">Submit</a>
                                        <button type="reset" class="btn btn-secondary">Reset</button>
                                      </div>
                                    </form><!-- Vertical Form -->
                                    </div>
                              </div>
                            </div>
                      </tbody>
                  </table>
                </div>
              </div>
            </div><!-- End Teacher Table -->
          </div>
        </div><!-- End Left side columns -->
        <!-- Right side columns -->
        <div class="col-lg-4">

          
        </div><!-- End Right side columns -->
      </div>
    </section>
        <div
                        class="modal fade"
                        id="addParents"
                        tabindex="-1"
                        aria-labelledby="exampleModalLabel"
                        aria-hidden="true"
                      >
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">
                                    Add Data
                                </h1>
                                <button
                                    type="button"
                                    class="btn-close"
                                    data-bs-dismiss="modal"
                                    aria-label="Close"
                                ></button>
                                </div>
                                <div class="modal-body">
                                <!-- Vertical Form -->
                              <form class="row g-3 " action="<?= base_url('/teacher/store') ?>"
                                    method="POST"
                                    enctype="multipart/form-data"
                              >
                                <div class="col-12">
                                  <label for="inputNanme4" class="form-label">Name</label>
                                  <input type="text" class="form-control" id="nis">
                                </div>
                                <div class="col-12">
                                  <label for="inputNanme4" class="form-label">Class</label>
                                  <select name="class" type="text" class="form-control" id="class">
                                          <?php
                                          foreach($class as $item){
                                          ?>
                                            <option value="<?= $item['id'] ?>">
                                              <?= $item['name_class'] ?>

                                            </option>
                                          <?php
                                          }
                                          ?>
                                        </select>
                                </div>
                                <div class="col-12">
                                  <label for="inputNanme4" class="form-label">NIP</label>
                                  <input type="text" class="form-control" id="nis">
                                </div>
                                <div class="col-12">
                                  <label for="inputEmail4" class="form-label">Username</label>
                                  <input type="email" class="form-control" id="inputEmail4">
                                </div>
                                <div class="col-12">
                                  <label for="inputPassword4" class="form-label">Password</label>
                                  <input type="password" class="form-control" id="inputPassword4">
                                </div>
                                <div class="text-center">
                                  <button type="submit" class="btn btn-primary" >Submit</button>
                                  <button type="reset" class="btn btn-secondary">Reset</button>
                                </div>
                              </form><!-- Vertical Form -->


                              <?php 
 
                                  echo "<script> 
                                              alert('Data berhasil dihapus!');
                                              document.location.href ='<?php echo base_url('teacher'); ?>';
                                          </script>
                                      ";
                                  
                                  ?>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>E-Learning</span></strong>. All Rights Reserved
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

</div>
<?= $this->endSection() ?>

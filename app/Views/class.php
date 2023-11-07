<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>


<main id="main" class="main">
    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item active">Class</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-8">
          <div class="row">

            <!-- Teacher Tabel -->
            <div class="col-12">
              <div class="card recent-sales overflow-auto">
                
                <div class="card-body">
                    
                  <h5 class="card-title">Class Table</h5>
                  <a type="button" class="btn btn-primary" href="<?php echo base_url('/create_class'); ?>">Add Class</a>
                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Class Name</th>
                        <th scope="col">Capasity</th>
                        <th scope="col">Password Enrol</th>
                        <th scope="col">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                        <tr>
                          <th scope="row">1</th>
                          <td>Ibrahim</td>
                          <td>@ibrahim.id</td>
                          <td>1234</td>
                          <td>
                          <button
                                type="button"
                                class="btn btn-warning btn-icon-split"
                                data-bs-toggle="modal"
                                data-bs-target="#editClass"
                            >
                                <span class="text">Edit</span>
                            </button>
                            <a href="#">
                            <button class="btn btn-danger btn-icon-split">
                              <span class="icon text-white-50">
                                <i class="fas fa-trash"></i>
                              </span>
                              <a class="text-white" href="<?php echo base_url('class'); ?>" onclick="return confirm('Yakin Data Akan Dihapus');">Delete</a>
                            </button>     
                          </a> 
                        </th>
                        <div
                          class="modal fade"
                          id="editClass"
                          tabindex="-1"
                          aria-labelledby="exampleModalLabel"
                          aria-hidden="true" >
                          <div class="modal-dialog">
                              <div class="modal-content">
                                  <div class="modal-header">
                                  <h1 class="modal-title fs-5" id="exampleModalLabel">
                                      Edit Class
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
                                          action="class"
                                          method="POST"
                                          enctype="multipart/form-data"
                                    >
                                      <div class="col-12">
                                        <label for="inputNanme4" class="form-label">Class Name</label>
                                        <input type="text" class="form-control" id="class_name">
                                      </div>
                                      <div class="col-12">
                                        <label for="inputNanme4" class="form-label">Capasity Class</label>
                                        <input type="text" class="form-control" id="capasity_class">
                                      </div>
                                      <div class="col-12">
                                        <label for="inputNanme4" class="form-label">Password Enrol</label>
                                        <input type="text" class="form-control" id="password">
                                      </div>
                                      <div class="col-12">
                                        <label for="inputEmail4" class="form-label">Subjek</label>
                                        <input type="email" class="form-control" id="subjek">
                                      </div>
                                      <br>
                                      <div class="text-center">
                                        <a type="submit" class="btn btn-primary" href="<?php echo base_url('class'); ?>">Submit</a>
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
    <?php 
     echo "<script> alert('Data berhasil dihapus!'); 
     document.location.href ='<?php echo base_url('teacher'); ?>';
     </script>";
    ?>

  </main><!-- End #main -->

<?= $this->endSection() ?>
<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>
<div>

  
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

  
<?= $this->endSection() ?>

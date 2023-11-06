<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>

<main id="main" class="main">
    <div class="pagetitle">
      <h1>Students Tables</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item" href="#">Users</li>
          <li class="breadcrumb-item active" href="<?php echo base_url('students'); ?>">Students Tables</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-8">
          <div class="row">

            <!-- Students Tabel -->
            <div class="col-12">
              <div class="card recent-sales overflow-auto">

                <div class="card-body">
                  <h5 class="card-title">Students Tables <span>| Today</span></h5>
                  <button
                    type="button"
                    class="btn btn-primary btn-icon-split"
                    data-bs-toggle="modal"
                    data-bs-target="#addStudents"
                  >
                    <span class="text">Add Data</span>
                  </button>
                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Name</th>
                        <th scope="col">Class</th>
                        <th scope="col">Username</th>
                        <th scope="col">Password</th>
                        <th scope="col">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>Ibrahim</td>
                        <td>A</td>
                        <td>@ibrahim.id</td>
                        <td>1234</td>
                        <td>
                          <button
                            type="button"
                            class="btn btn-warning btn-icon-split"
                            data-bs-toggle="modal"
                            data-bs-target="#editStudents"
                          >
                            <span class="text">Edit</span>
                          </button>
                          <a href="#">
                            <button class="btn btn-danger">
                              <a class="text-white" href="<?php echo base_url('students'); ?>" onclick="return confirm('Yakin Data Akan Dihapus');">Delete</a>
                            </button>     
                          </a>
                        </td>
                      </th>
                      <tr>
                        <th scope="row">2</th>
                        <td>Maulana</td>
                        <td>A</td>
                        <td>@maulana.id</td>
                        <td>456</td>
                        <td>
                        <button
                            type="button"
                            class="btn btn-warning btn-icon-split"
                            data-bs-toggle="modal"
                            data-bs-target="#editStudents"
                          >
                            <span class="text">Edit</span>
                          </button>
                          <a href="#">
                            <button class="btn btn-danger">
                              <a class="text-white" href="<?php echo base_url('students'); ?>" onclick="return confirm('Yakin Data Akan Dihapus');">Delete</a>
                            </button>     
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td>Hasan</td>
                        <td>C</td>
                        <td>@hasan.id</td>
                        <td>9263</td>
                        <td>
                        <button
                            type="button"
                            class="btn btn-warning btn-icon-split"
                            data-bs-toggle="modal"
                            data-bs-target="#editStudents"
                          >
                            <span class="text">Edit</span>
                          </button>
                          <a href="#">
                            <button class="btn btn-danger">
                              <a class="text-white" href="<?php echo base_url('students'); ?>" onclick="return confirm('Yakin Data Akan Dihapus');">Delete</a>
                            </button>     
                          </a>
                        </td>
                      </tr>
                    </tbody>
                  </table>

                  <div class="modal fade" id="addStudents" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h1 class="modal-title fs-5" id="exampleModalLabel">Add Students</h1>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <form>
                            <div class="mb-3">
                              <label for="recipient-name" class="col-form-label">Name</label>
                              <input type="text" class="form-control" id="recipient-name">
                            </div>
                            <div class="mb-3">
                              <label for="inputClass" class="col-form-label">Class</label>
                              <select name="class" type="text" class="form-control" id="class">
                              <?php
                                          foreach($class as $item){
                                          ?>
                                            <option value="<?= $item['id'] ?>">
                                              <?= $item['name_class'] ?>

                                            </option>
                                          <?php
                                          }
                                          ?>                              </select>
                            </div>
                            <div class="mb-3">
                              <label for="inputEmail4" class="col-form-label">Username</label>
                              <input type="email" class="form-control" id="inputEmail4">
                            </div>
                            <div class="mb-3">
                              <label for="inputPassword4" class="col-form-label">Password</label>
                              <input type="password" class="form-control" id="inputPassword4">
                            </div>
                          </form>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                          <button type="button" class="btn btn-primary">Save Data</button>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div
                    class="modal fade"
                    id="editStudents"
                    tabindex="-1"
                    aria-labelledby="exampleModalLabel"
                    aria-hidden="true" >
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h1 class="modal-title fs-5" id="exampleModalLabel">
                            Edit Students
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
                            <form>
                            <div class="mb-3">
                              <label for="recipient-name" class="col-form-label">Name</label>
                              <input type="text" class="form-control" id="recipient-name">
                            </div>
                            <div class="mb-3">
                              <label for="inputClass" class="col-form-label">Class</label>
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
                            <div class="mb-3">
                              <label for="inputEmail4" class="col-form-label">Username</label>
                              <input type="email" class="form-control" id="inputEmail4">
                            </div>
                            <div class="mb-3">
                              <label for="inputPassword4" class="col-form-label">Password</label>
                              <input type="password" class="form-control" id="inputPassword4">
                            </div>
                          </form>
                          </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                          <button type="button" class="btn btn-primary">Save Data</button>
                        </div>
                        </div>
                        </div>
                      </div>
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

  </main><!-- End #main -->

  <?= $this->endSection() ?>
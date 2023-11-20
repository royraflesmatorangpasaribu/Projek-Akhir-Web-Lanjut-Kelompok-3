<?= $this->extend('layouts/app2') ?>

<?= $this->section('content') ?>
  
  <main id="main">

    <section id="popular-courses" class="courses">
        <div class="container">
            <div class="col-lg-12">
                <div class="card recent-sales overflow-auto">
                    <div class="card-body">
                        <div class="card-title">
                            <button
                              type="button"
                              class="btn get-started-btn"
                              data-bs-toggle="modal"
                              data-bs-target="#addCourses"
                              ><i class="bi bi-plus-circle me-1"></i>
                              Add Courses
                            </button>
                        </div>

                        <div class="row">
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-header d-flex justify-content-between align-items-center">
                                      <div>
                                        Class A
                                      </div>
                                      <div class="d-flex justify-content-center align-items-center">
                                          <button
                                              type="button"
                                              class="btn btn-outline-primary btn-icon-split me-2"
                                              data-bs-toggle="modal"
                                              data-bs-target="#editCourses"
                                              ><i class="bi bi-pencil-square"></i>
                                          </button>
                                          <form action="#" method="POST">
                                              <input type="hidden" name="_method" value="DELETE">
                                              <?= csrf_field() ?>
                                              <button class="btn btn-outline-danger"><i class="bi bi-trash3"></i></button>
                                          </form>
                                      </div>    
                                    </div>
                                    <div class="card-body">
                                      <a href="<?php echo base_url('detail_courses')?>">
                                        <h5 class="card-title">Physics</h5>
                                      </a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-header d-flex justify-content-between align-items-center">
                                      <div>
                                        Class A
                                      </div>
                                      <div class="d-flex justify-content-center align-items-center">
                                          <button
                                              type="button"
                                              class="btn btn-outline-primary btn-icon-split me-2"
                                              data-bs-toggle="modal"
                                              data-bs-target="#editCourses"
                                              ><i class="bi bi-pencil-square"></i>
                                          </button>
                                          <form action="#" method="POST">
                                              <input type="hidden" name="_method" value="DELETE">
                                              <?= csrf_field() ?>
                                              <button class="btn btn-outline-danger"><i class="bi bi-trash3"></i></button>
                                          </form>
                                      </div>    
                                    </div>
                                    <div class="card-body">
                                      <a href="<?php echo base_url('detail_courses')?>">
                                        <h5 class="card-title">Chemistry</h5>
                                      </a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-header d-flex justify-content-between align-items-center">
                                      <div>
                                        Class A
                                      </div>
                                      <div class="d-flex justify-content-center align-items-center">
                                          <button
                                              type="button"
                                              class="btn btn-outline-primary btn-icon-split me-2"
                                              data-bs-toggle="modal"
                                              data-bs-target="#editCourses"
                                              ><i class="bi bi-pencil-square"></i>
                                          </button>
                                          <form action="#" method="POST">
                                              <input type="hidden" name="_method" value="DELETE">
                                              <?= csrf_field() ?>
                                              <button class="btn btn-outline-danger"><i class="bi bi-trash3"></i></button>
                                          </form>
                                      </div>    
                                    </div>
                                    <div class="card-body">
                                      <a href="<?php echo base_url('detail_courses')?>">
                                        <h5 class="card-title">Mathematic</h5>
                                      </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

  </main><!-- End #main -->

  <?= $this->endSection() ?>
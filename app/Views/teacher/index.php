<?= $this->extend('layouts/app2') ?>

<?= $this->section('content') ?>

<main id="main">
<section id="popular-courses" class="courses">
    <div class="container">
      <h1>Task</h1>
        <div class="row">
            <div class="col-lg-12">
                <div class="card recent-sales overflow-auto">
                    <div class="card-body">
                        <div class="card-title">
                            <button
                              type="button"
                              class="btn btn-primary"
                              data-bs-toggle="modal"
                              data-bs-target="#addTask"
                              ><i class="bi bi-plus-circle me-1"></i>
                              Add Task
                            </button>
                        </div>

                        <div class="row">
                            <?php
                                foreach ($name as $ts){
                            ?>
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-header d-flex justify-content-between align-items-center">
                                    <div>
                                        <?= $ts['id'] ?>
                                    </div>
                                    <div class="d-flex justify-content-center align-items-center">
                                        <button
                                            type="button"
                                            class="btn btn-outline-primary btn-icon-split me-2"
                                            data-bs-toggle="modal"
                                            data-bs-target="#editTask<?php echo $ts['id']; ?>"
                                            ><i class="bi bi-pencil-square"></i>
                                        </button>
                                        <form action="<?= base_url('task/' . $ts['id']) ?>" method="POST">
                                            <input type="hidden" name="_method" value="DELETE">
                                            <?= csrf_field() ?>
                                            <button class="btn btn-outline-danger"><i class="bi bi-trash3"></i></button>
                                        </form>
                                    </div>    
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title"><?= $ts['nama_kelas'] ?></h5>
                                        <?= $ts['keterangan'] ?>
                                    </div>
                                    <a href="<?= base_url('task/detail/' . $ts['id']) ?>" type="button" class="btn btn-primary"><i class="bi bi-ticket-detailed-fill"></i></a>
                                </div>
                            </div>
                            <div 
                                class="modal fade" 
                                id="editTask<?php echo $ts['id']; ?>" 
                                tabindex="-1" 
                                aria-labelledby="exampleModalLabel" 
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Task</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="<?= base_url('/task/' . $ts['id'])?>" method="post">
                                            <input type="hidden" name="_method" value="PUT">
                                            <?= csrf_field() ?>
                                                <div class="mb-3">
                                                  <select class="form-select" name="id_kelas" id="kelas" >
                                                  <label for="id_kelas">Kelas</label>
                                                    <?php
                                                    foreach ($class as $cl){
                                                        ?>
                                                        <option value="<?= $cl['id'] ?>">
                                                        <?= $cl['nama_kelas'] ?>
                                                    </option>
                                                    <?php
                                                    }
                                                    ?>
                                                </select>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="keterangan" class="col-form-label">Description</label>
                                                    <textarea class="form-control" name="keterangan" value=""><?php echo $ts['keterangan']; ?></textarea>
                                                </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                            <button type="submit" class="btn btn-primary">Update Task</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                                }
                            ?>
                        </div>

                        <div 
                            class="modal fade" 
                            id="addTask" 
                            tabindex="-1" 
                            aria-labelledby="exampleModalLabel" 
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Add Task</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="<?= base_url('task/store' )?>" method="post">
                                            
                                            <div class="mb-3">
                                              <select class="form-select" name="id_kelas" id="kelas" >
                                                  <label for="id_kelas">Kelas</label>
                                                  <?php
                                                  foreach ($class as $cl){
                                                      ?>
                                                      <option value="<?= $cl['id'] ?>">
                                                      <?= $cl['nama_kelas'] ?>
                                                  </option>
                                                  <?php
                                                  }
                                                  ?>
                                              </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="" class="col-form-label">Description</label>
                                                <textarea class="form-control" name="keterangan"></textarea>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                            <button type="submit" class="btn btn-primary">Save Task</button>
                                        </form>
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
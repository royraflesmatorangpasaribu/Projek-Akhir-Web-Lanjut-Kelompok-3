<?= $this->extend('layouts/app2') ?>

<?= $this->section('content') ?>
  <main id="main" class="main">
    <section id="hero" class="d-flex justify-content-center align-items-center">
    <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
      <h1>Task</h1>
          <div class="row">
            <div class="row g-0">
                <div class="card-body">
                <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Kelas</th>
                        <th scope="col">Task</th>
                        <th scope="col">Nama Siswa</th>
                        <th scope="col">File</th>
                        <th scope="col">Nilai</th>
                        <th scope="col">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($task as $ts) : ?>
                            <tr>
                                <th scope="row"><?= $i++; ?></th>
                                <td><?= $ts->id_kelas ?></td>
                                <td><?= $ts->id_task ?></td>
                                <td><?= $ts->nama_siswa ?></td>
                                <td><?= $ts->file ?></td>
                                <td><?= $ts->nilai ?></td>
                                <td>
                                <!-- <button
                                    type="button"
                                    class="btn btn-outline-primary btn-icon-split me-2"
                                    data-bs-toggle="modal"
                                    data-bs-target="#editTaskDetail<?= $ts->id ?>"
                                    ><i class="bi bi-pencil-square"></i>
                                </button> -->
                                <a href="<?= base_url('/user/'. $ts->id . '/edit') ?>" type="button" class="btn btn-info"><i class="bi bi-pencil-square"></i></a>
                                
                                <form action="<?= base_url('/nilai/' . $ts->id ) ?>" method="POST">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <?= csrf_field() ?>
                                    <button class="btn btn-outline-danger"><i class="bi bi-trash3"></i></button>
                                </form>
                                </td>
                            </tr>
                            <div 
                                class="modal fade" 
                                id="editTaskDetail<?= $ts->id ?>" 
                                tabindex="-1" 
                                aria-labelledby="exampleModalLabel" 
                                aria-hidden="true">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                  <div class="modal-header">
                                  <h1 class="modal-title fs-5" id="exampleModalLabel">Input Nilai</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">
                                    <form action="<?= base_url('/nilai/' . $ts->id )?>" method="post">
                                        <input type="hidden" name="_method" value="PUT">
                                        <?= csrf_field() ?>
                                        <div class="mb-3">
                                            <label for="nilai" class="col-form-label">Nilai</label>
                                            <textarea class="form-control" name="nilai" value=""><?= $ts->nilai  ?></textarea>
                                        </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                            <button type="submit" class="btn btn-primary">Input Nilai</button>
                                    </form>
                                  </div>
                                  </div>
                                  </div>
                                  </div>
                            </div>``
                        <?php endforeach; ?>
                    </tbody>
                  </table>
                </div>
                </div>
                </div>
                </div>
              
          </div>
        </div>
          
            </div>
      </div><!-- End Left side columns -->

            
    </section>
  </main><!-- End #main -->

  <?= $this->endSection() ?>
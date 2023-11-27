<?= $this->extend('layouts/app3') ?>

<?= $this->section('content') ?>
  <main id="main" class="main">
  <div class="col-lg-12">
    <div class="card shadow mb-4">
    <div class="datatable-wrapper datatable-loading no-footer sortable searchable fixed-columns">
        
    <div class="card-body">
                <h5 class="card-title">Detailas</h5>
                <div class="datatable-top">
                    <div class="datatable-search">
                            <input class="datatable-input" placeholder="Search..." type="search" title="Search within table">
                        </div>
                </div>
                <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Kelas</th>
                        <th scope="col">Task</th>
                        <th scope="col">Nama Siswa</th>
                        <th scope="col">File</th>
                        <th scope="col">Nilai</th>
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
                                <td>Aksi</td>
                                <td>
                                <a href="<?= base_url('view/' . $ts->file ) ?>" target="_blank" class="btn btn-primary">Lihat File</a>

                                </td>
                            </tr>
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
<?= $this->extend('layouts/app2') ?>

<?= $this->section('content') ?>
  
  <main id="main">

    <section id="popular-courses" class="courses">
        <div class="container">

            <ul class="nav nav-tabs nav-tabs-bordered" id="borderedTab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="participant-tab" data-bs-toggle="tab" data-bs-target="#bordered-participant" type="button" role="tab" aria-controls="participant" aria-selected="true">Participant</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="Task-tab" data-bs-toggle="tab" data-bs-target="#bordered-task" type="button" role="tab" aria-controls="task" aria-selected="false">Task</button>
                </li>
            </ul>
            <div class="tab-content pt-2" id="borderedTabContent">
                <div class="tab-pane fade show active" id="bordered-participant" role="tabpanel" aria-labelledby="participant-tab">
                    <table class="table table-borderless datatable">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Kelas</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td>Maulana</td>
                                    <td>A</td>
                                    <td><button class="btn btn-outline-danger"><i class="bi bi-trash3"></i></button></td>
                                </tr>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td>Bunga</td>
                                    <td>A</td>
                                    <td><button class="btn btn-outline-danger"><i class="bi bi-trash3"></i></button></td>
                                </tr>
                        </tbody>
                    </table>
                </div>
                <div class="tab-pane fade" id="bordered-task" role="tabpanel" aria-labelledby="task-tab">
                    <div class="container">
                        <div class="col-lg-12">
                            <div class="card recent-sales overflow-auto">
                                <div class="card-body">
                                    <div class="card-title">
                                        <button
                                        type="button"
                                        class="btn get-started-btn"
                                        data-bs-toggle="modal"
                                        data-bs-target="#addTask"
                                        ><i class="bi bi-plus-circle me-1"></i>
                                        Add Task
                                        </button>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="card">
                                                <div class="card-header d-flex justify-content-between align-items-center">
                                                <div>
                                                    18/11/2023
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
                                                        <h5 class="card-title">Task 1</h5>
                                                    </a>
                                                    Hello students,
                                                    This week's physics assignment explores applying concepts to everyday phenomena.
                                                    Any questions? Ask on the forum or message me.
                                                    Enjoy the assignment!
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-4">
                                            <div class="card">
                                                <div class="card-header d-flex justify-content-between align-items-center">
                                                <div>
                                                    20/11/2023
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
                                                        <h5 class="card-title">Task 2</h5>
                                                    </a>
                                                    Hello students, 
                                                    This week's physics assignment focuses on exploring energy transformations.
                                                    Any questions? Ask on the forum or message me.
                                                    Enjoy the assignment!
                                                </div>
                                            </div>
                                        </div>
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
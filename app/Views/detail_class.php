<?= $this->extend('layouts/app3') ?>

<?= $this->section('content') ?>

<div id="content">
    <div class="container-fluid">
        <div class="mb-3">
            <h1 class="h3 text-gray-800">Class</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo base_url('dashboard_students')?>">Home</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo base_url('class_students')?>">Class</a></li>
                    <li class="breadcrumb-item active">Detail Class</li>
                </ol>
            </nav>
        </div>

        <div class="d-flex justify-content-center align-items-center">
            <div class="col-lg-10">
                <div class="card shadow mb-4">
                    <img src="<?php echo base_url('/assets/img/detail-class.jpg')?>" class="img-fluid brightness" alt="">
                    <div class="wrap-detail ">
                        <div class="position-absolute bottom-0 start-0">
                            <h1>Mathematic</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-lg-10">
                <div class="card shadow">
                    <div class="card-body">
                        <ul class="nav nav-tabs">
                          <li class="nav-item"><a data-toggle="tab" href="#task-tab" style="text-decoration:none;">
                            <button class="nav-link active">Task</button></a>
                          </li>
                          <li class="nav-item"><a data-toggle="tab" href="#participant-tab" style="text-decoration:none;">
                            <button class="nav-link active">Participant</button></a>
                          </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content pt-2">
                          <div class="tab-pane fade show active" id="task-tab" tabindex="0">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="card">
                                            <div class="card-header d-flex justify-content-between">
                                                2023-11-28
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title"><a href="<?php echo base_url('#')?>">Task 1</a></h5>
                                                Dear students,
                                                I hope this message finds you well in your journey through the foundations of mathematics. 
                                                This week, our focus is on strengthening our understanding of fundamental mathematical concepts. 
                                                Submit your comprehensive reports through the designated portal on the e-learning platform by 28 November 2023.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="card">
                                            <div class="card-header d-flex justify-content-between">
                                                2023-11-28
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title"><a href="<?php echo base_url('#')?>">Task 2</a></h5>
                                                Dear students,
                                                I hope this message finds you well in your journey through the foundations of mathematics. 
                                                This week, our focus is on strengthening our understanding of fundamental mathematical concepts. 
                                                Submit your comprehensive reports through the designated portal on the e-learning platform by 28 November 2023.
                                            </div>
                                        </div>
                                    </div>
                                </div>    
                            </div>
                          </div>
                          <div class="tab-pane fade" id="participant-tab" tabindex="0">
                              <table class="table table-hover datatable">
                                <thead>
                                      <tr>
                                          <th scope="col">No</th>
                                          <th scope="col">Nama</th>
                                          <th scope="col">Kelas</th>
                                      </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $no = 1;
                                    ?>
                                      <tr>
                                          <td><?= $no++ ?></td>
                                          <td>Sarah Rosniani</td>
                                          <td>A</td>
                                      </tr>
                                      <tr>
                                          <td><?= $no++ ?></td>
                                          <td>Lathifah Putri</td>
                                          <td>A</td>
                                      </tr>
                                      <tr>
                                          <td><?= $no++ ?></td>
                                          <td>Roy Rafles</td>
                                          <td>A</td>
                                      </tr>
                                      <tr>
                                          <td><?= $no++ ?></td>
                                          <td>Agung</td>
                                          <td>A</td>
                                      </tr>
                                </tbody>
                              </table>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
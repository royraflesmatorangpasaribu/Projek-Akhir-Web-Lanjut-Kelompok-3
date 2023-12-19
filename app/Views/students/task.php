<?= $this->extend('layouts/app3') ?>

<?= $this->section('content') ?>

<div id="content">
    <div class="container-fluid">
        <div class="mb-3">
            <h1 class="h3 text-gray-800">Task</h1>
            <nav>
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url('dashboard_students')?>">Home</a></li>
                <li class="breadcrumb-item active">Task</li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card recent-sales overflow-auto">
                    <div class="card-body">
                        <div class="row">
                            <?php
                                foreach ($name as $ts){
                            ?>
                            <div class="col-xl-4">
                                <div class="card">
                                    <div class="card-header d-flex justify-content-between align-items-center">
                                    <div>
                                        <?= $ts['id'] ?>
                                    </div>
                                    <div class="d-flex justify-content-center align-items-center">
                                        <a href="<?= base_url('task_students/detail/' . $ts['id']) ?>" type="button" class="btn btn-primary"><i class="bi bi-ticket-detailed-fill"></i></a>
                                
                                    </div>    
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title"><?= $ts['nama_kelas'] ?></h5>
                                        <?= $ts['keterangan'] ?>
                                    </div>
                                    <a href="<?= base_url('upload') ?>" type="button" class="btn btn-primary">Upload</a>
                                </div>
                            </div>
                            <?php
                                }
                            ?>
                        </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>        
        </div>
    </div>
</div>

  <?= $this->endSection() ?>
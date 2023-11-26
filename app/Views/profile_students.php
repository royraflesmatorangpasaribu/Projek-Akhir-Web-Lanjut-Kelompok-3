<?= $this->extend('layouts/app3') ?>

<?= $this->section('content') ?>

<div id="content">
    <div class="container-fluid">
        <div class="mb-3">
            <h1 class="h3 text-gray-800">Class</h1>
            <nav>
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url('dashboard_students')?>">Home</a></li>
                <li class="breadcrumb-item active">Profile</li>
                </ol>
            </nav>
        </div>

        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-lg-6 mb-4 mb-lg-0">
                <div class="card shadow mb-3" style="border-radius: 0.5rem">
                <div class="row g-0">
                    <div class="col-md-4 gradient-custom text-center text-white">
                        <img src="<?php echo base_url('/assets/img/profile.jpg')?>" class="img-fluid my-4" style="width: 120px; border-radius: 100px;">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body p-4">
                            <h4>Profile</h4>
                            <hr class="mt-0 mb-4" />
                            <div class="row pt-1">
                                <div class="col-6 mb-3">
                                    <h6>Name</h6>
                                    <p class="text-muted">David Putra</p>
                                </div>
                                <div class="col-6 mb-3">
                                    <h6>Username</h6>
                                    <p class="text-muted">davidputra</p>
                                </div>
                            </div>
                            <div class="row pt-1">
                                <div class="col-6 mb-3">
                                    <h6>Class</h6>
                                    <p class="text-muted">A</p>
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
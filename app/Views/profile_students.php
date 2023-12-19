<?= $this->extend('layouts/app3') ?>

<?= $this->section('content') ?>

<div id="content">
    <div class="container-fluid">
        <div class="mb-3">
            <h1 class="h3 text-gray-800">Profile</h1>
            <nav>
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url('dashboard_students')?>">Home</a></li>
                <li class="breadcrumb-item active">Profile</li>
                </ol>
            </nav>
        </div>

        <div class="row d-flex justify-content align-items-center h-100">
            <div class="col col-lg-6 mb-4 mb-lg-0">
                <div class="card shadow mb-3" style="border-radius: 0.5rem">
                <div class="row g-0">
                    
                    
                        <div class="card-body p-4">
                            <h4>Profile</h4>
                            <hr class="mt-0 mb-4" />
                            <div class="row pt-1">
                                <div class="col-6 mb-3">
                                    <h6><b>username</b></h6>
                                    <p class="text-muted"><?= user()->username; ?></p>
                                </div>
                                <div class="col-6 mb-3">
                                    <h6><b>email</b></h6>
                                    <p class="text-muted"><?= user()->email; ?></p>
                                </div>
                            </div>
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <a href="<?= base_url('profile_students/' . user()->id . '/edit') ?>" class="btn btn-warning">Edit</a>
                     
                            </div>
                        </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
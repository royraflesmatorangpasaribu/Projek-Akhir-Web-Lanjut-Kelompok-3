<?= $this->extend('layouts/app3') ?>

<?= $this->section('content') ?>

<div id="content">
    
    <div class="container-fluid">
        <div class="mb-3">
            <h1 class="h3 text-gray-800">Profile</h1>
            <nav>
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url('dashboard_students')?>">Home</a></li>
                <li class="breadcrumb-item"><a href="<?php echo base_url('profile_students')?>">Profile</a></li>
                <li class="breadcrumb-item active">Edit</li>
                </ol>
            </nav>
        </div>

        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-lg-6 mb-4 mb-lg-0">
                <div class="card shadow mb-3" style="border-radius: 0.5rem">
                <div class="row g-0">

                <form action="<?= base_url('profile_students/' . $user['id'] . '/update')?>" method="post" >
                <input type="hidden" name="_method" value="PUT">
                <?= csrf_field() ?>
                    
                        <div class="card-body p-4">
                            <h4>Edit Profile</h4>
                            <hr class="mt-0 mb-4" />
                            <div class="row pt-1">
                            
                                <div class="col-7 mb-3">
                                    <h6>email</h6>
                                    <input type="text" class="form-control" id="inputName5" name="email" value="<?=$user['email']?>">
                                </div>
                                <div class="col-7 mb-3">
                                    <h6>password</h6>
                                    <input type="text" class="form-control" id="inputName5" name="password">
                                </div>
                               
                               
                     
                            </div>
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <button class="btn btn-primary">Update</button>
                            </div>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
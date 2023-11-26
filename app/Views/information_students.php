<?= $this->extend('layouts/app3') ?>

<?= $this->section('content') ?>

<div id="content">
    <div class="container-fluid">
        <div class="mb-3">
            <h1 class="h3 text-gray-800">Class</h1>
            <nav>
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url('dashboard_students')?>">Home</a></li>
                <li class="breadcrumb-item active">Information</li>
                </ol>
            </nav>
        </div>
    
        <div class="row">
            <div class="col-lg-12">
                <div class="card shadow">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Information</h6>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-header d-flex justify-content-between">
                                        2023-11-24
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Assignment</h5>
                                        Hello everyone! This week's assignment has been uploaded to the platform. 
                                        Please check the details in the Assignment section and complete it before the specified deadline.
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-header d-flex justify-content-between">
                                        2023-11-12
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Assignment</h5>
                                        Hello everyone! This week's assignment has been uploaded to the platform. 
                                        Please check the details in the Assignment section and complete it before the specified deadline.
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-header d-flex justify-content-between">
                                        2023-11-02
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Assignment</h5>
                                        Hello everyone! This week's assignment has been uploaded to the platform. 
                                        Please check the details in the Assignment section and complete it before the specified deadline.
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

<?= $this->endSection() ?>
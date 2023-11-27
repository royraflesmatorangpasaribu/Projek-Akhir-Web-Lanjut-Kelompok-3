<?= $this->extend('layouts/app3') ?>

<?= $this->section('content') ?>

<div id="content">
    <div class="container-fluid">
        <div class="mb-3">
            <h1 class="h3 text-gray-800">Dashboard</h1>
            <nav>
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url('dashboard_students')?>">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </nav>
        </div>
    
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="col-lg-12 col-md-6 mb-3">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Your Class</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">12</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="bi bi-card-list" style="font-size: 2rem"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
        
                        <div class="col-lg-12 col-md-6 mb-3">
                            <div class="card border-left-danger shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                                Your Task</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">12</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="bi bi-list-check" style="font-size: 2rem"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="mb-4">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Information <span>| Today</span></h6>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Assignment</h5>
                                    <p>Hello everyone! This week's assignment has been uploaded to the platform. 
                                    Please check the details in the Assignment section and complete it before the specified deadline.</p>
                                    <div class="d-flex justify-content-end align-items-center">
                                        <a href="<?php echo base_url('information_students')?>">
                                            <span>More Information</span>
                                            <i class="bi bi-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">List Class</h6>
                            </div>
                            <div class="card-body">
                                <table class="table table-borderless datatable">
                                <thead>
                                    <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Class Name</th>
                                    <th scope="col">Class</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <th scope="row">1</th>
                                    <td>Mathematic</td>
                                    <td>A</td>
                                    </tr>
                                    <tr>
                                    <th scope="row">2</th>
                                    <td>English</td>
                                    <td>A</td>
                                    </tr>
                                </tbody>
                                </table>

                                <div class="d-flex justify-content-end align-items-center">
                                    <a href="<?php echo base_url('class_students')?>">
                                        <span>More Class</span>
                                        <i class="bi bi-arrow-right"></i>
                                    </a>
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
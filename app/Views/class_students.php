<?= $this->extend('layouts/app3') ?>

<?= $this->section('content') ?>

<div id="content">
    <div class="container-fluid">
        <div class="mb-3">
            <h1 class="h3 text-gray-800">Class</h1>
            <nav>
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url('dashboard_students')?>">Home</a></li>
                <li class="breadcrumb-item active">Class</li>
                </ol>
            </nav>
        </div>
    
        <div class="row">
            <div class="col-lg-12">
                <div class="card shadow">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Class</h6>
                    </div>
                    <div class="card-body">                    
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-header d-flex justify-content-between">
                                        Class A
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title"><a href="<?php echo base_url('detail_class')?>">Mathematic</a></h5>
                                        Teacher : Sarah Rosniani
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-header d-flex justify-content-between">
                                        Class A
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title"><a href="<?php echo base_url('detail_class')?>">English</a></h5>
                                        Teacher : Roy Rafles
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
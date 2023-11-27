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

                        <?php
                        foreach ($information as $info){
                        ?>
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-header d-flex justify-content-between align-items-center">
                                    <div>
                                        <?= $info['date'] ?>
                                    </div>
                                    <div class="d-flex justify-content-center align-items-center">
    
                                        
                                            <?= csrf_field() ?>
                                            
                                        </form>
                                    </div>    
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title"><?= $info['title'] ?></h5>
                                        <?= $info['text'] ?>
                                    </div>
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

<?=$this->endSection()?>
<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>

<main id="main" class="main">
    
    <div class="pagetitle">
      <h1>Information</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item active">Information</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <div class="col-lg-12">
                <div class="card recent-sales overflow-auto">
                    <div class="card-body">
                        <div class="card-title">
                            <button
                              type="button"
                              class="btn btn-primary"
                              data-bs-toggle="modal"
                              data-bs-target="#addInformation"
                              ><i class="bi bi-plus-circle me-1"></i>
                              Add Information
                            </button>
                        </div>

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
                                        <button
                                            type="button"
                                            class="btn btn-outline-primary btn-icon-split me-2"
                                            data-bs-toggle="modal"
                                            data-bs-target="#editInformation<?php echo $info['id']; ?>"
                                            ><i class="bi bi-pencil-square"></i>
                                        </button>
                                        <form action="<?= base_url('information/' . $info['id']) ?>" method="POST">
                                            <input type="hidden" name="_method" value="DELETE">
                                            <?= csrf_field() ?>
                                            <button class="btn btn-outline-danger"><i class="bi bi-trash3"></i></button>
                                        </form>
                                    </div>    
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title"><?= $info['title'] ?></h5>
                                        <?= $info['text'] ?>
                                    </div>
                                </div>
                            </div>
                            <div 
                                class="modal fade" 
                                id="editInformation<?php echo $info['id']; ?>" 
                                tabindex="-1" 
                                aria-labelledby="exampleModalLabel" 
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Information</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="<?= base_url('/information/' . $info['id'])?>" method="post">
                                            <input type="hidden" name="_method" value="PUT">
                                            <?= csrf_field() ?>
                                                <div class="mb-3">
                                                    <label for="recipient-date" class="col-form-label">Date</label>
                                                    <input type="date" class="form-control" name="recipient-date" value="<?php echo $info['date']; ?>">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="title" class="col-form-label">Title</label>
                                                    <input type="text" class="form-control" name="title" value="<?php echo $info['title']; ?>">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="message-text" class="col-form-label">Message</label>
                                                    <textarea class="form-control" name="message-text" value=""><?php echo $info['text']; ?></textarea>
                                                </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                            <button type="submit" class="btn btn-primary">Update Information</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                                }
                            ?>
                        </div>

                        <div 
                            class="modal fade" 
                            id="addInformation" 
                            tabindex="-1" 
                            aria-labelledby="exampleModalLabel" 
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Add Information</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="<?= base_url('information/store' )?>" method="post">
                                            <div class="mb-3">
                                                <label for="recipient-date" class="col-form-label">Date</label>
                                                <input type="date" class="form-control" name="recipient-date">
                                            </div>
                                            <div class="mb-3">
                                                <label for="title" class="col-form-label">Title</label>
                                                <input type="text" class="form-control" name="title">
                                            </div>
                                            <div class="mb-3">
                                                <label for="message-text" class="col-form-label">Message</label>
                                                <textarea class="form-control" name="message-text"></textarea>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                            <button type="submit" class="btn btn-primary">Save Information</button>
                                        </form>
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
<?= $this->extend('templates/index') ?>

<?= $this->section('content') ?>

<main id="main" class="main">
    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?php echo base_url('information'); ?>">Information</a></li>
          <li class="breadcrumb-item active">Create Information</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-8">
          <div class="row">
            <div class="card">
                <div class="card-body">
                  <h5 class="card-title">New Information</h5>
    
                  <!-- Multi Columns Form -->
                  <form class="row g-3" action="<?= base_url('information/store' )?>" method="post">
                    <!-- <div class="col-md-8">
                      <label for="inputName5" class="form-label">Class Name</label>
                      <input type="text" class="form-control" id="inputName5" name="nama_kelas">
                    </div> -->

                    <div class="mb-3">
                        <label for="recipient-date" class="col-form-label">Date</label>
                        <input type="date" class="form-control <?= (empty(validation_show_error('recipient-date'))) ? '' : 'is-invalid' ?>"  name="recipient-date" value="<?= old('recipient-date')?>">
                        <div class='invalid-feedback'>
                            <?= validation_show_error('recipient-date'); ?>
                        </div>
                    </div>

                    <!-- <div class="col-md-8">
                      <label for="inputEmail5" class="form-label">Capasity Class</label>
                      <input type="text" class="form-control" id="inputEmail5" name="daya_tampung">
                    </div> -->
                   
                    <div class="mb-3">
                        <label for="title" class="col-form-label">Title</label>
                        <input type="text" class="form-control <?= (empty(validation_show_error('title'))) ? '' : 'is-invalid' ?>"  name="title" value="<?= old('title')?>">
                        <div class='invalid-feedback'>
                            <?= validation_show_error('title'); ?>
                        </div>
                    </div>


                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">Message</label>
                        <textarea type="text" class="form-control <?= (empty(validation_show_error('message-text'))) ? '' : 'is-invalid' ?>"  name="message-text" ><?= old('message-text')?></textarea>
                        <div class='invalid-feedback'>
                             <?= validation_show_error('message-text'); ?>
                        </div>
                    </div>
                   
                    <div >
                        <button type="submit" class="btn btn-primary plus float-right">Save Information</button>
                    </div> 
                  </form><!-- End Multi Columns Form -->
                </div>
            </div>
          </div>
        </div>
      </div>
        </div>
          </div>
            
        </div><!-- End Left side columns -->

        <!-- Right side columns -->
        <div class="col-lg-4">

        
        </div><!-- End Right side columns -->
      </div>
    </section>

  </main><!-- End #main -->
  <?= $this->endSection() ?>
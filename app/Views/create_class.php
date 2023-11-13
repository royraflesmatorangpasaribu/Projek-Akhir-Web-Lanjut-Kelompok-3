<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>

<main id="main" class="main">
    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?php echo base_url('class'); ?>">Class</a></li>
          <li class="breadcrumb-item active">Create Class</li>
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
                  <h5 class="card-title">New Class</h5>
    
                  <!-- Multi Columns Form -->
                  <form class="row g-3" action="" method="post">
                    <div class="col-md-12">
                      <label for="inputName5" class="form-label">Class Name</label>
                      <input type="text" class="form-control" id="inputName5" name="nama_kelas">
                    </div>
                    <div class="col-md-6">
                      <label for="inputEmail5" class="form-label">Capasity Class</label>
                      <input type="text" class="form-control" id="inputEmail5" name="daya_tampung">
                    </div>
                   
                    

                    <!-- ubah ke kanan -->
                    <div class="text-left">
                      <button type="submit" class="btn btn-primary">Submit</button>
                    
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
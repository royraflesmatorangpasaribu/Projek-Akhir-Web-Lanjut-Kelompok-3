<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>

<main id="main" class="main">

<div class="pagetitle">
  <h1>Profile</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item active">Profile</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section profile">
  <div class="row">
    <div class="col-xl-12">

      <div class="card">
        <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

          <img src="<?= base_url(); ?>/assets/img/profile.jpg" alt="Profile" class="rounded-circle">
                            <h4>My Profile</h4>
                            <hr class="mt-0 mb-4" />
                            <div class="row pt-1">
                            
                                <div class="col-7 mb-3">
                                    <h6>Username</h6>
                                    <h4><?= user()->username; ?><h4>
                            </div>
                              <div class="col-7 mb-3">
                                    <h6>Email</h6>
                                    <?= user()->email; ?>
                              </div>
                          <ul class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <a href="<?= base_url('profile_admin/' . user()->id . '/edit') ?>" class="btn btn-warning">Edit</a>
                          </ul>
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
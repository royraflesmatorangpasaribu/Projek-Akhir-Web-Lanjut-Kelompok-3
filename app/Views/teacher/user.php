<?= $this->extend('layouts/app2') ?>

<?= $this->section('content') ?>
<main id="main" class="main">
    <section id="hero" class="d-flex justify-content-center align-items-center">
    <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
    <div class="container-fluid">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-lg-6 mb-4 mb-lg-0">
                <div class="card shadow mb-3" style="border-radius: 0.5rem">
                <div class="row g-0">
                <div class="card-body p-4">
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
                            <a href="<?= base_url('profile_edit/' . user()->id . '/edit') ?>" class="btn btn-warning">Edit</a>
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
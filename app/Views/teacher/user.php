<?= $this->extend('layouts/app2') ?>

<?= $this->section('content') ?>
<main id="main" class="main">
  <section id="hero" class="d-flex justify-content-center align-items-center">
    <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
      <h1>My Profile</h1>
      <br>
      <div class="col-lg-8">
          <div class="row">
          <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
              <div class="col-md-8">
                <div class="card-body">
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">
                    <h4><?= user()->username; ?><h4>
                  </li>
                  <li class="list-group-item"><?= user()->email; ?></li>
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
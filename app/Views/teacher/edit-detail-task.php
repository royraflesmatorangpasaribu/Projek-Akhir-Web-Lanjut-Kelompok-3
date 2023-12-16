<?= $this->extend('layouts/app2') ?>

<?= $this->section('content') ?>
<main id="main" class="main">
  <section id="hero" class="d-flex justify-content-center align-items-center">
    <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
      <h1></h1>
      <br>
      <div class="col-lg-8">
          <div class="row">
          <form action="<?= base_url('/nilai/' . $nilai['id'] )?>" method="post">
             <input type="hidden" name="_method" value="PUT">
              <input type="hidden" name="taskid" value="<?= $taskid ?>">
              <?= csrf_field() ?>

               <div class="mb-3">
                    <label for="nilai" class="col-form-label">Nilai</label>
                          <textarea class="form-control" name="nilai" value=""><?= $nilai['nilai']  ?></textarea>
                </div>
                
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Input Nilai</button>
          </form>
</section>
</main><!-- End #main -->
<?= $this->endSection() ?>
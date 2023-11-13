<?= $this->extend('templates/index'); ?>
<?= $this->section('content'); ?>

<main id="main" class="main">
    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active" href="<?php echo base_url('dashboard_super_admin'); ?>">Dashboard</li>
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
                  <h5 class="card-title">Create New Users</h5>
    
                  <?php $old_name = session()->getFlashdata('name'); ?>
            <form action="<?= url_to('updateUser') ?>" method="post" enctype="multipart/form-data">
            <?= csrf_field() ?>
                <div class="mb-3">
                    <input type="hidden" id="id" name="user_id" value = "<?= $val-> userid; ?>" />
                    <label for="nama" class="form-label">Username</label>
                    <input name="username" type="text"  class="form-control" id="username" placeholder="Ex : royraflmp"  value="<?= $val->username;?>"/>
                    
                </div>
                
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button type="submit" class="btn btn-secondary">Send</button>
                </div>
            </form>
        </div>
    </div>
</div>
</main><!-- End #main -->
  <?= $this->endSection() ?>
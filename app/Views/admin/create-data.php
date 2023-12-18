<?= $this->extend('templates/index'); ?>
<?= $this->section('content'); ?>

<main id="main" class="main">
    <div class="pagetitle">
      <h1>New Users</h1>
      <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="<?php echo base_url('admin'); ?>">Dashboard</a></li>
            <li class="breadcrumb-item active" href="">New Users</li>
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
            <form action="<?= url_to('register') ?>" method="post" enctype="multipart/form-data">
            <?= csrf_field() ?>
                <!-- <div class="mb-3">
                    <label for="nama" class="form-label">Username</label>
                    <input name="username" type="text"  class="form-control" id="username" placeholder="Ex : royraflmp">
                </div> -->

                <div class="mb-3">
                        <label for="nama" class="form-label">Username</label>
                        <input type="text" class="form-control <?= (empty(validation_show_error('username'))) ? '' : 'is-invalid' ?>"  name="username" value="<?= old('username')?>">
                        <div class='invalid-feedback'>
                            <?= validation_show_error('username'); ?>
                        </div>
                    </div>

                    <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input name="email" type="text" class="form-control <?= (empty(validation_show_error('email'))) ? '' : 'is-invalid' ?>" id="email" placeholder="Ex : royraflmp@gmail.com">   
                    <div class='invalid-feedback'>
                            <?= validation_show_error('email'); ?>
                        </div>   
                </div>

                <div class="form-group">
                            <label for="password"><?=lang('Auth.password')?></label>
                            <input type="password" name="password" class="form-control <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?=lang('Auth.password')?>" autocomplete="off" required>
                        </div>
                <div class="mb-3">
                    <label for="role" class="col-sm-10 col-form-label">Role</label>
                    <select name="role" id="role" class="form-select" required>
                        <option selected hidden value="<?= old('role') ?>">
                            <?= ($old_name == '')? 'Choose Role' : $old_name?>
                        </option>
                        <?php
                            
                        if (!empty($name)) {
                            foreach ($name as $item) {
                                ?>
                                
                                <option value="<?= $item->name ?>">
                                    <?= $item->name ?>
                                </option>
                                <?php
                            }
                        } else {
                            // Handle the case where $name is null or not an array/object
                            // You can print an error message or take appropriate action.
                        }
                        ?>
                    </select>
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
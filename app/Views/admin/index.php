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
    <!-- <center>
    <img src="<?php echo base_url('assets/img/greet.png'); ?>" alt="" style="height: 450px; width: 850px;"><br><br>
    </center> -->
    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">

            <!-- Teacher Tabel -->
            <div class="col-12">
              <div class="card recent-sales overflow-auto">

                <div class="card-body">
                  <h5 class="card-title">Users Table <span>| Today</span></h5>

                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Username</th>
                        <th scope="col">Email</th>
                        <th scope="col">Role</th>
                        <th scope="col justify-content-center text-center" >&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($users as $user) : ?>
                            <tr>
                                <th scope="row"><?= $i++; ?></th>
                                <td><?= $user->username; ?></td>
                                <td><?= $user->email; ?></td>
                                <td><?= $user->name; ?></td>
                                <td > 
                                  <div class="d-flex ">
                                    <a href="<?= base_url('admin/edit?id=' . $user->userid) ?>" class="btn btn-success" style="width:100px;">Edit</a>
                               
                                <form method="post" action="<?= site_url('/admin/delete/' . $user->userid) ?>" >
                                  <input type="hidden" name="_method" value="DELETE">
                                      <?= csrf_field() ?>
                                    <button type="submit" name="delete" class="btn btn-danger" style="width:100px;">Delete</button>
                                </form>
                                  </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                  </table>
                  
                  <a type="button" class="btn btn-primary" href="<?php echo base_url('admin/create_data'); ?>">Add Data</a>
                </div>

              </div>
            </div><!-- End Teacher Table -->


          </div>
        </div><!-- End Left side columns -->

        
      </div>
    </section>

  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <?= $this->endSection('content'); ?> 
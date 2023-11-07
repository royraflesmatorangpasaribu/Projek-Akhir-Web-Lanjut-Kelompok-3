<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>

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
    <center>
    <img src="<?php echo base_url('assets/img/greet.png'); ?>" alt="" style="height: 450px; width: 850px;"><br><br>
    </center>
    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-8">
          <div class="row">

            <!-- Teacher Tabel -->
            <div class="col-12">
              <div class="card recent-sales overflow-auto">

                <div class="card-body">
                  <h5 class="card-title">Teachers Table <span>| Today</span></h5>

                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Username</th>
                        <th scope="col">Password</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>Ibrahim</td>
                        <td>@ibrahim.id</td>
                        <td>1234</td>
                      </th>
                      <tr>
                        <th scope="row">2</th>
                        <td>Maulana</td>
                        <td>@maulana.id</td>
                        <td>456</td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td>Hasan</td>
                        <td>@hasan.id</td>
                        <td>9263</td>
                      </tr>
                    </tbody>
                  </table>
                  
                  <a type="button" class="btn btn-primary" href="<?php echo base_url('teacher'); ?>">Detail</a>
                </div>

              </div>
            </div><!-- End Teacher Table -->


            <!-- Student Tabel -->
            <div class="col-12">
              <div class="card recent-sales overflow-auto">

                <div class="card-body">
                  <h5 class="card-title">Student Table <span>| Today</span></h5>

                  <table class="table table-borderless datatable">
                  <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Username</th>
                        <th scope="col">Password</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>Ibrahim</td>
                        <td>@ibrahim.id</td>
                        <td>1234</td>
                      </th>
                      <tr>
                        <th scope="row">2</th>
                        <td>Maulana</td>
                        <td>@maulana.id</td>
                        <td>456</td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td>Hasan</td>
                        <td>@hasan.id</td>
                        <td>9263</td>
                      </tr>
                    </tbody>

                  </table>
                  <a type="button" class="btn btn-primary" href="<?php echo base_url('student'); ?>">Detail</a>
                </div>

              </div>
            </div><!-- End Student Table -->
            
            <!-- Parents Tabel -->
            <div class="col-12">
              <div class="card recent-sales overflow-auto">

                <div class="card-body">
                  <h5 class="card-title">Parents Table <span>| Today</span></h5>

                  <table class="table table-borderless datatable">
                  <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Username</th>
                        <th scope="col">Password</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>Ibrahim</td>
                        <td>@ibrahim.id</td>
                        <td>1234</td>
                      </th>
                      <tr>
                        <th scope="row">2</th>
                        <td>Maulana</td>
                        <td>@maulana.id</td>
                        <td>456</td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td>Hasan</td>
                        <td>@hasan.id</td>
                        <td>9263</td>
                      </tr>
                    </tbody>
                  </table>
                  <a href="<?php echo base_url('parents'); ?>" type="button" class="btn btn-primary">Detail</a>
                </div>

              </div>
            </div><!-- End Parents Table -->
          </div>
        </div><!-- End Left side columns -->

        <!-- Right side columns -->
        <div class="col-lg-4">

          
          <!-- News & Updates Traffic -->
          <div class="card">
            <div class="filter">
            </div>

            <div class="card-body pb-0">
              <h5 class="card-title">News &amp; Updates <span>| Today</span></h5>

              <div class="news">
                <div class="post-item clearfix">
                  <img src="<?php echo base_url('assets/img/news.png'); ?>" alt="">
                  <h4><a href="#">Judul Berita</a></h4>
                  <p>...</p>
                </div>

                <div class="news">
                  <div class="post-item clearfix">
                    <img src="<?php echo base_url('assets/img/news.png'); ?>" alt="">
                    <h4><a href="#">Judul Berita</a></h4>
                    <p>...</p>
                  </div>

                  <div class="news">
                    <div class="post-item clearfix">
                      <img src="<?php echo base_url('assets/img/news.png'); ?>" alt="">
                      <h4><a href="#">Judul Berita</a></h4>
                      <p>...</p>
                    </div>

                    <div class="news">
                      <div class="post-item clearfix">
                        <img src="<?php echo base_url('assets/img/news.png'); ?>" alt="">
                        <h4><a href="#">Judul Berita</a></h4>
                        <p>...</p>
                      </div>         
            </div>
          </div><!-- End News & Updates -->
        </div><!-- End Right side columns -->
      </div>
    </section>

  </main><!-- End #main -->

  <?= $this->endSection() ?>
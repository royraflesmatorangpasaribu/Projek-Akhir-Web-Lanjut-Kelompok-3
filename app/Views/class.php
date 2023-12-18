<?= $this->extend('templates/index') ?>

<?= $this->section('content') ?>


<main id="main" class="main">
    <div class="pagetitle">
      <h1>Class</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item active" href="">Teachers</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">

            <!-- Teacher Tabel -->
            <div class="col-12">
              <div class="card recent-sales overflow-auto">
                
                <div class="card-body">
                    
                  <h5 class="card-title">Class Table</h5>
                  <a type="button" class="btn btn-primary" href="<?php echo base_url('/create_class'); ?>">Add Class</a>
                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Class Name</th>
                        <th scope="col">Capacity</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php $i = 1; ?>
                        <?php foreach ($class as $c) : ?>
                            <tr>
                                <th scope="row"><?= $i++; ?></th>
                                <td><?= $c->nama_kelas; ?></td>
                                <td><?= $c->daya_tampung; ?></td>
                                
                                <td > 
                                  <div class="d-flex ">
                                    <a href="<?= base_url('edit_class?id=' . $c->id) ?>" class="btn btn-success me-2" style="width:100px;">Edit</a>
                               
                                <form method="post" action="/class/delete" >
                                 
                                      <?= csrf_field() ?>
                                      <input type="hidden" name="class_id" value="<?= $c->id;?>"/>
                                    <button type="submit" name="delete" class="btn btn-danger me-2" style="width:100spx;">Delete</button>
                                </form>
                                  </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                  </table>
                </div>

              </div>
            </div><!-- End Teacher Table -->
          </div>
        </div><!-- End Left side columns -->

        
      </div>
    </section>
    <?php 
     echo "<script> alert('Data berhasil dihapus!'); 
     document.location.href ='<?php echo base_url('teacher'); ?>';
     </script>";
    ?>

  </main><!-- End #main -->

<?= $this->endSection() ?>
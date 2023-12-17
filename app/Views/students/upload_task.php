<?= $this->extend('layouts/app3') ?>

<?= $this->section('content') ?>

<div id='content'>
<div class="container-fluid">
<div class="mb-3">
    <h1 class="h3 text-gray-800">Task</h1>
            <nav>
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url('dashboard_students')?>">Home</a></li>
                <li class="breadcrumb-item active">Task</li>
                </ol>
            </nav>
</div>
        <div class="row">
            <div class="col-lg-12">
            <form action="<?= base_url('/task/create') ?>" method="post" enctype="multipart/form-data">
                    <?= csrf_field() ?>

                    <div class="mb-3">
                        <label for="id_kelas" class="form-label">Kelas</label>
                        <select class="form-control" name="id_kelas" id="kelas">
                            <?php foreach ($class as $cl): ?>
                                <option value="<?= $cl['id'] ?>"><?= $cl['nama_kelas'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="id_task" class="form-label">keterangan</label>
                        <select class="form-control" name="id_task" id="kelas">
                            <?php foreach ($task as $ts): ?>
                                <option value="<?= $ts['id'] ?>"><?= $ts['keterangan'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="nama_siswa" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama_siswa" name="nama_siswa" placeholder="sarah">
                    </div>

                    <div class="input-group mb-3">
                        <label for="pdf_file" class="input-group-text">Upload PDF File</label>
                        <input type="file" name="pdf_file" class="input-group-text">
                    </div>

                    <button type="submit" class="btn btn-primary">Upload Task</button>
                    <a href="<?= base_url('task_students') ?>" type="button" class="btn btn-primary">Cancel</a>
                </form>
            </div>
    </div>
</div>

<?= $this->endSection() ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>View PDF</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?= base_url(); ?>/assets/img/favicon.png" rel="icon">
  <link href="<?= base_url(); ?>/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
  <!-- Vendor CSS Files -->
  <link href="<?= base_url(); ?>/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="<?= base_url(); ?>/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?= base_url(); ?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url(); ?>/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?= base_url(); ?>/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?= base_url(); ?>/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?= base_url(); ?>/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  

  <!-- Template Main CSS File -->
  <link href="<?= base_url(); ?>/assets/css/style-3.css" rel="stylesheet">

</head>

<body>
  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">
      <h1 class="logo me-auto"><a href="index.html">View File</a></h1>
    </div>
  </header>
  <div class="col-sm-12">
  <main id="main">
<section id="popular-courses" class="courses">
    <div class="container">
    <table class="table table-bordered">
        <tr>
            <th width="50px">Nama</th>
            <th width="50px">:</th>
            <th><?= $file['nama_siswa'] ?></th>
            <th width="50px">Nilai</th>
            <th width="50px">:</th>
            <th><?= $file['nilai'] ?></th>
        </tr>
        <tr>
            <th>Created At</th>
            <th>:</th>
            <th><?= $file['created_at'] ?></th>
            <th>Updated At</th>
            <th>:</th>
            <th><?= $file['updated_at'] ?></th>
        </tr>
    </table>
    </div>
    <div class="col-sm-12">
        <center><iframe src="<?= base_url('uploads/' . $file['file']) ?>" width="90%" height="800" style="border:1px solid black;"></iframe></center>
    </div>

</main><!-- End #main -->
<script src="<?= base_url(); ?>/assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="<?= base_url(); ?>/assets/vendor/aos/aos.js"></script>
<script src="<?= base_url(); ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url(); ?>/assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="<?= base_url(); ?>/assets/vendor/php-email-form/validate.js"></script>
<!-- Bootstrap JS (Make sure it is included after jQuery) -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


<!-- Template Main JS File -->
<script src="<?= base_url(); ?>/assets/js/main-2.js"></script>

</body>

</html>

<?= $this->extend('layouts/app2') ?>

<?= $this->section('content') ?>

<main id="main" class="main">
  <section id="hero" class="d-flex justify-content-center align-items-center">
    <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
      <h1>Welcome to E-Learning</h1>
      <h2>Education Without Limits, Knowledge Without Bounds!</h2>
    </div>
  </section>
    <!-- ======= Popular Courses Section ======= -->
    <section id="popular-courses" class="courses">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Courses</h2>
        </div>

        <div class="row" data-aos="zoom-in" data-aos-delay="100">

            <div class="col-lg-4">
                <div class="card course-item">
                    <div class="card-header course-content d-flex justify-content-between align-items-center">
                    <div>
                        <h4>Class A</h4>
                    </div>   
                    </div>
                    <div class="card-body">
                        <h3><a href="course-details.html">Physics</a></h3>
                        <p>Participant : 17 Students</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card course-item">
                    <div class="card-header course-content d-flex justify-content-between align-items-center">
                    <div>
                        <h4>Class A</h4>
                    </div>   
                    </div>
                    <div class="card-body">
                        <h3><a href="course-details.html">Chemistry</a></h3>
                        <p>Participant : 10 Students</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card course-item">
                    <div class="card-header course-content d-flex justify-content-between align-items-center">
                    <div>
                        <h4>Class A</h4>
                    </div>   
                    </div>
                    <div class="card-body">
                        <h3><a href="course-details.html">Mathematic</a></h3>
                        <p>Participant : 20 Students</p>
                    </div>
                </div>
            </div>

        </div>

      </div>
    </section><!-- End Popular Courses Section -->

  </main><!-- End #main -->

  <?= $this->endSection() ?>
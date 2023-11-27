<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Parents</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        #dashboard-container {
            display: flex;
        }

        #sidebar {
            width: 250px;
            background-color: #333;
            color: #fff;
            padding: 20px;
            box-sizing: border-box;
        }

        #content {
            flex: 1;
            padding: 20px;
            box-sizing: border-box;
        }

        .small-box {
            background-color: #fff;
            border-radius: 5px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .small-box h2 {
            margin-bottom: 10px;
        }

        .small-box p {
            margin-bottom: 20px;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #555;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .btn:hover {
            background-color: #444;
        }

        h1 {
            color: #333;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
    <header id="header" class="header container-fluid fixed-top d-flex align-items-center mb-5">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="<?php echo base_url('parents_dashboard'); ?>">Dashboard</a>
            </li>
            <!-- <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('students'); ?>" >Students</a>
            </li> -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('profile'); ?>">Profile</a>
            </li>
        </ul>
    </header>

<main id="main" class="main mt-5">
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
                  <h5 class="card-title">Students Table <span>| Today</span></h5>
                  <div class="col-3">
                 
</div>
                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                       
                        <th scope="col">Username</th>
                        <th scope="col">Email</th>
                       
                         </tr>
                    </thead>
                    <tbody>
                        
                            <tr>
                             
                                <td><?= $user[0]->username; ?></td>
                                <td><?= $user[0]->email; ?></td>
                                
                               
                              
                            </tr>
                      
                    </tbody>
                  </table>
                  
                
                </div>

              </div>
            </div><!-- End Teacher Table -->


          </div>
        </div><!-- End Left side columns -->

        <!-- Right side columns -->
        <div class="col-lg-4">

          
         
        </div><!-- End Right side columns -->
      </div>
    </section>

  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  </div>
              
  </div>
    </div>
</body>
</html>
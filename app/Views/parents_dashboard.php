<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Parents</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
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
    <header id="header" class="header container-fluid fixed-top d-flex align-items-center">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="<?php echo base_url('dashboard_parents'); ?>">Dashboard</a>
            </li>
            <!-- <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('students'); ?>" >Students</a>
            </li> -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('profile'); ?>">Profile</a>
            </li>
        </ul>
    </header>
    <div class="container position-relative"><br><br><br><br><br>
    <div id="dashboard-container">
    <div id="content">
        <h1>welcome parents !</h1>
        <div class="small-box" style="background-color: #65AEDD; color: #fff;">
            <h2>child data</h2>
            <p>information about your child.</p>
            <a href="<?= base_url("parents/students")?>" class="btn">view</a>
        </div>
        <div class="small-box" style="background-color: #52BE80; color: #fff;">
            <h2>announcement</h2>
            <p>important announcement from school.</p>
            <a href="#" class="btn">read the school announcement</a>
        </div>
    </div>
</div>

    </div>
</body>
</html>
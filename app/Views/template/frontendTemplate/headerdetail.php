<!DOCTYPE html>
<html>

<head>
    <title><?= $title;?></title>
    <link rel="shortcut icon" href="<?php base_url() ?>/assets/images/banner/favicon2.png">
    <!-- <link rel="stylesheet" type="text/css" href="<?php base_url() ?>/assets/bootstrap5/css/bootstrap.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php base_url()?>/assets/vendors/mdi/css/materialdesignicons.min.css">

    <style>
        .paralax {
            background-image: url(" <?php base_url() ?>/assets/images/banner/paralax.jpg");
            height: 400px;
            background-attachment: fixed;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            transform: translatez(0);
            -webkit-transform: translatez(0);
        }
        .paralax2 {
            background-image: url(" <?php base_url() ?>/assets/images/banner/about.jpeg");
            height: 400px;
            background-attachment: fixed;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            transform: translatez(0);
            -webkit-transform: translatez(0);
        }
        .bg-gradient-white-grey {
            background-image: linear-gradient(to right, black,white,black);
        }
        .bg-black-solid{
            background-color: black;
        }
        .bg-white-smoke {
            background-image: linear-gradient(180deg, whitesmoke, black);
        }
    </style>

    <script>
        $(function() {
            $('[data-toggle="tooltip"]').tooltip()
        })
    </script>

   
</head>

<body>
        <!-- navbar -->
            <div class="jumbotron mb-0 p-0">
                <nav class="navbar navbar-expand-lg navbar-dark bg-black-solid fixed-top p-3">
                    <div class="container">
                        <a class="navbar-brand h3 " href="<?= base_url('DashboardController/') ?>"><b><?= $judul ;?></b></a>
                        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="<?= base_url('DashboardController/') ?>"><i class="mdi mdi-home h4"></i></a>
                            </li>
                            <li class="nav-item dropdown me-4">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="mdi mdi-menu h4"></i>
                            </a>
                            <ul class="dropdown-menu rounded-0  bg-black-solid" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item text-white" href="<?= base_url('DashboardController/vehicles') ?>">Our Vehicles</a></li>
                                <li><a class="dropdown-item text-white" href="<?= base_url('DashboardController/about') ?>">About</a></li>
                                <li><a class="dropdown-item text-white" href="<?= base_url('DashboardController/contact') ?>">Contact US</a></li>
                            </ul>
                            </li>
                        </ul>
                        </div>
                    </div>
                </nav>
            </div>
        <!-- end navbar -->



   
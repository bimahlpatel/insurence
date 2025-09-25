<!DOCTYPE html>
<html lang="en">

<head>
    <!-- required meta -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- #favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
    <!-- #title -->
    <title>FINVIEW - Financial Loan Review and Comparison Website Template</title>
    <!-- #keywords -->
    <meta name="keywords" content="FINVIEW, Financial Loan, Financial Loan Review and Comparison">
    <!-- #description -->
    <meta name="description" content="FINVIEW HTML5 Template">

    <!--  css dependencies start  -->

    <!-- bootstrap five css -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <!-- bootstrap-icons css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- nice select css -->
    <link rel="stylesheet" href="assets/vendor/nice-select/css/nice-select.css">
    <!-- magnific popup css -->
    <link rel="stylesheet" href="assets/vendor/magnific-popup/css/magnific-popup.css">
    <!-- slick css -->
    <link rel="stylesheet" href="assets/vendor/slick/css/slick.css">
    <!-- odometer css -->
    <link rel="stylesheet" href="assets/vendor/odometer/css/odometer.css">
    <!-- animate css -->
    <link rel="stylesheet" href="assets/vendor/animate/animate.css">
    <!--  / css dependencies end  -->

    <!-- main css -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <!--  Preloader  -->
    <div class="preloader">
        <span class="loader"></span>
    </div>

    <!--header-section start-->
    <header class="header-section ">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="navbar navbar-expand-xl nav-shadow" id="#navbar">
                        <a class="navbar-brand" href="index.html"><img src="assets/images/logo.png" class="logo" alt="logo"></a>
                        <a class="navbar-toggler" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                            <i class="bi bi-list"></i>
                        </a>

                        <div class="collapse navbar-collapse ms-auto " id="navbar-content">
                            <div class="main-menu">
                                <ul class="navbar-nav mb-lg-0 mx-auto">
                                    <li class="nav-item">
                                        <a class="nav-link" href="loan-comparison.html">Home</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Motor Insurence </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="<?php echo base_url() ?>motor-insurence"><i class="bi bi-arrow-up-right"></i> Car Insurence</a></li>
                                            <li><a class="dropdown-item" href="<?php echo base_url() ?>bike-insurence"><i class="bi bi-arrow-up-right"></i> Bike Insurence</a></li>
                                            <li><a class="dropdown-item" href="<?php echo base_url() ?>commercial-insurence"><i class="bi bi-arrow-up-right"></i> Comm. Vehical Insurence</a></li>
                                            <li><a class="dropdown-item" href="<?php echo base_url() ?>travel-insurence"><i class="bi bi-arrow-up-right"></i> Travel Insurence</a></li>
                                        </ul>
                                    </li> 
                                    
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Health Insurence </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="<?php echo base_url() ?>health-insurence"><i class="bi bi-arrow-up-right"></i> Health Insurence</a></li>
                                            <li><a class="dropdown-item" href="<?php echo base_url() ?>life-insurence"><i class="bi bi-arrow-up-right"></i> Life Insurence</a></li>
                                            <li><a class="dropdown-item" href="<?php echo base_url() ?>personal-accident"><i class="bi bi-arrow-up-right"></i> Personal Accident</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="">Contact us</a>
                                    </li>
                                </ul>
                                <div class="nav-right d-none d-xl-block">
                                    <div class="nav-right__search">
                                        <a href="<?php echo base_url() ?>" class="btn_theme btn_theme_active">Get a Quote<i class="bi bi-arrow-up-right"></i><span></span></a>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <!-- Offcanvas More info-->
    <div class="offcanvas offcanvas-end " tabindex="-1" id="offcanvasRight">
        <div class="offcanvas-body custom-nevbar">
            <div class="row">
                <div class="col-md-7 col-xl-8">
                    <div class="custom-nevbar__left">
                        <button type="button" class="close-icon d-md-none ms-auto" data-bs-dismiss="offcanvas" aria-label="Close"><i class="bi bi-x"></i></button>
                        <ul class="custom-nevbar__nav mb-lg-0">
                            <li class="nav-item">
                                        <a class="nav-link" href="loan-comparison.html">Home</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Motor Insurence </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="<?php echo base_url() ?>motor-insurence"><i class="bi bi-arrow-up-right"></i> Car Insurence</a></li>
                                            <li><a class="dropdown-item" href="<?php echo base_url() ?>bike-insurence"><i class="bi bi-arrow-up-right"></i> Bike Insurence</a></li>
                                            <li><a class="dropdown-item" href="<?php echo base_url() ?>commercial-insurence"><i class="bi bi-arrow-up-right"></i> Comm. Vehical Insurence</a></li>
                                            <li><a class="dropdown-item" href="<?php echo base_url() ?>travel-insurence"><i class="bi bi-arrow-up-right"></i> Travel Insurence</a></li>
                                        </ul>
                                    </li> 
                                    
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Health Insurence </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="<?php echo base_url() ?>health-insurence"><i class="bi bi-arrow-up-right"></i> Health Insurence</a></li>
                                            <li><a class="dropdown-item" href="<?php echo base_url() ?>life-insurence"><i class="bi bi-arrow-up-right"></i> Life Insurence</a></li>
                                            <li><a class="dropdown-item" href="<?php echo base_url() ?>personal-accident"><i class="bi bi-arrow-up-right"></i> Personal Accident</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo base_url() ?>">Contact us</a>
                                    </li>
                                    <li class="menu_item">
                                        <a class="menu_link" href="<?php echo base_url() ?>">Get a Quote</a>
                                    </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-5 col-xl-4">
                    <div class="custom-nevbar__right">
                        <div class="custom-nevbar__top d-none d-md-block">
                            <button type="button" class="close-icon ms-auto" data-bs-dismiss="offcanvas" aria-label="Close"><i class="bi bi-x"></i></button>
                            <div class="custom-nevbar__right-thumb mb-auto">
                                <img src="assets/images/logo.png" alt="logo">
                            </div>
                        </div>
                        <ul class="custom-nevbar__right-location">
                            <li>
                                <p class="mb-2">Phone: </p>
                                <a href="tel:+9104586771" class="fs-4 contact">+91-91045-86771</a>
                            </li>
                            <li class="location">
                                <p class="mb-2">Email: </p>
                                <a href="mailto:patel6466bimal@gmail.com" class="fs-4 contact">patel6466bimal@gmail.com</a>
                            </li>
                            <li class="location">
                                <p class="mb-2">Location: </p>
                                <p class="fs-4 contact">Mankana, Kamrej, surat,Gujarat-394325</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- header-section end -->
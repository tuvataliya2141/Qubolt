<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Qubolt</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Premium Bootstrap 4 Landing Page Template" />
        <meta name="keywords" content="bootstrap 4, premium, marketing, multipurpose" />
        <meta content="Qubolt" name="author" />
        <!-- favicon -->
        <link rel="shortcut icon" href="<?php echo base_url('assets/images/qubolt_favicon.png'); ?>">
        <!-- Bootstrap -->
        <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css" />
        <!-- Icons -->
        <link href="<?php echo base_url('assets/css/materialdesignicons.min.css'); ?>" rel="stylesheet" type="text/css" />
        <!-- Magnific -->
        <link href="<?php echo base_url('assets/css/magnific-popup.css'); ?>" rel="stylesheet" type="text/css" />
        <!-- Slider -->               
        <link rel="stylesheet" href="<?php echo base_url('assets/css/owl.carousel.min.css'); ?>"/> 
        <link rel="stylesheet" href="<?php echo base_url('assets/css/owl.theme.default.min.css'); ?>"/> 
        <!-- Main css --> 
        <link href="<?php echo base_url('assets/css/style.css'); ?>" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.min.css">
    </head>

    <body>
        <!-- Loader -->
        <div id="preloader">
            <div id="status">
                <div class="spinner">
                    <div class="double-bounce1"></div>
                    <div class="double-bounce2"></div>
                </div>
            </div>
        </div>
        <!-- Loader -->

        <!-- Navbar STart -->        
        <header id="topnav" class="defaultscroll sticky bg-white">                        
            <section class="bg-light" style="padding: 10px 10px 0 10px;">
                <div class="container">
                    <div class="row">                        
                        <div class="col-xl-12 col-md-12">
                            <div class="short_contact_list">
                                <ul>
                                    <li><a href="javascript:;" data-toggle="modal" data-target="#LoginForm"> <i class="mdi mdi-pencil"></i> Request A Quote</a></li>
                                    <li><a href="tel:18000000000"> <i class="mdi mdi-phone"></i> 1-800-000-0000</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="container">
                <!-- Logo container-->
                <div>
                    <a class="logo" href="<?php echo base_url(); ?>"><img src="<?php echo base_url("assets/images/logo.png"); ?>"></a>
                </div>                                 
                <!-- End Logo container-->
                <div class="menu-extras">
                    <div class="menu-item">
                        <!-- Mobile menu toggle-->
                        <a class="navbar-toggle">
                            <div class="lines">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </a>
                        <!-- End mobile menu toggle-->
                    </div>
                </div>

                <div id="navigation">
                    <!-- Navigation Menu-->   
                    <ul class="navigation-menu">
                        <li><a href="<?php echo base_url('home'); ?>">Home</a></li>
                        <li><a href="<?php echo base_url('about'); ?>">About</a></li>
                        <li><a href="<?php echo base_url('web_development'); ?>">Web Development</a></li>
                        <li><a href="<?php echo base_url('seo'); ?>">SEO</a></li>
                        <li><a href="<?php echo base_url('call_center_bpo'); ?>">Call Center Bpo</a></li>
                        <li><a href="<?php echo base_url('portfolio'); ?>">Portfolio</a></li>
                        <li><a href="<?php echo base_url('contact'); ?>">Contact</a></li>                        
                    </ul><!--end navigation menu-->
                </div><!--end navigation-->
            </div><!--end container-->
        </header><!--end header-->
        <!-- Navbar End -->

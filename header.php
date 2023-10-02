<?php
error_reporting(E_ALL ^ E_WARNING);
include_once 'path.php';
require_once MODEL_PATH . 'operations.php';

if (!empty($_SESSION['error'])) {
    foreach ($_SESSION['error'] as $err) {
        error_message(ERROR_DEFINITION[$err]) . PHP_EOL;
    }
}

if (!empty($_SESSION['success'])) {
    foreach ($_SESSION['success'] as $success) {
        success_message(SUCCESS_DEFINITION[$success]) . PHP_EOL;
    }
}

if (!empty($_SESSION['warning'])) {
    foreach ($_SESSION['warning'] as $warning) {
        warning_message(WARNING_DEFINITION[$warning]) . PHP_EOL;
    }
}

unset_session_error();
unset_session_success();
unset_session_warning();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?= APP_NAME ?>">

    <!-- ========== Page Title ========== -->
    <title><?= APP_NAME ?></title>

    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="assets/img/logo/fav.png" type="image/x-icon">

    <!-- ========== Start Stylesheet ========== -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <link href="assets/css/flaticon-set.css" rel="stylesheet" />
    <link href="assets/css/elegant-icons.css" rel="stylesheet" />
    <link href="assets/css/magnific-popup.css" rel="stylesheet" />
    <link href="assets/css/owl.carousel.min.css" rel="stylesheet" />
    <link href="assets/css/owl.theme.default.min.css" rel="stylesheet" />
    <link href="assets/css/animate.css" rel="stylesheet" />
    <link href="assets/css/bootsnav.css" rel="stylesheet" />
    <link href="style.css" rel="stylesheet">
    <link href="assets/css/responsive.css" rel="stylesheet" />
    <!-- ========== End Stylesheet ========== -->


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5/html5shiv.min.js"></script>
      <script src="assets/js/html5/respond.min.js"></script>
    <![endif]-->
    <style>
        html {
            scroll-behavior: smooth;
        }

        .heading {
            text-align: center;
            margin-top: 30px;
        }
    </style>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <!-- ========== Google Fonts ========== -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,500,600,700,800" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script type="text/javascript">
        function getCookie(name) {
            var cookieValue = null;
            if (document.cookie && document.cookie !== '') {
                var cookies = document.cookie.split(';');
                for (var i = 0; i < cookies.length; i++) {
                    var cookie = cookies[i].trim();
                    // Does this cookie string begin with the name we want?
                    if (cookie.substring(0, name.length + 1) === (name + '=')) {
                        cookieValue = decodeURIComponent(cookie.substring(name.length + 1));
                        break;
                    }
                }
            }
            return cookieValue;
        }

        function uuidv4() { //universally unique identifier version 4
            return 'xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx'.replace(/[xy]/g, function(c) {
                var r = Math.random() * 16 | 0,
                    v = c == 'x' ? r : (r & 0x3 | 0x8);
                return v.toString(16);
            });
        }

        let device = getCookie('device')

        if (device == null || device == undefined) {
            device = uuidv4()
        }

        document.cookie = 'device=' + device + ";domain=;path=/"
    </script>
</head>

<body>

    <!-- Preloader Start -->
    <!--<div class="se-pre-con"></div>-->
    <!-- Preloader Ends -->

    <!-- Header 
    ============================================= -->
    <header id="home">

        <!-- Start Navigation -->
        <nav class="navbar navbar-default attr-border navbar-sticky bootsnav">

        

            <div class="container">

                <!-- Start Atribute Navigation -->
                <div class="attr-nav">
                    <ul>
                        
                        <li class="side-menu"><a href="#"><i class="fa fa-bars"></i></a></li>
                    </ul>
                </div>
                <!-- End Atribute Navigation -->

                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="index.html">
                        <img src="assets/img/logo/logo.png" style="width:120px;" class="logo" alt="Logo">
                    </a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav navbar-right" data-in="#" data-out="#">

                        <li class="<?= $page == 'home' ? 'active' : '' ?>">
                            <a href="index">Home</a>
                        </li>
                        <li>
                            <a href="<?= $page == 'home' ? '' : 'index' ?>#services">Services</a>
                        </li>
                        <li>
                            <a href="<?= $page == 'home' ? '' : 'index' ?>#about">About</a>
                        </li>
                        <li class="<?= $page == 'therapists' ? 'active' : '' ?>">
                            <a href="find">Therapists</a>
                        </li>
                        <?php
                        if (isset($_SESSION['login'])) { ?>
                            <li>
                                <a href="client/">Dashboard</a>
                            </li>
                        <?php
                        } else { ?>
                            <li>
                                <a href="login">Login</a>
                            </li>
                        <?php
                        }
                        ?>

                        <li>
                            <a href="contact">contact</a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>

            <!-- Start Side Menu -->
            <div class="side">
                <a href="#" class="close-side"><i class="fa fa-times"></i></a>
                <div class="widget">
                    <h4 class="title">About Us</h4>
                    <p>
                        The peak of Covid 19 was a time of reckoning for many people across the globe. We all went through different encounters and this changed our lives either positively or negatively. During this time, mental health conditions were on the surge and the numbers continue to rise by the day. PsychX is a brain child of individuals who had an encounter with mental health either directly or indirectly.
                    </p>
                </div>
                <div class="widget">
                    <h4 class="title">Additional Links</h4>
                    <ul>
                        <li><a href="login">Login</a></li>
                        <li><a href="login">Register</a></li>
                    </ul>
                </div>
                <div class="widget social">
                    <h4 class="title">Connect With Us</h4>
                    <ul class="link">
                        <li class="facebook"><a href="https://www.facebook.com/PsychXglobal"><i class="fab fa-facebook-f"></i></a></li>
                        <li class="twitter"><a href="https://twitter.com/PsychXglobal"><i class="fab fa-twitter"></i></a></li>
                        <li class="twitter"><a href="https://www.instagram.com/psychx.io/"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
            <!-- End Side Menu -->

        </nav>
        <!-- End Navigation -->

    </header>
    <!-- End Header -->
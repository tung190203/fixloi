<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap"
        rel="stylesheet">

    <title>Klassy Cafe - Restaurant</title>
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="public/assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="public/assets/css/font-awesome.css">

    <link rel="stylesheet" href="public/assets/css/templatemo-klassy-cafe.css">

    <link rel="stylesheet" href="public/assets/css/owl-carousel.css">

    <link rel="stylesheet" href="public/assets/css/lightbox.css">

</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <!-- <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div> -->
    <!-- ***** Preloader End ***** -->
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.php" class="logo">
                            <img src="public/assets/images/klassy-logo.png" align="klassy cafe html template">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="#about">About</a></li>
                            <li class="scroll-to-section"><a href="#menu">Menu</a></li>
                            <li class="scroll-to-section"><a href="#chefs">Chefs</a></li>
                            <!-- <li class=""><a rel="sponsored" href="https://templatemo.com" target="_blank">External URL</a></li> -->
                            <li class="scroll-to-section"><a href="#reservation">Contact Us & Booking</a></li>
                            <li class="submenu">
                                <a href="javascript:;"><img src="public/assets/images/456212.png" alt="" width="20px"
                                        style="margin-bottom: 10px;" class="img1"></a>

                                <ul>
                                    <?php
                                     if (isset($_SESSION['username'])) {
                                    ?>
                                     <li><a href="index.php?act=update">Cập nhật tài khoản</a></li>
                                    <li><a href="index.php?act=forgot">Quên mật khẩu</a></li>
                                    <li><a href="index.php?act=logout">Thoát</a></li>
                                    <?php
                                     }else{
                                    ?>
                                    <li><a href="index.php?act=login">Login</a></li>
                                    <li><a href="index.php?act=register">Register</a></li>
                                    <?php
                                     }
                                    ?>
                                </ul>
                            </li>
                            <li><a>
                                    <?php
                                    if (isset($_SESSION['username'])) {
                                        ?>
                                        <span>Hello</span>[<?php echo $_SESSION['username']['Name'] ?>]
                                    <?php
                                    } else {

                                    }
                                    ?>

                                </a></li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->
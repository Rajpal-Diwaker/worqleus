<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title> <?php echo $page_title; ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="<?php echo(WEB.'/css/bootstrap.css'); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo(WEB.'/css/aos.css'); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo(WEB.'/css/owl.carousel.css'); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo(WEB.'/css/font-awesome.min.css'); ?>" media="screen" rel="stylesheet" type="text/css">
    <link href="<?php echo(WEB.'/css/style.css'); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo(WEB.'/css/media.css'); ?>" rel="stylesheet" type="text/css">
    <script src="<?php echo(WEB.'/js/jquery-2.1.1.js'); ?>"></script>
    <script src="<?php echo(WEB.'/js/owl.carousel.js'); ?>"></script>
    <script src="<?php echo(WEB.'/js/bootstrap.js'); ?>"></script>
    <script src="<?php echo(WEB.'/js/aos.js'); ?>"></script>
    <script src="<?php echo(WEB.'/js/script.js'); ?>"></script>
    <link rel="shortcut icon" href="<?php echo(WEB.'/images/fav.png'); ?>" type="image/x-icon">
    <link rel="icon" href="<?php echo(WEB.'/images/fav.png'); ?>" type="image/x-icon">
</head>

<body>
    <!--Header Start Here-->
    <header class="clearfix">
        <div class="container">
            <div class="row">
                <nav class="navbar navbar-default">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="<?php echo BASEURL; ?>">logo</a>
                    </div>
                    <div class="navbar-collapse">
                        <div class="navbar_collapse_inner">
                            <ul class="nav navbar-nav navbar-right">
                                <li class="active"><a href="index.html">Ask the Experts</a></li>
                                <?php 
                                $login=$this->session->userdata('login');
                                $usertype = $this->session->userdata('user_type');
                                if($login=="true" && $usertype === 'user'){  
                                ?>
                                <li><a href="<?php echo(BASEURL.'/signout'); ?>">Sign Out </a></li>
                                <?php }else{ ?>
                                <li><a href="<?php echo(BASEURL.'/signin'); ?>">Sign In </a></li>
                                <li><a href="<?php echo(BASEURL.'/signup'); ?>">Sign Up</a></li>
                                <?php } ?>
                                <li><a href="#" class="freelancebtn">Become a Freelancer</a></li>
                            </ul>
                            <span class="menuClose"><img src="<?php echo(WEB.'/images/menuclose.png'); ?>" width="30" height="30"
                                    alt="#"></span>
                        </div>
                        <div class="menuopenbg"></div>
                    </div>
                </nav>
            </div>
        </div>
        <div class="categories_stip">
            <div class="container">
                <div class="row">
                    <ul>
                        <li><a href="<?php echo(BASEURL.'/web-mobile-it'); ?>">Web, Mobile & IT</a></li>
                        <li><a href="<?php echo(BASEURL.'/graphics-designs-arts'); ?>">Graphics, Designs & Arts</a></li>
                        <li><a href="<?php echo(BASEURL.'/business-marketing'); ?>">Business & Marketing</a></li>
                        <li><a href="<?php echo(BASEURL.'/architecture-engineering'); ?>">Architecture & Engineering</a></li>
                        <li><a href="<?php echo(BASEURL.'/legal-service'); ?>">Legal Service</a></li>
                        <li><a href="<?php echo(BASEURL.'/writing'); ?>">Writing</a></li>
                        <li><a href="<?php echo(BASEURL.'/tutors'); ?>">Tutors</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <!--Header End Here-->
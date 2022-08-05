<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>
<!doctype html>
<html lang="en-gb" class="no-js">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <title>My Travel - my memory</title>
    <meta name="description" content="Traveller">
    <meta name="author" content="WebThemez">

    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!--  <link href="assets/css/bootstrap.css" rel='stylesheet' type='text/css' /> -->
    <link rel="stylesheet" type="text/css" href="css/isotope.css" media="screen" />
    <link rel="stylesheet" href="js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/da-slider.css" />
    <!-- Owl Carousel Assets -->
    <link href="js/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css" />
    <!-- Font Awesome -->
    <!--animate-->
    <link href="assets/css/animate.css" rel="stylesheet" type="text/css" media="all">
    <link href="font/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style type="text/css">
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: arial;
    }

    body {
        font-family: 'Source Code Pro', monospace;
    }

    /*=======Navbar===*/
    .bg {
        background: #fff;
    }

    .main-navbar-light {
        background: transparent !important;
        position: absolute;
        left: 0;
        right: 0;
        z-index: 3;
        top: 10px;
    }

    /*====End of Navabr==*/
    /*====Hero Section===*/
    .hero-wrap {
        width: 100%;
        height: 850px;
        position: relative;
        background-size: cover;
        background-repeat: no-repeat;
        background-position: top center;
        z-index: 0;
    }

    .hero-wrap .overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        content: "";
        opacity: .5;
        background: #077cb3;
        height: 850px;
    }

    .hero-wrap .main-text {
        height: 800px !important;

    }

    .main-text h1 {
        font-size: 60px;
        color: #fff;
        line-height: 1.1;
        font-weight: bold;

    }

    .main-text p {
        line-height: 1.5;
        color: #fff;
    }

    .btn-hero {
        background-color: #030157 !important;
        color: #fff !important;
        margin-right: 5px;
        margin-left: 5px;
        animation: skew 3s infinite;
        animation-direction: normal;
        transform: skew(20deg);
        animation-direction: alternate;
        padding: 5px 17px;
    }

    @keyframes skew {
        0% {
            transform: skewX(20deg);
        }

        100% {
            transform: skewX(-20deg);
        }
    }

    /*====End of Hero Section===*/
    .btn-search {
        background: #021633 !important;
        border: 2px solid #021633;
        color: #fff !important;
        margin-left: 3px !important;
    }

    .btn-search:hover {
        border: 2px solid #021633;
        background: transparent;
        color: #021633;
    }

    .section-search {
        background: #018ca5;
    }


    @media (min-width: 768px) {
        .tabulation-search {
            margin-top: -60px;
        }
    }

    .tab-search .nav-pills p {
        margin-bottom: 0;
    }

    .tab-search .nav-pills .nav-link {
        float: left;
        border-radius: 0;
        margin-bottom: 0;
        background: white;
    }

    .tab-search .nav-pills .nav-link.active {
        background: #5f9fff;
    }

    @media (min-width: 768px) {
        .tab-search .nav-pills .nav-link.active {
            margin-top: -10px;
        }
    }

    @media (max-width: 767.98px) {
        .tab-search .nav-pills .nav-link {
            display: block;
            width: 100%;
        }
    }

    /*====Welcome Section====*/
    .heading-section h2 {
        text-transform: uppercase;
        font-weight: bold;
    }

    .img-wrap .effect {
        position: relative;
        margin-bottom: 0;
        display: block;
    }

    .img-wrap .effect:after {
        z-index: -1;
        content: "";
        position: absolute;
        top: 10px;
        right: 10px;
        bottom: 10px;
        left: 10px;
        background: #011525;
        transition: .3s all ease-in-out;
    }

    .img-wrap:hover .effect:after {
        right: -10px;
        bottom: -10px;
        position: absolute;
    }

    .btn-about {
        background-color: #030157 !important;
        color: #fff !important;
        margin-right: 5px;
        margin-left: 5px;
        animation: skew 3s infinite;
        animation-direction: normal;
        transform: skew(20deg);
        animation-direction: alternate;
        padding: 5px 17px;
    }

    @keyframes skew {
        0% {
            transform: skewX(20deg);
        }

        100% {
            transform: skewX(-20deg);
        }
    }

    /*==========Popular Places===========*/
    /*----Popular Places---*/
    .popular {
        background-image: url(./images/hero-2.jpg);
        background-size: cover;
        background-position: center center;
        background-repeat: no-repeat;
        position: relative;
        padding-top: 180px;
        padding-bottom: 340px;
    }

    .popular:before {
        position: absolute;
        width: 100%;
        height: 100%;
        left: 0;
        top: 0;
        background: linear-gradient(rgba(26, 144, 255, 0.5), rgba(236, 5, 236, 0.4)),
            url(./images/hero-2.jpg)center;
        background-size: cover;
        background-repeat: no-repeat;
        content: '';
    }

    .all-image {
        padding-bottom: 75px;
        position: relative;
        margin-top: -295px;
    }

    .all-image .single-img {
        position: relative;
        margin-bottom: 20px;
        overflow: hidden;
    }

    .all-image .single-img .img-thumb {
        height: 410px;
    }

    .all-image .single-img .img-thumb img {
        width: 100%;
        height: 100%;
    }

    .all-image .single-img .img-hover {
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        text-align: center;
        background: rgba(2, 58, 110, 0.6);
        transform: translateX(-50%);
        transition: 0.5s;
        opacity: 0;
        overflow: hidden;
    }

    .all-image .single-img .img-hover .title {
        position: absolute;
        top: 50%;
        left: 0;
        right: 0;
        text-align: center;
        transform: translateY(-50%);
    }

    .all-image .single-img .img-hover h3 {
        color: #fff;
        font-size: 24px;
        font-weight: bold;
    }

    .all-image .single-img:hover .img-hover {
        transform: translateX(0%);
        opacity: 1;
    }

    /*==========End of Popular Places===========*/
    /*========== Services section===========*/
    .services .icon-circle {
        text-align: center;
        padding: 40px 20px;
        transition: all ease-in-out 0.3s;
        box-shadow: 2px 4px rgba(19, 19, 19, 0.5);
    }

    .services .icon-circle.purple {
        background: #3e0283;
        color: #fff;
    }

    .services .icon-circle.pink {
        background: #c405ca;
        color: #fff;
    }

    .services .icon-circle.yellow {
        background: #f7a91a;
        color: #fff;
    }

    .services .icon-circle.blue {
        background: #021633;
        color: #fff;

    }

    .services .icon-circle .icon {
        margin: 0 auto;
        width: 64px;
        height: 64px;
        border-radius: 50px;
        border: 1px solid #fff;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 20px;
        transition: ease-in-out 0.3s;
        color: #fff;
    }

    .services .icon-circle .icon i {
        font-size: 28px;
    }

    .services .icon-circle h4 {
        font-weight: bold;
        margin-bottom: 15px;
        font-size: 24px;
    }

    .services .icon-circle p {
        line-height: 24px;
        font-size: 14px;
        margin-bottom: 0;
    }

    .services .icon-circle:hover {
        border-color: #025277;
        box-shadow: 0px 0 25px 0 rgba(3, 75, 122, 0.1);
    }

    .services .icon-circle:hover .icon {
        color: #fff;
        background: #004299;
    }

    /*==========End of Services section===========*/
    .team .member {
        margin-bottom: 20px;
        overflow: hidden;
        text-align: center;
        border-radius: 5px;
        background: #fff;
        box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
    }

    .team .member .member-img {
        position: relative;
        overflow: hidden;
    }

    .team .member .social {
        position: absolute;
        left: 0;
        bottom: 0;
        right: 0;
        height: 40px;
        opacity: 0;
        transition: ease-in-out .3s;
        text-align: center;
        background: rgba(255, 255, 255, 0.8);
    }

    .team .member .social a {
        transition: color 0.3s;
        color: #000;
        margin: 0 10px;
        padding-top: 8px;
        display: inline-block;
    }

    .team .member .social a:hover {
        color: #2181ff;
    }

    .team .member .social i {
        font-size: 18px;
        margin: 0 2px;
    }

    .team .member .member-info {
        padding: 25px 15px;
    }

    .team .member .member-info h4 {
        font-weight: bold;
        margin-bottom: 5px;
        font-size: 18px;
        color: #000;
    }

    .team .member .member-info span {
        display: block;
        font-size: 14px;
        font-weight: lighter;
        color: #000;
    }

    .team .member .member-info p {
        font-style: italic;
        font-style: 15px;
        line-height: 26px;
        color: #000;
    }

    .team .member:hover .social {
        opacity: 1;
    }

    /*======Package section==========*/
    .package {
        position: relative;
        z-index: 1;
    }

    .package:after {
        position: absolute;
        left: 0;
        bottom: 0;
        width: 100%;
        height: 46%;
        content: "";
        background-color: #02acf0;
    }

    .package .package-1 {
        position: relative;
        z-index: 1;
        background-color: #02acf0;
    }

    @media (max-width:576px) {
        .package .package-1 {
            margin-bottom: 250px;
        }
    }

    .package .package-1 .package-text {
        position: absolute;
        right: 0px;
        top: 0px;
        width: 271px;
        background: #02acf0;
        padding: 35px 22px;
        box-shadow: 0px 0px 0px 10px rgba(2, 3, 63, 0.5);
        margin: 10px;
    }

    @media(max-width:576px) {
        .package .package-1 .package-text {
            top: 50%;
        }
    }

    .package .package-1 .package-text p {
        color: #fff;
        margin-top: 35px;
    }

    .package .package-1 .package-text .btn-package {
        margin-top: 22px;
    }

    .btn-package {
        background: #030157;
        color: #fff;
        margin-right: 5px;
        margin-left: 5px;
    }

    /*=======End of package section=====*/
    /*======= historical places section=====*/
    .historical-places {
        padding-top: 130px;
        padding-bottom: 140px;
        background: #f7fafd;
    }

    .historical-places .single-dest {
        background: #fff;
        border-radius: 5px;
        overflow: hidden;
        transition: 0.3s;
        margin-bottom: 30px;
    }

    .historical-places .single-dest .thumb {
        position: relative;
        overflow: hidden;
    }

    .historical-places .single-dest .thumb img {
        width: 100%;

    }

    .historical-places .single-dest .thumb .price {
        position: absolute;
        background: #02acf0;
        padding: 7px 18px 4px 18px;
        display: inline-block;
        top: 20px;
        left: 20px;
        border-radius: 18px;
        color: #fff;
        font-size: 16px;
        transition: 0.3s;
    }

    .historical-places .single-dest .dest-info {
        padding: 27px 20px 25px 20px;
    }

    .historical-places .single-dest .dest-info h3 {
        font-size: 22px;
        font-weight: bold;
        color: #040e27;
        margin-bottom: 0;
        transition: 0.3s;
    }

    .historical-places .single-dest .dest-info p {
        font-size: 14px;
        font-weight: lighter;
        color: #000;
        margin-top: 2px;
        margin-bottom: 7px;
    }

    .historical-places .single-dest .dest-info .rating span i {
        font-size: 12px;
        color: #f88408;
    }

    .historical-places .single-dest .dest-info .rating span a {
        font-size: 14px;
        color: #000;
        margin-left: 5px;
    }

    .historical-places .single-dest .dest-info .rating .days {
        font-size: 14px;
        font-weight: light;
        color: #000;
    }

    .historical-places .single-dest .dest-info .rating .days i {
        margin-right: 8px;
    }

    .historical-places .single-dest .dest-info .rating .days a {
        font-size: 14px;
        color: #000;
    }

    .historical-places .single-dest:hover {
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.5);
    }

    .historical-places .single-dest:hover .dest-info h3 {
        color: #030942;
    }

    .historical-places .single-dest:hover .thumb .price {
        background: #0292f1;
    }

    .historical-places .btn-hist {
        margin-top: 10px;
    }

    .btn-hist {
        background-color: #030157 !important;
        color: #fff !important;
        margin-right: 5px;
        margin-left: 5px;
        animation: skew 3s infinite;
        animation-direction: normal;
        transform: skew(20deg);
        animation-direction: alternate;
        padding: 3px 3px;
    }

    @keyframes skew {
        0% {
            transform: skewX(20deg);
        }

        100% {
            transform: skewX(-20deg);
        }
    }

    /*=======End of historical places section=====*/
    /*======Testimonial section===*/
    .testimonial-section {
        padding-bottom: 60px;

    }

    .testimonial-section .section-title h2 {
        font-weight: 60px;
        color: #000;
        margin-top: 0;
    }

    .testimonial-item {
        margin-bottom: 40px;
    }

    .testimonial-item .test-date {
        font-size: 11px;
        letter-spacing: 1.2px;
        color: #242424;
        opacity: 0.5;
        font-weight: 600;
        line-height: 36px;
    }

    .testimonial-item h4 {
        color: #242424;
        font-weight: 600;
        margin-bottom: 6px;
    }

    .testimonial-item .rating {
        margin-bottom: 15px;
    }

    .testimonial-item .rating i {
        color: #ed8a19;
    }

    .testimonial-item p {
        letter-spacing: 0.2px;
        margin-bottom: 30px;
    }

    .testimonial-item .customer {
        overflow: hidden;
    }

    .testimonial-item .customer .customer-photo {
        float: left;
        margin-right: 18px;
    }

    .testimonial-item .customer .customer-photo img {
        height: 60px;
        width: 60px;
        border-radius: 50%;
    }

    .testimonial-item .customer .test-text {
        float: left;
        padding-top: 5px;
    }

    .testimonial-item .customer .test-text h6 {
        color: #033e55;
        font-weight: 600;
        line-height: 24px;
    }

    .testimonial-item .customer .test-text h6 span {
        display: block;
        font-size: 12px;
        color: #242424;
        letter-spacing: 0.2px;
    }

    /*=====End of testimonial section===*/
    /*=====blog section===*/
    .blog-section {
        padding-bottom: 50px;
    }

    .single-blog {
        margin-bottom: 42px;
    }

    .single-blog img {
        min-width: 100%;
        margin-bottom: 30px;
    }

    .single-blog .blog-detail {
        margin-bottom: 10px;
    }

    .single-blog .blog-detail .blog-detail {
        font-size: 16px;
        color: #030942;
        display: inline-block;
        margin-right: 8px;
    }

    .single-blog .blog-detail .tag {
        font-size: 16px;
        color: #030942;
    }

    .single-blog h4 a {
        color: #030942;
        font-weight: bold;
        line-height: 30px;
    }

    /*=====End of blog section===*/
    /*=====Contact section===*/
    .contact .icon-box {
        color: #030942;
        text-align: center;
        box-shadow: 0 0 15px rgba(2, 81, 160, 0.6);
        padding: 20px 0 30px 0;
    }

    .contact .icon-box i.fab {
        font-size: 20px;
        color: #0292f1;
        border-radius: 50%;
        padding: 8px;
        background: #030942;
    }

    .contact .icon-box h3 {
        font-size: 20px;
        color: #000;
        font-weight: bold;
        margin: 10px 0;
    }

    .contact .icon-box p {
        padding: 0;
        line-height: 24px;
        font-size: 14px;
        margin-bottom: 0;
    }

    .contact .social-links {
        margin-top: 15px;
        display: flex;
        justify-content: center;
    }

    .contact .social-links a {
        font-size: 16px;
        display: inline-block;
        color: #fff;
        line-height: 1;
        margin: 0 8px;
        transition: 0.3s;
        padding: 10px;
        border-radius: 50px;
        border: 1px solid #030942;
    }

    .contact .social-links a:hover {
        color: #fff;
        border-color: #030942;
        background: #0292f1;
    }

    .contact form {
        box-shadow: 0 0 15px rgba(2, 81, 160, 0.6);
        padding: 27px;


    }

    /*=====End of contact section===*/
    .instagram .container-fluid {
        padding-left: 0;
        padding-right: 0;
    }

    .instagram .insta-img {
        display: block;
        height: 280px;
        position: relative;

    }

    .instagram .insta-img .icon {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(47, 137, 5225, 0.8);
        opacity: 0;
        transition: all 0.3s ease;

    }

    .instagram .insta-img:hover .icon {
        opacity: 1;
    }

    .instagram .heading-section h2 {
        font-size: 30px;
    }

    #footer {
        padding: 0 0 30px 0;
        color: #000;
        font-size: 16px;
        background: #0292f1;
    }

    #footer .footer-newsletter {
        padding: 50px 0;
        background: #0292f1;
        text-align: center;
        font-size: 15px;
    }

    #footer .footer-newsletter h4 {
        font-size: 24px;
        margin: 0 0 20px 0;
        padding: 0;
        line-height: 1;
        font-weight: bold;
        color: #000;
    }

    #footer .footer-newsletter form {
        margin-top: 30px;
        background: #fff;
        padding: 6px 10px;
        position: relative;
        border-radius: 4px;
        box-shadow: 0px 2px 15px rgba(0, 25, 41, 0.4);
        text-align: left;
    }

    #footer .footer-newsletter form input[type="email"] {
        border: 0;
        padding: 4px 8px;
        width: calc(100% - 100px);
    }

    #footer .footer-newsletter form input[type="submit"] {
        position: absolute;
        top: 0;
        right: -2px;
        bottom: 0;
        border: 0;
        background: none;
        font-size: 16px;
        padding: 0 20px;
        background: #030942;
        color: #fff;
        transition: 0.3s;
        border-radius: 0 4px 4px 0;
        box-shadow: 0px 2px 15px rgba(253, 253, 253, 0.7);
    }

    #footer .footer-newsletter form input[type="submit"]:hover {
        background: #0292f1;
    }

    #footer .copyright {
        float: left;
        color: #000;
    }

    #footer .credits {
        float: right;
        font-size: 16px;
        color: #000;
    }

    #footer .credits a {
        color: #000;
    }

    @media (max-width:575px) {

        #footer .copyright,
        #footer .credits {
            float: none;
            text-align: center;
        }
    }

    #cardStyle {
        align-items: stretch !important;
        flex: 0 0 25%;
        max-width: 25%;
        position: relative;
        width: 100%;
        padding-right: 15px;
        padding-left: 15px;
    }

    .member {
        margin-bottom: 20px;
        overflow: hidden;
        text-align: center;
        border-radius: 5px;
        background: #fff;
        box-shadow: 0px 2px 15px rgb(0 0 0 / 10%);
    }

    .member-img {
        position: relative;
        overflow: hidden;
    }

    .social {
        position: absolute;
        left: 0;
        bottom: 0;
        right: 0;
        height: 40px;
        opacity: 0;
        transition: ease-in-out .3s;
        text-align: center;
        background: rgba(255, 255, 255, 0.8);
    }
    </style>

</head>

<body>
    <?php include('includes/header.php'); ?>
    <!--/.header-->
    <div id="#top"></div>
    <section class="hero-wrap" id="home" style="background-image:url('https://wallpaperaccess.com/full/568916.jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters main-text align-items-center"
                style="height: 800px!important;align-items: center!important; display: flex; flex-wrap: wrap;">
                <div class="col-lg-7 col-md-6 d-flex align-items-end">
                    <div class="text">
                        <h1 class="" style="text-transform: capitalize!important; margin-bottom: 1.5rem!important;">find
                            a perfect deal<br>
                            for your next trip
                        </h1>
                        <p style="font-size:18px;">
                            “One’s destination is never a place, but a new way of seeing things.” </p>
                        <!-- <a href="#" class="btn btn-hero py-2 px-3">View all</a> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- <section id="introText">
        <div class="container">
            <div class="text-center adeInDown animated animated" data-wow-delay=".5s"
                style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">
                <h1>My Travel Gives You a Great Holiday Package</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse interdum erat et neque tincidunt
                    volutpat. Cras eget augue id dui varius pretium. Cras posuere dolor risus. Pellentesque elementum
                    ultricies quam, sit amet rhoncus nisl viverra in. Cras imperdiet nisi a euismod molestie. Ut a metus
                    arcu. </p>
            </div>
        </div>
    </section> -->
    <!--About-->
    <section class="about-section" style="margin-top: 3rem;" id="aboutUs">
        <div class="container">
            <div class="row"
                style="display: flex; justify-content: center!important; flex-wrap: wrap; margin-right: -15px; margin-left: -15px;">
                <div class="col-lg-6 heading-section"
                    style="text-align: center!important; margin-bottom: 3rem!important; flex: 0 0 50%; max-width: 50%; position: relative; width: 100%; padding-right:15px; padding-left: 15px;">
                    <h2 class=""
                        style="text-transform: uppercase; font-weight: bold; margin-bottom: 0.5rem!important; font-size: 2rem; line-height: 1.2;">
                        Welcome To Tourismo</h2>
                    <p style="margin-top: 0; margin-bottom: 1rem;">Hello!Tourismo looks forward to planning a resort,
                        cruise, or tour package for you! We are committed to designing an experience of a lifetime, for
                        each of our discerning clientele.</p>
                </div>
            </div>
            <div class=""
                style="display: flex; margin-bottom: 0!important; flex-wrap: wrap; margin-right: -15px; margin-left: -15px;">
                <div class=""
                    style="flex: 0 0 100%; max-width: 100%; position: relative; width: 100%; padding-right: 15px; padding-left: 15px;">
                    <div class="" style="display: flex; flex-wrap: wrap; margin-right: -15px; margin-left: -15px;">
                        <div class=""
                            style="margin-bottom: 1.5rem!important; order: 2; flex: 0 0 50%;max-width: 50%; position: relative; width: 100%; padding-right: 15px; padding-left: 15px;">
                            <a href="#" class=""
                                style="position: relative; margin-bottom: 0; display: block; color: #007bff; text-decoration: none; background-color: transparent;">
                                <img src="https://c4.wallpaperflare.com/wallpaper/179/915/685/photography-water-reflection-bali-wallpaper-preview.jpg"
                                    alt="" class="img-fluid"
                                    style="max-width: 100%; height: auto; vertical-align: middle; border-style: none;">
                            </a>
                        </div>
                        <div class=""
                            style="text-align: right!important; margin-right: auto!important; align-self: center!important; order: 1; flex: 0 0 41.666667%; position: relative; width: 100%; padding-right: 15px; padding-left: 15px; max-width: 41.666667%;">
                            <h2 class=""
                                style="font-size: 2rem; margin-bottom: 0.5rem; margin-top: 0; font-weight: 500; line-height: 1.2;">
                                Culture</h2>
                            <p class="" style="margin-bottom: 1.5rem!important; margin-top: 0;">
                                Travelers look for an “authentic experience,” and our community has its own special
                                attributes that set it apart from others. These features include history, traditions,
                                and yes, your arts and culture.
                            </p>
                            <!-- <a href="#" class="btn btn-about">Read More</a> -->
                        </div>
                    </div>
                </div>
            </div>


            <!------->
            <div class=""
                style="display: flex; margin-bottom: 0!important; flex-wrap: wrap; margin-right: -15px; margin-left: -15px;">
                <div class=""
                    style="flex: 0 0 100%; max-width: 100%; position: relative; width: 100%; padding-right: 15px; padding-left: 15px;">
                    <div class=""
                        style="display: flex; flex-direction: row-reverse; flex-wrap: wrap; margin-right: -15px; margin-left: -15px;">
                        <div class=""
                            style="margin-bottom: 1.5rem!important; order: 2; flex: 0 0 50%;max-width: 50%; position: relative; width: 100%; padding-right: 15px; padding-left: 15px;">
                            <a href="#" class=""
                                style="position: relative; margin-bottom: 0; display: block; color: #007bff; text-decoration: none; background-color: transparent;">
                                <img src="../tms/images/about2.jpg" alt="" class="img-fluid"
                                    style="max-width: 100%; height: auto; vertical-align: middle; border-style: none;">
                            </a>
                        </div>
                        <div class=""
                            style="  margin-left: 5rem; margin-right: auto!important; align-self: center!important; order: 1; flex: 0 0 41.666667%; position: relative; width: 100%; padding-right: 15px; padding-left: 15px; max-width: 41.666667%;">
                            <h2 class=""
                                style="font-size: 2rem; margin-bottom: 0.5rem; margin-top: 0; font-weight: 500; line-height: 1.2;">
                                History</h2>
                            <p class="" style="margin-bottom: 1.5rem!important; margin-top: 0;">
                                Tourism can be recognized as long as people have travelled; the narrative of Marco Polo
                                in the 13th century; the "grand tour" of the British aristocracy to Europe in the 18th
                                century; and the journeys of David Livingstone through Africa in the 19th century are
                                all examples of early tourism.
                            </p>
                            <!-- <a href="#" class="btn btn-about">Read More</a> -->
                        </div>
                    </div>
                </div>
            </div>


            <!----- -->

            <div class="row img-wrap mb-5 mb-lg-0"
                style="margin-bottom: 0!important; display: flex;flex-wrap: wrap; margin-right: -15px; margin-left: -15px;">
                <div class="col-12"
                    style="flex: 0 0 100%; max-width: 100%; position: relative; width: 100%; padding-right: 15px; padding-left: 15px;">
                    <div class="row" style="display: flex; flex-wrap: wrap; margin-right: -15px; margin-left: -15px;">
                        <div class=""
                            style="margin-bottom: 1.5rem!important; order: 2; flex: 0 0 50%;max-width: 50%; position: relative; width: 100%; padding-right: 15px; padding-left: 15px;">
                            <a href="#" class=""
                                style="position: relative; margin-bottom: 0; display: block; color: #007bff; text-decoration: none; background-color: transparent;">
                                <img src="https://images.unsplash.com/photo-1543731068-7e0f5beff43a?ixid=MnwxMjA3fDB8MHxzZWFyY2h8Nnx8bWFsZGl2ZXN8ZW58MHx8MHx8&ixlib=rb-1.2.1&w=1000&q=80"
                                    alt="" class=""
                                    style="max-width: 100%; height: auto; vertical-align: middle; border-style: none;">
                            </a>
                        </div>
                        <div class=""
                            style="text-align: right!important; margin-right: auto!important; align-self: center!important; order: 1;flex: 0 0 41.666667%; max-width: 41.666667%;position: relative; width: 100%; padding-right: 15px; padding-left: 15px;">
                            <h2 class=""
                                style="font-size: 2rem; margin-bottom: 0.5rem; font-weight: 500; line-height: 1.2;">
                                Nature</h2>
                            <p class="" style="margin-bottom: 1.5rem!important; margin-top: 0;">
                                Responsible travel to natural areas, which conserves the environment and improves the
                                welfare of local people. It is tourism based on the natural attractions of an area. It
                                includes birdwatching, photography, stargazing, camping, hiking, hunting, fishing, and
                                visiting parks.
                            </p>
                            <!-- <a href="#" class="btn btn-about">Read More</a> -->
                        </div>
                    </div>
                </div>
            </div>
            <!------->
        </div>
    </section>

    <b>
        <hr>
    </b>

    <!--Package-->
    <section class="secPad" id="packages">
        <div class="container">
            <div class="heading text-center">
                <!-- Heading -->
                <h2>Most Popular Packages</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
            </div>
            <div class="">
                <h3>Package List</h3>
                <?php $sql = "SELECT * from tbltourpackages order by rand() ";
      $query = $dbh->prepare($sql);
      $query->execute();
      $results=$query->fetchAll(PDO::FETCH_OBJ);
      $cnt=1;
      if($query->rowCount() > 0)
      {
        foreach($results as $result)
        { 
          ?>
                <div class="rom-btm">
                    <div class="col-md-3 room-left wow fadeInLeft animated" data-wow-delay=".5s">
                        <img src="admin/pacakgeimages/<?php echo htmlentities($result->PackageImage);?>"
                            class="img-responsive" alt="">
                    </div>
                    <div class="col-md-6 room-midle wow fadeInUp animated" data-wow-delay=".5s">
                        <h4 style="color:black;">Place to visit: <?php echo htmlentities($result->PackageName);?>
                        </h4>
                        <h6>Place Type : <?php echo htmlentities($result->PackageType);?></h6>
                        <p><b>Tour Location :</b> <?php echo htmlentities($result->PackageLocation);?></p>
                        <p><b>Features</b> <?php echo htmlentities($result->PackageFetures);?></p>
                    </div>
                    <div class="col-md-3 room-right wow fadeInRight animated" data-wow-delay=".5s">
                        <h5><i class="fa fa-inr"
                                style=""></i><?php echo htmlentities($result->PackagePrice);?></h5>
                        <a href="package_details.php?pkgid=<?php echo htmlentities($result->PackageId);?>" class="view"
                            style="background-color:blue">Details</a>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <?php 
        }
      } ?>
            </div>
            <div class="clearfix"></div>
        </div>
    </section>
    <!--Quote-->

   <!-- <section class="team section-bg" style="margin-top: 3rem!important; display:block;">
        <div class="container"
            style="max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;">
            <div class="section-title">
                <h2 class="text-center"
                    style="text-align: center!important; font-size: 2rem; margin-bottom: 0.5rem; font-weight: 500; line-height: 1.2;">
                    Team</h2>
                <p class="text-center" style="text-align: center!important; margin-top: 0; margin-bottom: 1rem;">
                    Tourismo has a dedicated and hardworking team with great experience.</p>
            </div>
            <div class="row" style="display: flex; flex-wrap: wrap; margin-right: -15px; margin-left: -15px;">
                <div class="col-lg-3 col-md-6 d-flex align-items-stretch" id="cardStyle">
                    <div class="member">
                        <div class="member-img">
                            <img src="https://wallpapercave.com/wp/wp3500243.jpg" class="img-fluid" alt=""
                                style="max-width: 100%; height: auto; vertical-align: middle; border-style: none;">
                            <div class="social">
                                <a href=""
                                    style="transition: color 0.3s; text-decoration: none;background-color: transparent; color: #000; margin: 0 10px; padding-top: 8px; display: inline-block;"><i
                                        class="fab fa-facebook" aria-hidden="true" style="font-size: 18px;margin: 0 2px; font-weight: 400; font-family: 'Font Awesome 5 Brands'; -webkit-font-smoothing: antialiased; display: inline-block; font-style: normal; font-variant: normal; text-rendering: auto; line-height: 1;" style="font-size: 18px;margin: 0 2px; font-weight: 400; font-family: 'Font Awesome 5 Brands'; -webkit-font-smoothing: antialiased; display: inline-block; font-style: normal; font-variant: normal; text-rendering: auto; line-height: 1;"></i></a>
                                <a href="" style="transition: color 0.3s; text-decoration: none;background-color: transparent; color: #000; margin: 0 10px; padding-top: 8px; display: inline-block;"><i class="fab fa-twitter" aria-hidden="true"
                                        style="font-size: 18px;margin: 0 2px; font-weight: 400; font-family: 'Font Awesome 5 Brands'; -webkit-font-smoothing: antialiased; display: inline-block; font-style: normal; font-variant: normal; text-rendering: auto; line-height: 1;"></i></a>
                                <a href=""
                                    style="transition: color 0.3s; text-decoration: none;background-color: transparent; color: #000; margin: 0 10px; padding-top: 8px; display: inline-block;"><i
                                        class="fab fa-instagram" aria-hidden="true" style="font-size: 18px;margin: 0 2px; font-weight: 400; font-family: 'Font Awesome 5 Brands'; -webkit-font-smoothing: antialiased; display: inline-block; font-style: normal; font-variant: normal; text-rendering: auto; line-height: 1;" style="font-size: 18px;margin: 0 2px; font-weight: 400; font-family: 'Font Awesome 5 Brands'; -webkit-font-smoothing: antialiased; display: inline-block; font-style: normal; font-variant: normal; text-rendering: auto; line-height: 1;"></i></a>
                                <a href=""
                                    style="transition: color 0.3s; text-decoration: none;background-color: transparent; color: #000; margin: 0 10px; padding-top: 8px; display: inline-block;"><i
                                        class="fab fa-linkedin" aria-hidden="true" style="font-size: 18px;margin: 0 2px; font-weight: 400; font-family: 'Font Awesome 5 Brands'; -webkit-font-smoothing: antialiased; display: inline-block; font-style: normal; font-variant: normal; text-rendering: auto; line-height: 1;" style="font-size: 18px;margin: 0 2px; font-weight: 400; font-family: 'Font Awesome 5 Brands'; -webkit-font-smoothing: antialiased; display: inline-block; font-style: normal; font-variant: normal; text-rendering: auto; line-height: 1;"></i></a>
                            </div>

                        </div>
                        <div class="member-info" style="padding: 25px 15px;">
                            <h4
                                style="font-weight: bold; margin-top: 0; line-height: 1.2; margin-bottom: 5px; font-size: 18px; color: #000;">
                                Prashant Yadav</h4>
                            <span
                                style="display: block; text-align: center; font-size: 14px; font-weight: lighter; color: #000;">Online
                                Marketing Executive</span>
                        </div>
                    </div>
                </div>
               
                <div class="col-lg-3 col-md-6 d-flex align-items-stretch" id="cardStyle">
                    <div class="member">
                        <div class="member-img">
                            <img src="https://i.ytimg.com/vi/FmHmlb0ny2Q/maxresdefault.jpg" class="img-fluid" alt=""
                                style="max-width: 100%; height: auto; vertical-align: middle; border-style: none;">
                            <div class="social">
                                <a href=""
                                    style="transition: color 0.3s; text-decoration: none;background-color: transparent; color: #000; margin: 0 10px; padding-top: 8px; display: inline-block;"><i
                                        class="fab fa-facebook" aria-hidden="true" style="font-size: 18px;margin: 0 2px; font-weight: 400; font-family: 'Font Awesome 5 Brands'; -webkit-font-smoothing: antialiased; display: inline-block; font-style: normal; font-variant: normal; text-rendering: auto; line-height: 1;"></i></a>
                                <a href=""
                                    style="transition: color 0.3s; text-decoration: none;background-color: transparent; color: #000; margin: 0 10px; padding-top: 8px; display: inline-block;"><i
                                        class="fab fa-twitter" aria-hidden="true" style="font-size: 18px;margin: 0 2px; font-weight: 400; font-family: 'Font Awesome 5 Brands'; -webkit-font-smoothing: antialiased; display: inline-block; font-style: normal; font-variant: normal; text-rendering: auto; line-height: 1;"></i></a>
                                <a href=""
                                    style="transition: color 0.3s; text-decoration: none;background-color: transparent; color: #000; margin: 0 10px; padding-top: 8px; display: inline-block;"><i
                                        class="fab fa-instagram" aria-hidden="true" style="font-size: 18px;margin: 0 2px; font-weight: 400; font-family: 'Font Awesome 5 Brands'; -webkit-font-smoothing: antialiased; display: inline-block; font-style: normal; font-variant: normal; text-rendering: auto; line-height: 1;"></i></a>
                                <a href=""
                                    style="transition: color 0.3s; text-decoration: none;background-color: transparent; color: #000; margin: 0 10px; padding-top: 8px; display: inline-block;"><i
                                        class="fab fa-linkedin" aria-hidden="true" style="font-size: 18px;margin: 0 2px; font-weight: 400; font-family: 'Font Awesome 5 Brands'; -webkit-font-smoothing: antialiased; display: inline-block; font-style: normal; font-variant: normal; text-rendering: auto; line-height: 1;"></i></a>
                            </div>

                        </div>
                        <div class="member-info">
                            <h4 style="font-weight: bold; margin-top: 0; line-height: 1.2; margin-bottom: 5px; font-size: 18px; color: #000;">Ankit Patel.</h4>
                            <span style="display: block; text-align: center; font-size: 14px; font-weight: lighter; color: #000;">Tour Executive</span>
                        </div>
                    </div>
                </div>
         
                <div class="col-lg-3 col-md-6 d-flex align-items-stretch" id="cardStyle">
                    <div class="member">
                        <div class="member-img">
                            <img src="https://i.vimeocdn.com/video/619039994_700x400.jpg" class="img-fluid" alt=""
                                style="max-width: 100%; height: auto; vertical-align: middle; border-style: none;">
                            <div class="social">
                                <a href=""
                                    style="transition: color 0.3s; text-decoration: none;background-color: transparent; color: #000; margin: 0 10px; padding-top: 8px; display: inline-block;"><i
                                        class="fab fa-facebook" aria-hidden="true" style="font-size: 18px;margin: 0 2px; font-weight: 400; font-family: 'Font Awesome 5 Brands'; -webkit-font-smoothing: antialiased; display: inline-block; font-style: normal; font-variant: normal; text-rendering: auto; line-height: 1;"></i></a>
                                <a href=""
                                    style="transition: color 0.3s; text-decoration: none;background-color: transparent; color: #000; margin: 0 10px; padding-top: 8px; display: inline-block;"><i
                                        class="fab fa-twitter" aria-hidden="true" style="font-size: 18px;margin: 0 2px; font-weight: 400; font-family: 'Font Awesome 5 Brands'; -webkit-font-smoothing: antialiased; display: inline-block; font-style: normal; font-variant: normal; text-rendering: auto; line-height: 1;"></i></a>
                                <a href=""
                                    style="transition: color 0.3s; text-decoration: none;background-color: transparent; color: #000; margin: 0 10px; padding-top: 8px; display: inline-block;"><i
                                        class="fab fa-instagram" aria-hidden="true" style="font-size: 18px;margin: 0 2px; font-weight: 400; font-family: 'Font Awesome 5 Brands'; -webkit-font-smoothing: antialiased; display: inline-block; font-style: normal; font-variant: normal; text-rendering: auto; line-height: 1;"></i></a>
                                <a href=""
                                    style="transition: color 0.3s; text-decoration: none;background-color: transparent; color: #000; margin: 0 10px; padding-top: 8px; display: inline-block;"><i
                                        class="fab fa-linkedin" aria-hidden="true" style="font-size: 18px;margin: 0 2px; font-weight: 400; font-family: 'Font Awesome 5 Brands'; -webkit-font-smoothing: antialiased; display: inline-block; font-style: normal; font-variant: normal; text-rendering: auto; line-height: 1;"></i></a>
                            </div>

                        </div>
                        <div class="member-info">
                            <h4 style="font-weight: bold; margin-top: 0; line-height: 1.2; margin-bottom: 5px; font-size: 18px; color: #000;">Sachin Chaurasiya.</h4>
                            <span style="display: block; text-align: center; font-size: 14px; font-weight: lighter; color: #000;">Tour Consultant</span>
                        </div>
                    </div>
                </div>
                --->
                <!-- Sanket Ghadi -->
                <!-- Tour Consultant -->
                <!-- https://i.vimeocdn.com/video/619039994_640x425.jpg -->
                 <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="member">
                        <!-- <div class="member-img"> -->
                            <!-- <img src="https://www.hdwallpapersfreedownload.com/uploads/large/special-days/world--day-27-september-hd-wallpaper.jpg" -->
                                <!-- class="img-fluid" alt=""> -->
                            <div class="social">
                                <a href=""><i class="fab fa-facebook" aria-hidden="true"></i></a>
                                <a href=""><i class="fab fa-twitter" aria-hidden="true"></i></a>
                                <a href=""><i class="fab fa-instagram" aria-hidden="true"></i></a>
                                <a href=""><i class="fab fa-linkedin" aria-hidden="true"></i></a>
                            </div>



                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <!-- <section id="quote" class="bg-parlex">
        <div class="parlex-back">
            <div class="container secPad text-center">
                <h2>"The World is a book, and those who do not travel read only a page."
                </h2>
                <h3>-Saint Augustine</h3>
            </div>
            /.container
        </div>
    </section> -->
    <!--Portfolio-->

    <section id="portfolio" class="page-section section appear clearfix secPad">
        <div class="container">
            <div class="heading text-center">
                <!-- Heading -->
                <h2>Gallery</h2>
                <p>At lorem Ipsum available, but the majority have suffered alteration in some form by injected humour.
                </p>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="portfolio-items clearfix papper " id="3">
                            <article class="col-sm-4  isotopeItem webdesign">
                                <div class="portfolio-item">
                                    <img src="images/portfolio/img1.jpg" alt="" style="height: 277px;">
                                    <div class="portfolio-desc align-center">
                                        <div class="folio-Get It!">
                                            <a href="images/portfolio/img1.jpg" class="fancybox">
                                                <i class="fa fa-arrows-alt fa-2x"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>

                            <article class="col-sm-4 isotopeItem photography">
                                <div class="portfolio-item">
                                    <img src="images/gallery/gallery1.jpg" alt="" style="height: 277px;">
                                    <div class="portfolio-desc align-center">
                                    </div>
                                </div>
                            </article>


                            <article class="col-sm-4 isotopeItem photography">
                                <div class="portfolio-item">
                                    <img src="images/gallery/gallery2.jpg" alt=""  style="height: 277px;">
                                    <div class="portfolio-desc align-center">
                                    </div>
                                </div>
                            </article>

                            <article class="col-sm-4 isotopeItem print">
                                <div class="portfolio-item">
                                    <img src="images/gallery/gallery3.jpg" alt=""  style="height: 277px; padding-top: 16px;">
                                    <div class="portfolio-desc align-center">
                                    </div>
                                </div>
                            </article>

                            <article class="col-sm-4 isotopeItem photography">
                                <div class="portfolio-item">
                                    <img src="images/gallery/gallery4.jpg" alt=""  style="height: 277px; padding-top: 16px;">
                                    <div class="portfolio-desc align-center">
                                    </div>
                                </div>
                            </article>

                            <article class="col-sm-4 isotopeItem print">
                                <div class="portfolio-item">
                                    <img src="images/gallery/gallery6.jpg" alt=""  style="height: 276px; padding-top: 16px;">
                                    <div class="portfolio-desc align-center">
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Contact -->
    <!-- <section id="contactUs" class="page-section secPad">
        <div class="container">
            <div class="row">
                <div class="heading text-center"> -->
    <!-- Heading -->
    <!-- <h2>Let's Keep In Touch!</h2>
                    <p>Thank you for visiting out my profile. If you would like to get into contact with me, please fill
                        out the form below.</p>
                </div>
            </div>
            <div class="row mrgn30">
                <div class="col-sm-12 col-md-8"> -->
    <!--NOTE: Update your email Id in "contact_me.php" file in order to receive emails from your contact form-->
    <!-- <form name="sentMessage" id="contactForm" validate>
                        <h3>Contact Form</h3>
                        <div class="control-group">
                            <div class="controls">
                                <input type="text" class="form-control" placeholder="Full Name" id="name" required
                                    data-validation-required-message="Please enter your name" />
                                <p class="help-block"></p>
                            </div>
                        </div>
                        <div class="control-group" style="margin-bottom: 8px;">
                            <div class="controls">
                                <input type="email" class="form-control" placeholder="Email" id="email" required
                                    data-validation-required-message="Please enter your email" />
                            </div>
                        </div>

                        <div class="control-group" style="margin-bottom: 8px;">
                            <div class="controls">
                                <textarea rows="10" cols="100" class="form-control" placeholder="Message" id="message"
                                    required data-validation-required-message="Please enter your message" minlength="5"
                                    data-validation-minlength-message="Min 5 characters" maxlength="999"
                                    style="resize:none"></textarea>
                            </div>
                        </div>
                        <div id="success"> </div> For success/fail messages
                        <button type="submit" class="btn btn-primary pull-right">Send</button><br />
                    </form>
                </div> -->

    <!-- signup -->
    <?php include('includes/signup.php');?>
    <!-- //signu -->
    <!-- signin -->
    <?php include('includes/signin.php');?>
    <!-- //signin -->
    <!-- <div class="col-sm-12 col-md-4">
                    <h4>Address:</h4>
                    <address>
                        Code4berry Company<br>
                        12th, street<br>
                        Luthuli Avenue, California
                        <br>
                    </address>
                    <h4>Phone:</h4>
                    <address>
                        17745-41189-2<br>
                    </address>
                </div>
            </div>
        </div> -->
    <!--/.container-->
    <!-- </section> -->
    <section class="contact mt-3" id="contactUs" style="background-color: white;">
        <div class="container">
            <div class="section-title">
                <h2 class="text-center" style="color:black;">
                    Contact Us
                </h2>
                <p class="text-center" style="margin-top: 20px;">

                </p>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="icon-box">
                                <i class="fa fa-share" aria-hidden="true"></i>
                                <h3>Social Profiles</h3>
                                <div class="">
                                    <a href="https://twitter.com" class="twitter" style="padding-right: 10px;">
                                        <i class="fa fa-twitter" aria-hidden="true" style="font-size:24px"></i>
                                    </a>
                                    <a href="#" class="facebook" style="padding-right: 10px;">
                                        <i class="fa fa-facebook" aria-hidden="true" style="font-size:24px;"></i>
                                    </a>
                                    <a href="#" class="instagram" style="padding-right: 10px;">
                                        <i class="fa fa-instagram" aria-hidden="true" style="font-size:24px;"></i>
                                    </a>
                                    <a href="#" class="linkedin" style="padding-right: 10px;">
                                        <i class="fa fa-linkedin" aria-hidden="true" style="font-size:24px;"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="icon-box" style="margin-top: 26px;">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                <h3>Email Us</h3>
                                <p>info@example.com</p>
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="icon-box" style="margin-top: 26px;">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <h3>24/7 support</h3>
                                <p>+91 8530850909</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <form name="sentMessage" id="contactForm"  validate>
                        <div class="form-row">
                            <div class="col-md-6 form-group">
                            <input type="text" class="form-control" 
                            placeholder="Full Name" id="name" required
                            data-validation-required-message="Please enter your name" />
                            </div>
                            <div class="col-md-6 form-group">
                            <input type="email" class="form-control" placeholder="Email" 
                             id="email" required data-validation-required-message="Please enter your email" />
                            </div>
                        </div>
            <div class="control-group" style="margin-bottom: 8px;">
            <div class="controls">
              <textarea rows="8" cols="10" class="form-control" 
              placeholder="Message" id="message" required
              data-validation-required-message="Please enter your message" minlength="5" 
              data-validation-minlength-message="Min 5 characters" 
              maxlength="999" style="resize:none"></textarea>
            </div>
          </div> 		 
                        <div id="success"> </div> <!-- For success/fail messages -->
          <button type="submit" class="btn btn-primary btn-about pull-right">Send</button><br />

                    </form>
                </div>
            </div>
        </div>





    </section>
    <br><br>
   <footer id="footer">
   <div class="footer-newsletter">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <h4>Join Our News Letter</h4>
                    <!-- <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p> -->
                    <form>
                        <input type="email" name="email">
                        <input type="submit" value="Subscribe">
                    </form>
                </div>
            </div>
        </div>
    </div>
  <div class="container py-4" class="copyright text-center my-auto">
      <div class="copyright" style="color: white; background-color: #0292f1; font-size: 16px;">
      <span>Copyright &copy; <script> document.write(new Date().getFullYear()); </script> 
      <b> - All rights reserved</a></b>
          <br>
          <div class="credits">
          Designed by - <a href="#">Prashant Yadav &amp; Ankit Patel</a>
      </div>
      </div>
  </div>
</footer>
    <a href="#top" class="topHome"><i class="fa fa-chevron-up fa-2x"></i></a>
    <script src="js/modernizr-latest.js"></script>
    <script src="js/jquery-1.8.2.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/jquery.isotope.min.js" type="text/javascript"></script>
    <script src="js/fancybox/jquery.fancybox.pack.js" type="text/javascript"></script>
    <script src="js/jquery.nav.js" type="text/javascript"></script>
    <script src="js/jquery.cslider.js" type="text/javascript"></script>
    <script src="contact/contact_me.js"></script>
    <script src="js/custom.js" type="text/javascript"></script>
    <script src="js/owl-carousel/owl.carousel.js"></script>
</body>

</html>
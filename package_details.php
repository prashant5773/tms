<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(isset($_POST['submit2']))
{
	$pid=intval($_GET['pkgid']);
	$useremail=$_SESSION['login'];
	$fromdate=$_POST['fromdate'];
	$todate=$_POST['todate'];
	$comment=$_POST['comment'];
	$status=0;
	$sql="INSERT INTO tblbooking(PackageId,UserEmail,FromDate,ToDate,Comment,status) VALUES(:pid,:useremail,:fromdate,:todate,:comment,:status)";
	$query = $dbh->prepare($sql);
	$query->bindParam(':pid',$pid,PDO::PARAM_STR);
	$query->bindParam(':useremail',$useremail,PDO::PARAM_STR);
	$query->bindParam(':fromdate',$fromdate,PDO::PARAM_STR);
	$query->bindParam(':todate',$todate,PDO::PARAM_STR);
	$query->bindParam(':comment',$comment,PDO::PARAM_STR);
	$query->bindParam(':status',$status,PDO::PARAM_STR);
	$query->execute();
	$lastInsertId = $dbh->lastInsertId();
	if($lastInsertId)
	{
		echo '<script>alert("Booked Scuccessfully . Thank you")</script>';
	}
	else 
	{
		echo '<script>alert("Something Went Wrong. Please try again")</script>';
	}

}
?>
<!doctype html>
<html lang="en-gb" class="no-js">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<title>My Travel - Package details</title>
	<meta name="description" content="Traveller">
	<meta name="author" content="WebThemez">

	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<!-- <link href="assets/css/bootstrap.css" rel='stylesheet' type='text/css' /> -->
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
	<style>
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
	<header class="header">
		<?php if($_SESSION['login'])
		{?>
			<div class="top-header">
				<div class="container">
					<ul class="tp-hd-lft wow fadeInLeft animated" data-wow-delay=".5s">
						<li class="hm"><a href="index.php"><i class="fa fa-home"></i></a></li>
						<li class="prnt"><a href="profile.php">My Profile</a></li>
						<li class="prnt"><a href="change_password.php">Change Password</a></li>
						<li class="prnt"><a href="tour_history.php">My Tour History</a></li>
					</ul>
					<ul class="tp-hd-rgt wow fadeInRight animated" data-wow-delay=".5s"> 
						<li class="tol">Welcome :</li>        
						<li class="sig"><?php echo htmlentities($_SESSION['login']);?></li> 
						<li class="sigi"><a href="logout.php" >/ Logout</a></li>
					</ul>
					<div class="clearfix"></div>
				</div>
			</div>
			<?php 
		} else 
		{
			?>
			<div class="top-header">
				<div class="container">
					<ul class="tp-hd-lft wow fadeInLeft animated" data-wow-delay=".5s">
						<li class="hm"><a href="admin/index.php">Admin Login</a></li>
					</ul>
					<ul class="tp-hd-rgt wow fadeInRight animated" data-wow-delay=".5s"> 
						<!-- <li class="tol">Toll Number : 123-4568790</li>         -->
						<li class="sig"><a href="#" data-toggle="modal" data-target="#myModal" >Sign Up</a></li> 
						<li class="sigi"><a href="#" data-toggle="modal" data-target="#myModal4" >&nbsp; Sign In</a></li>
					</ul>
					<div class="clearfix"></div>
				</div>
			</div>
			<?php 
		}?>
		<div class="container">
			<nav class="navbar navbar-inverse" role="navigation">
				<div class="navbar-header adeInDown animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">
					<a href="#" class="navbar-brand scroll-top logo"><b style="color:black;">Traveller</b></a>
					<button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<!--/.navbar-header-->
				<div id="main-nav" class="collapse navbar-collapse adeInDown animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">
					<ul class="nav navbar-nav" id="mainNav">
						<li ><a href="index.php" class="scroll-link" style="color:black;">Home</a></li>
						<li><a href="index.php" class="scroll-link" style="color:black;">About Us</a></li>
						<li><a href="index.php" class="scroll-link" style="color:black;">Packages</a></li>
						<li><a href="index.php" class="scroll-link" style="color:black;">Gallery</a></li>
						<li><a href="index.php" class="scroll-link" style="color:black;">Contact Us</a></li>
					</ul>
				</div>
				<!--/.navbar-collapse-->
			</nav>
			<!--/.navbar-->
		</div>
		<!--/.container-->
	</header>
	<!--/.header-->
	<div id="#top"></div>
	<section id="home">
		<div class="banner-container" style="height: 300px;">
			<!-- <img src="images/banner-bg.jpg" alt="banner" /> -->
			<div class="container banner-content">
				<div id="da-slider" class="da-slider">
					<div class="da-slide">
						<h2>Tour Packages</h2>
						<p>Get your plans right away.. enjoy!!!</p>
						<div class="da-img"></div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!--Package-->
	<section id="packages" class="secPad">
		<div class="container">
			<div class="heading text-center">
				<!-- Heading -->
				<h2>Package Details</h2>
				<!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p> -->
			</div>
			<!--- selectroom ---->
			<div class="selectroom">
				<div class="container"> 
					<?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
					else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>
					<?php 
					$pid=intval($_GET['pkgid']);
					$sql = "SELECT * from tbltourpackages where PackageId=:pid";
					$query = $dbh->prepare($sql);
					$query -> bindParam(':pid', $pid, PDO::PARAM_STR);
					$query->execute();
					$results=$query->fetchAll(PDO::FETCH_OBJ);
					$cnt=1;
					if($query->rowCount() > 0)
					{
						foreach($results as $result)
						{ 
							?>

							<div class="selectroom_top">
								<div class="col-md-4 selectroom_left wow fadeInLeft animated" data-wow-delay=".5s">
									<img src="admin/pacakgeimages/<?php echo htmlentities($result->PackageImage);?>" class="img-responsive" alt="">
								</div>
								<div class="col-md-8 selectroom_right wow fadeInRight animated" data-wow-delay=".5s">
									<h2><?php echo htmlentities($result->PackageName);?></h2>
									<p class="dow">#PKG-<?php echo htmlentities($result->PackageId);?></p>
									<p><b>Package Type :</b> <?php echo htmlentities($result->PackageType);?></p>
									<p><b>Package Location :</b> <?php echo htmlentities($result->PackageLocation);?></p>
									<p><b>Features</b> <?php echo htmlentities($result->PackageFetures);?></p>

									<div class="clearfix"></div>
									<div class="grand">
										<p>Grand Total</p>
										<h3><i class="fa fa-inr" aria-hidden="true"></i>800</h3>
									</div>
								</div>
								<h3>Package Details</h3>
								<p style="padding-top: 1%"><?php echo htmlentities($result->PackageDetails);?> </p> 
								<div class="clearfix"></div>
							</div>
							<form name="book" method="post">
								<div class="selectroom_top">
									<div class="selectroom-info animated wow fadeInUp animated" data-wow-duration="1200ms" data-wow-delay="500ms" style="visibility: visible; animation-duration: 1200ms; animation-delay: 500ms; animation-name: fadeInUp; margin-top: -70px">
										<div class="ban-bottom">
											<div class=" col-md-6 mr-2 ">
												<label class="inputLabel">From</label>
												<input class="form-control" id="datepicker" type="date" placeholder="dd-mm-yyyy"  name="fromdate" required="">
											</div>
											<div class=" col-md-6">
												<label class="inputLabel">To</label>
												<input class="form-control" id="datepicker1" type="date" placeholder="dd-mm-yyyy" name="todate" required="">
											</div>
										</div>
										<ul>

											<li class="spe">
												<label class="inputLabel">Comment</label>
												<textarea  class="form-control" rows="4" cols="4" type="text" name="comment" required=""></textarea>
											</li>
											<?php if($_SESSION['login'])
											{?>
												<li class="spe" align="center">
													<button type="submit" name="submit2" class="btn-primary btn">Book</button>
												</li>
												<?php 
											} else {?>
												<li class="sigi" align="center" style="margin-top: 1%">
													<a href="#" data-toggle="modal" data-target="#myModal4"  class="btn-primary btn" > Book</a>
												</li>
												<?php
											} ?>
											<div class="clearfix"></div>
										</ul>
									</div>
								</div>
							</form>
							<?php 
						}
					} ?>
				</div>
			</div>
			<!--- /selectroom ---->
		</div>
	</section>
	<a href="#top" class="topHome"><i class="fa fa-chevron-up fa-2x"></i></a>
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
  <div class="container py-4">
      <div class="copyright" style="color: white; background-color: #0292f1; font-size: 16px;">
          ©Copyright<strong><span></span></strong>
          .All Rights Reserved
      </div>
      <div class="credits">
          Designed by<a href="#">Prashant Yadav &amp; Ankit Patel</a>
      </div>
  </div>
</footer>
	<!-- signup -->
	<?php include('includes/signup.php');?>     
	<!-- //signu -->
	<!-- signin -->
	<?php include('includes/signin.php');?>     
	<!-- //signin -->
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

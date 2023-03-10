<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?php
use Bitrix\Main\Page\Asset;
?>
<!doctype html>
<html class="no-js" lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <?php $APPLICATION->ShowHead();?>
    <title><?php $APPLICATION->ShowTitle();?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->
        <?php
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/css/bootstrap.min.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/css/owl.carousel.min.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/css/magnific-popup.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/css/font-awesome.min.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/css/themify-icons.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/css/nice-select.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/css/flaticon.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/css/gijgo.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/css/animate.min.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/css/slicknav.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/css/style.css');
        ?>

</head>

<body>
<div id="panel"><?php
    $APPLICATION->ShowPanel();
    ?></div>

    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
<!-- header-start -->

<header>

        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid ">
                    <div class="header_bottom_border">
                        <div class="row align-items-center">
                            <div class="col-xl-3 col-lg-2">
                                <div class="logo">
                                    <a href="index.html">
                                        <img src="img/logo.png" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-7">
                                <div class="main-menu  d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a href="index.html">home</a></li>
                                            <li><a href="jobs.html">Browse Job</a></li>
                                            <li><a href="#">pages <i class="ti-angle-down"></i></a>
                                                <ul class="submenu">
                                                    <li><a href="candidate.html">Candidates </a></li>
                                                    <li><a href="job_details.html">job details </a></li>
                                                    <li><a href="elements.html">elements</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">blog <i class="ti-angle-down"></i></a>
                                                <ul class="submenu">
                                                    <li><a href="blog.html">blog</a></li>
                                                    <li><a href="single-blog.html">single-blog</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="contact.html">Contact</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                                <div class="Appointment">
                                    <div class="phone_num d-none d-xl-block">
                                        <a href="#">Log in</a>
                                    </div>
                                    <div class="d-none d-lg-block">
                                        <a class="boxed-btn3" href="#">Post a Job</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->
<!DOCTYPE html>
<html class="no-js" lang="fr">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author" content="RICHKOFF" />
    <!-- Favicon Icon -->
    <link rel="icon" href="{{ asset('assets/images_/commun/favicon.png') }}" />
    <!-- Site Title -->
    <title>RICHKOFF | Parfums - Accueil</title>
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/fontawesome.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/slick.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/lightgallery.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/swiper.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    <meta name="google-site-verification" content="t_iGshqh_1VqMygidDloGKvAwP9cFyL1VFsXQB8BGjY" />
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-WZE9XVL170"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-WZE9XVL170');
    </script>
</head>

<body>
    <div class="cs-preloader cs-center">
        <div class="cs-preloader_in"></div>
    </div>
    <!-- Start Header Section -->
    <!-- Start Header Section -->
    <header class="cs-site_header cs-style1 text-uppercase cs-sticky_header cs-site_header_full_width" {!! $style !!}>
        <div class="cs-main_header">
            <div class="container">
                <div class="cs-main_header_in">
                    <div class="cs-main_header_left">
                        <a class="cs-site_branding" href="{{route('welcome')}}">
                            <img src="{{ asset('assets/images_/commun/logo.png') }}" alt="Logo Richkoff" />
                        </a>
                    </div>
                    <div class="cs-main_header_center">
                        <div class="cs-nav cs-primary_font cs-medium">
                            <ul class="cs-nav_list">
                                <li><a href="{{route('parfum-index')}}">ACCUEIL</a></li>
                                <li><a href="{{route('actualite.index')}}">ACTUALITÉS</a></li>
                                <li><a href="{{route('contact')}}">CONTACT</a></li>
                                <!-- <li><a href="shop/">BOUTIQUE</a></li> -->
                            </ul>
                        </div>
                    </div>
                    <div class="cs-main_header_right">
                        <div class="cs-toolbox">
                            <span class="cs-icon_link">
                                <span class="cs-icon_btn_in">
                                    <a href="#">Coffret découverte</a>
                                </span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <x-coffret-demande></x-coffret-demande>
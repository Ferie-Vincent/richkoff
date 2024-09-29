<!DOCTYPE html>
<html class="no-js" lang="fr">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="RICHKOFF">
    <!-- Favicon Icon -->
    <link rel="icon" href="{{ asset('assets/images_/commun/favicon.png') }}">
    <!-- Site Title -->
    <title>RICHKOFF | Diffuseurs - Accueil</title>
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/lightgallery.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/hi.css') }}" />
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
    <header class="cs-site_header cs-style1 text-uppercase cs-sticky_header cs-site_header_full_width" style="
    background-color: rgba(0, 0, 0, 0.476);
    backdrop-filter: blur(10px);
    padding: 20px;
  ">
        <div class="cs-main_header">
            <div class="container">
                <div class="cs-main_header_in">
                    <div class="cs-main_header_left">
                        <a class="cs-site_branding" href="{{route('welcome')}}">
                            <img src="{{ asset('assets/images_/commun/logo.png') }}" alt="Logo RICHKOFF">
                        </a>
                    </div>
                    <div class="cs-main_header_center">
                        <div class="cs-nav cs-primary_font cs-medium">
                            <ul class="cs-nav_list">
                                <li>
                                    <a href="{{route('diffuseur-index')}}">ACCUEIL</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a>MARKETING OLFATIF</a>
                                    <ul>
                                        <li>
                                            <a href="{{route('maison')}}">Maison</a>
                                        </li>
                                        <li>
                                            <a href="{{route('commerce')}}">Commerce</a>
                                        </li>
                                    </ul>
                                    <span class="cs-munu_dropdown_toggle"></span>
                                </li>
                                <li>
                                    <a href="{{route('faq')}}">FAQ</a>
                                </li>
                                <li>
                                    <a href="../blog/">ACTUALITÉS</a>
                                </li>
                                <li>
                                    <a href="{{route('contact')}}">CONTACT</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header>
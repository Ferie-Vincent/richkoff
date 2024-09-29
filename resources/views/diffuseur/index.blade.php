@extends('diffuseur.layout')

@section('content')


<div class="cs-hero cs-style1 cs-type2" id="home">
    <div class="cs-hero_bg cs-bg cs-ripple_version cs-center img-responsive" data-src="{{ asset('assets/images_/diffuseurs/accueil/ban.png') }}">
    </div>
  </div>
  
  <div class="container mt-5 pt-5">
    <div class="cs-section_heading cs-style1 text-center">
      <h2 class=" wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">CRÉATEUR PARFUMEUR</h2> <br>
      <h3 class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s" style="margin-top: -3% !important;">EXPERT EN MARKETING OLFACTIF</h3>
      <p>
        La beauté commence par le bien être. Nourissez l'un, sublimez l'autre.
      </p>
  
      <div class="slider-for_item" style="margin-top: -4%;">
        <div class="cs-testimonial cs-style1">
  
        </div>
      </div>
    </div>
  </div>
  
  <!-- Start Project Section -->
  <div class="cs-portfolio cs-style2">
    <div class="cs-gradient_shape"></div>
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <div class="cs-portfolio_img">
            <h3 class="cs-portfolio_img_title">La Box</h3>
            <div class="cs-portfolio_img_in cs-shine_hover_1 cs-radius_5 ">
              <img src="{{ asset('assets/images_/diffuseurs/accueil/senteurs/1.png') }}" alt="QRBox" class="cs-w100 img-fluid">
            </div>
          </div>
        </div>
        <div class="col-xl-5 col-lg-6 offset-xl-1">
          <div class="cs-height_0 cs-height_lg_35"></div>
          <div class="cs-section_heading cs-style1">
            <h2 class="cs-section_subtitle colorText">RICHKOFF QR BOX</h2>
            <h2 class="cs-section_title">La perfection en toute simplicité.</h2>
            <div class="cs-height_45 cs-height_lg_20"></div>
            <a href="{{route('qrbox')}}" class="cs-text_btn wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.2s">
              <span class="colorText">Découvrez-la</span>
              <svg width="26" height="12" viewBox="0 0 26 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M25.5303 6.53033C25.8232 6.23744 25.8232 5.76256 25.5303 5.46967L20.7574 0.696699C20.4645 0.403806 19.9896 0.403806 19.6967 0.696699C19.4038 0.989593 19.4038 1.46447 19.6967 1.75736L23.9393 6L19.6967 10.2426C19.4038 10.5355 19.4038 11.0104 19.6967 11.3033C19.9896 11.5962 20.4645 11.5962 20.7574 11.3033L25.5303 6.53033ZM0 6.75H25V5.25H0V6.75Z" fill="currentColor"></path>
              </svg>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <div class="cs-height_100 cs-height_lg_70"></div>
  
  <div class="cs-portfolio cs-style2 cs-type1">
    <div class="cs-gradient_shape"></div>
    <div class="container">
      <div class="row align-items-center cs-column_reverse_lg">
        <div class="col-xl-5 col-lg-6">
          <div class="cs-height_0 cs-height_lg_35"></div>
          <div class="cs-section_heading cs-style1 ">
            <h3 class="cs-section_subtitle colorText">RICHKOFF SLIM</h3>
            <h2 class="cs-section_title">La tour, combinant la magie du parfum et la technologie de pointe.</h2>
  
            <div class="cs-height_45 cs-height_lg_20"></div>
            <a href="{{route('slim')}}" class="cs-text_btn wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.2s">
              <span class="colorText">Découvrez la</span>
              <svg width="26" height="12" viewBox="0 0 26 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M25.5303 6.53033C25.8232 6.23744 25.8232 5.76256 25.5303 5.46967L20.7574 0.696699C20.4645 0.403806 19.9896 0.403806 19.6967 0.696699C19.4038 0.989593 19.4038 1.46447 19.6967 1.75736L23.9393 6L19.6967 10.2426C19.4038 10.5355 19.4038 11.0104 19.6967 11.3033C19.9896 11.5962 20.4645 11.5962 20.7574 11.3033L25.5303 6.53033ZM0 6.75H25V5.25H0V6.75Z" fill="currentColor"></path>
              </svg>
            </a>
          </div>
        </div>
        <div class="col-lg-6 offset-xl-1">
          <div class="cs-portfolio_img">
            <h3 class="cs-portfolio_img_title">La Slim</h3>
            <div class="cs-portfolio_img_in cs-shine_hover_1 cs-radius_5">
              <img src="{{ asset('assets/images_/diffuseurs/accueil/senteurs/2.png') }}" alt="La Slim" class="cs-w100">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <div class="cs-height_100 cs-height_lg_70"></div>
  
  <div class="cs-portfolio cs-style2">
    <div class="cs-gradient_shape"></div>
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <div class="cs-portfolio_img">
            <h3 class="cs-portfolio_img_title">La Pro</h3>
            <div class="cs-portfolio_img_in cs-shine_hover_1 cs-radius_5">
              <img src="{{ asset('assets/images_/diffuseurs/accueil/senteurs/3.png') }}" alt="La Pro" class="cs-w100">
            </div>
          </div>
        </div>
        <div class="col-xl-5 col-lg-6 offset-xl-1">
          <div class="cs-height_0 cs-height_lg_35"></div>
          <div class="cs-section_heading cs-style1 ">
            <h3 class="cs-section_subtitle colorText">RICHKOFF PRO</h3>
            <h2 class="cs-section_title"> la solution pour vos grands espaces et vos prestigieux évènements</h2>
            <div class="cs-height_45 cs-height_lg_20"></div>
            <a href="{{route('pro')}}" class="cs-text_btn wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.2s">
              <span class="colorText">Découvrez la</span>
              <svg width="26" height="12" viewBox="0 0 26 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M25.5303 6.53033C25.8232 6.23744 25.8232 5.76256 25.5303 5.46967L20.7574 0.696699C20.4645 0.403806 19.9896 0.403806 19.6967 0.696699C19.4038 0.989593 19.4038 1.46447 19.6967 1.75736L23.9393 6L19.6967 10.2426C19.4038 10.5355 19.4038 11.0104 19.6967 11.3033C19.9896 11.5962 20.4645 11.5962 20.7574 11.3033L25.5303 6.53033ZM0 6.75H25V5.25H0V6.75Z" fill="currentColor"></path>
              </svg>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <div class="cs-height_100 cs-height_lg_70"></div>
  
  <div class="cs-portfolio cs-style2 cs-type1">
    <div class="cs-gradient_shape"></div>
    <div class="container">
      <div class="row align-items-center cs-column_reverse_lg">
        <div class="col-xl-5 col-lg-6">
          <div class="cs-height_0 cs-height_lg_35"></div>
          <div class="cs-section_heading cs-style1 ">
            <h3 class="cs-section_subtitle colorText">ART PARFUMÉ BOX</h3>
            <h2 class="cs-section_title">Des œuvres d’art plus qu’un diffuseur de parfum</h2>
            <div class="cs-height_45 cs-height_lg_20"></div>
            <a href="{{route('qrart')}}" class="cs-text_btn wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.2s">
              <span class="colorText">Découvrez la</span>
              <svg width="26" height="12" viewBox="0 0 26 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M25.5303 6.53033C25.8232 6.23744 25.8232 5.76256 25.5303 5.46967L20.7574 0.696699C20.4645 0.403806 19.9896 0.403806 19.6967 0.696699C19.4038 0.989593 19.4038 1.46447 19.6967 1.75736L23.9393 6L19.6967 10.2426C19.4038 10.5355 19.4038 11.0104 19.6967 11.3033C19.9896 11.5962 20.4645 11.5962 20.7574 11.3033L25.5303 6.53033ZM0 6.75H25V5.25H0V6.75Z" fill="currentColor"></path>
              </svg>
            </a>
          </div>
        </div>
        <div class="col-lg-6 offset-xl-1">
          <div class="cs-portfolio_img">
            <h3 class="cs-portfolio_img_title">BOX ART</h3>
            <div class="cs-portfolio_img_in cs-shine_hover_1 cs-radius_5">
              <img src="{{ asset('assets/images_/diffuseurs/accueil/senteurs/4.png') }}" alt="Boxart" class="cs-w100">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <div class="cs-height_100 cs-height_lg_70"></div>
  
  <div class="cs-portfolio cs-style2">
    <div class="cs-gradient_shape"></div>
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <div class="cs-portfolio_img">
            <h3 class="cs-portfolio_img_title">SPRAY</h3>
            <div class="cs-portfolio_img_in cs-shine_hover_1 cs-radius_5">
              <img src="{{ asset('assets/images_/diffuseurs/accueil/senteurs/5.png') }}" alt="Splary" class="cs-w100">
            </div>
          </div>
        </div>
        <div class="col-xl-5 col-lg-6 offset-xl-1">
          <div class="cs-height_0 cs-height_lg_35"></div>
          <div class="cs-section_heading cs-style1 ">
            <h3 class="cs-section_subtitle colorText">BRÛME PARFUMÉE</h3>
            <h2 class="cs-section_title">La puissance qui désodorise vos petites pièces</h2>
            <div class="cs-height_45 cs-height_lg_20"></div>
            <a href="{{route('spray')}}" class="cs-text_btn wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.2s">
              <span class="colorText">Découvrez la</span>
              <svg width="26" height="12" viewBox="0 0 26 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M25.5303 6.53033C25.8232 6.23744 25.8232 5.76256 25.5303 5.46967L20.7574 0.696699C20.4645 0.403806 19.9896 0.403806 19.6967 0.696699C19.4038 0.989593 19.4038 1.46447 19.6967 1.75736L23.9393 6L19.6967 10.2426C19.4038 10.5355 19.4038 11.0104 19.6967 11.3033C19.9896 11.5962 20.4645 11.5962 20.7574 11.3033L25.5303 6.53033ZM0 6.75H25V5.25H0V6.75Z" fill="currentColor"></path>
              </svg>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <div class="cs-height_100 cs-height_lg_70"></div>
  
  <div class="cs-portfolio cs-style2 cs-type1">
    <div class="cs-gradient_shape"></div>
    <div class="container">
      <div class="row align-items-center cs-column_reverse_lg">
  
        <div class="col-xl-5 col-lg-5">
          <div class="cs-portfolio_img">
            <a href="{{route('maison')}}">
              <div class="cs-portfolio_img_in cs-shine_hover_1 cs-radius_5">
                <img src="{{ asset('assets/images_/diffuseurs/accueil/home.png') }}" alt="Richkoff Home" class="cs-w100">
              </div>
            </a>
          </div>
        </div>
        <div class="col-xl-1 col-lg-1"></div>
        <div class="col-xl-5 col-lg-5">
          <div class="cs-portfolio_img">
            <a href="{{route('commerce')}}">
              <div class="cs-portfolio_img_in cs-shine_hover_1 cs-radius_5">
                <img src="{{ asset('assets/images_/diffuseurs/accueil/commerce.png') }}" alt="Richkoff Commerce" class="cs-w100">
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <div class="cs-height_145 cs-height_lg_80"></div>
  
  <section>
    <div class="container">
      <div class="cs-section_heading cs-style1 text-center">
        <h3 class="cs-section_subtitle colorText">Fragrance d'ambiance</h3>
        <h2 class="cs-section_title wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">
          Nos créations exclusives pour vos diffuseurs de parfum
        </h2>
      </div>
    </div>
    <div class="cs-height_90 cs-height_lg_45"></div>
    <div class="cs-slider cs-style3 cs-gap-24">
      <div class="cs-slider_container" data-autoplay="0" data-loop="1" data-speed="600" data-center="1" data-slides-per-view="1">
        <div class="cs-slider_wrapper">
  
  
          <div class="cs-slide">
            <a class="cs-portfolio cs-style1 cs-bg">
              <div class="cs-portfolio_hover"></div>
              <div class="cs-portfolio_bg" data-src="{{ asset('assets/images_/diffuseurs/accueil/fragrances/1.png') }}"></div>
              <div class="cs-portfolio_info">
                <div class="cs-portfolio_info_bg"></div>
                <h3 class="">AQUA TONIC</h3>
              </div>
            </a>
          </div>
  
          <div class="cs-slide">
            <a class="cs-portfolio cs-style1 cs-bg">
              <div class="cs-portfolio_hover"></div>
              <div class="cs-portfolio_bg" data-src="{{ asset('assets/images_/diffuseurs/accueil/fragrances/2.png') }}"></div>
              <div class="cs-portfolio_info">
                <div class="cs-portfolio_info_bg"></div>
                <h3 class="">CŒUR DE PATCHOULI</h3>
              </div>
            </a>
          </div>
  
          <div class="cs-slide">
            <a class="cs-portfolio cs-style1 cs-bg">
              <div class="cs-portfolio_hover"></div>
              <div class="cs-portfolio_bg" data-src="{{ asset('assets/images_/diffuseurs/accueil/fragrances/3.png') }}"></div>
              <div class="cs-portfolio_info">
                <div class="cs-portfolio_info_bg"></div>
                <h3 class="">CUIR IMPÉRIAL</h3>
              </div>
            </a>
          </div>
  
          <div class="cs-slide">
            <a class="cs-portfolio cs-style1 cs-bg">
              <div class="cs-portfolio_hover"></div>
              <div class="cs-portfolio_bg" data-src="{{ asset('assets/images_/diffuseurs/accueil/fragrances/4.png') }}"></div>
              <div class="cs-portfolio_info">
                <div class="cs-portfolio_info_bg"></div>
                <h3 class="">GINGER LIME</h3>
              </div>
            </a>
          </div>
  
          <div class="cs-slide">
            <a class="cs-portfolio cs-style1 cs-bg">
              <div class="cs-portfolio_hover"></div>
              <div class="cs-portfolio_bg" data-src="{{ asset('assets/images_/diffuseurs/accueil/fragrances/5.png') }}"></div>
              <div class="cs-portfolio_info">
                <div class="cs-portfolio_info_bg"></div>
                <h3 class="">PAUSE PARFUM</h3>
              </div>
            </a>
          </div>
  
          <div class="cs-slide">
            <a class="cs-portfolio cs-style1 cs-bg">
              <div class="cs-portfolio_hover"></div>
              <div class="cs-portfolio_bg" data-src="{{ asset('assets/images_/diffuseurs/accueil/fragrances/6.png') }}"></div>
              <div class="cs-portfolio_info">
                <div class="cs-portfolio_info_bg"></div>
                <h3 class="">MUSC BLANC</h3>
              </div>
            </a>
          </div>
  
          <div class="cs-slide">
            <a class="cs-portfolio cs-style1 cs-bg">
              <div class="cs-portfolio_hover"></div>
              <div class="cs-portfolio_bg" data-src="{{ asset('assets/images_/diffuseurs/accueil/fragrances/7.png') }}"></div>
              <div class="cs-portfolio_info">
                <div class="cs-portfolio_info_bg"></div>
                <h3 class="">NEROLI VIBE</h3>
              </div>
            </a>
          </div>
  
          <div class="cs-slide">
            <a class="cs-portfolio cs-style1 cs-bg">
              <div class="cs-portfolio_hover"></div>
              <div class="cs-portfolio_bg" data-src="{{ asset('assets/images_/diffuseurs/accueil/fragrances/8.png') }}"></div>
              <div class="cs-portfolio_info">
                <div class="cs-portfolio_info_bg"></div>
                <h3 class="">SANTAL VIP</h3>
              </div>
            </a>
          </div>
  
          <div class="cs-slide">
            <a class="cs-portfolio cs-style1 cs-bg">
              <div class="cs-portfolio_hover"></div>
              <div class="cs-portfolio_bg" data-src="{{ asset('assets/images_/diffuseurs/accueil/fragrances/9.png') }}"></div>
              <div class="cs-portfolio_info">
                <div class="cs-portfolio_info_bg"></div>
                <h3 class="">VELOURS D'ORIENT</h3>
              </div>
            </a>
          </div>
  
  
        </div>
      </div>
      <!-- .cs-slider_container -->
      <div class="cs-pagination cs-style1"></div>
    </div>
    <!-- .cs-slider -->
  </section>
  
  <div class="cs-height_150 cs-height_lg_80"></div>
  
  <section>
    <div class="container">
      <div class="row">
        <div class="col-xl-6 col-lg-6">
          <div class="cs-image_layer cs-style1">
            <div class="cs-image_layer_in">
              <img src="{{ asset('assets/images_/diffuseurs/accueil/richmond/1.png') }}" alt="RICHMOND KOFFI, Créateur de Parfum Ivoirien" class="w-100 cs-radius_15">
            </div>
          </div>
          <div class="cs-height_0 cs-height_lg_40"></div>
        </div>
        <div class="col-xl-6 col-lg-6">
          <div class="cs-section_heading cs-style1">
            <h3 class="cs-section_subtitle colorText">IDENTITÉ OLFACTIVE</h3>
            <h2 class="cs-section_title">Votre signature olfactive sur-mesure</h2>
            <div class="cs-height_30 cs-height_lg_20"></div>
            <p class="cs-m0">Richkoff crée des signatures olfactives sur mesure racontant une histoire qui les rendra immortels.
              æ Notre palette s’enrichit également de la myrrhe mystique de Somalie, du néroli envoûtant d’Égypte, de la vanille exotique de Madagascar, et de l’ylang-ylang séduisant de la Réunion. Pour enrichir davantage nos créations et offrir un métissage olfactif unique, nous intégrons des essences rares provenant du monde entier, telles que le santal de l’Inde, le patchouli d’Indonésie, et le jasmin de Grasse et bien d’autres, formant une symphonie de parfums qui célèbrent la diversité et la beauté des arômes naturels.</p>
            <div class="cs-height_15 cs-height_lg_15"></div>
            <div class="cs-separator cs-accent_bg"></div>
            <div class="cs-height_25 cs-height_lg_0"></div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <div class="cs-height_125 cs-height_lg_55"></div>
  
  <div class="cs-height_150 cs-height_lg_80"></div>
  
  <section>
    <div class="container">
      <div class="row">
        <div class="col-xl-5 col-lg-7">
          <div class="cs-section_heading cs-style1">
            <h3 class="cs-section_subtitle colorText">CERTIFICATION</h3>
            <h3 class="cs-section_title">Bienvenue dans notre univers olfactif</h3>
            <div class="cs-height_30 cs-height_lg_20"></div>
            <p class="cs-m0 text-align-justify" style="font-size: 15px !important;">
              Fondé en 2019 par Richmond Koffi, un parfumeur formé à Grasse et célèbre pour son expertise en marketing olfactif, Richkoff crée des fragrance unique et mémorable qui racontent une histoire.
              Nos Matières Premières : Un Héritage Naturel et Noble
              Chez Richkoff, nous puisons dans le riche patrimoine des matières premières africaines, priorisant avec soin des ingrédients comme le gingembre épicé, le citron rafraîchissant, l'orange amère, la bergamote suave de Côte d'Ivoire, le vétiver du Mali, l’encense d’Ethiopie et le Thiouraye du Senegal.
            </p>
            <li>Hypoallergéniques</li>
            <li>Certifiés International Fragrance Association (IFRA)</li>
            </ul>
            </p>
            <div class="cs-height_30 cs-height_lg_30"></div>
            <div class="cs-separator cs-accent_bg"></div>
            <div class="cs-height_25 cs-height_lg_40"></div>
          </div>
        </div>
        <div class="col-lg-5 offset-xl-2">
          <img src="{{ asset('assets/images_/diffuseurs/accueil/certification/1.png') }}" alt="Certification Hypoallergenic, IFRA, Richkoff" class="w-100 cs-radius_15">
          <div class="cs-height_25 cs-height_lg_25"></div>
        </div>
        <div class="col-lg-6">
          <img src="{{ asset('assets/images_/diffuseurs/accueil/certification/1.jpg') }}" alt="Thumb" class="w-100 cs-radius_15">
          <div class="cs-height_25 cs-height_lg_25"></div>
        </div>
        <div class="col-lg-6">
          <img src="{{ asset('assets/images_/diffuseurs/accueil/certification/2.jpg') }}" alt="Thumb" class="w-100 cs-radius_15">
          <div class="cs-height_25 cs-height_lg_25"></div>
        </div>
      </div>
    </div>
  </section>
  
  <div class="cs-height_75 cs-height_lg_55"></div>
  
  <div class="container">
    <div class="cs-height_90 cs-height_lg_45"></div>
  </div>
  
  <div class="container">
    <div class="cs-section_heading cs-style1 text-center">
      <h2 class="cs-section_title wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s"> Fragrance sur-mesure</h2>
    </div>
  </div>
  
  <div class="cs-height_75 cs-height_lg_55"></div>
  
  <div class="cs-case_study text-end">
    <div class="cs-case_study_bg">
      <div class="cs-bg" data-src="{{ asset('assets/img/case_study_2.jpeg') }}"></div>
      <div class="cs-accent_bg"></div>
    </div>
    <h2 class="cs-case_study_title wow fadeInRight " data-wow-duration="0.8s" data-wow-delay="0.2s">
      <span class="ml15">Nous analysons <br> votre <span class="cs-accent_color word">identité</span> </span>
  
      <span> </span>
    </h2>
  </div>
  
  <div class="cs-case_study">
    <div class="cs-case_study_bg">
      <div class="cs-accent_bg"></div>
      <div class="cs-bg" data-src="{{ asset('assets/img/case_study_1.jpeg') }}"></div>
    </div>
    <h3 class="cs-case_study_title wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.2s">
      <span class="ml15">Et nous lui donnons <br> une signature <span class="cs-accent_color word">olfactive unique</span> </span>
    </h3>
  </div>
  
  <div class="cs-height_150 cs-height_lg_80"></div>
  
  <div class="cs-height_125 cs-height_lg_55"></div>
  
  <div class="cs-moving_text_wrap cs-bold cs-primary_font">
    <div class="cs-moving_text_in">
      <div class="cs-moving_text">SIGNATURE OLFACTIVE RÉALISÉE (EXCLUSIVE)</div>
      <div class="cs-moving_text">SIGNATURE OLFACTIVE RÉALISÉE (EXCLUSIVE)</div>
    </div>
  </div>
  
  <div class="cs-height_100 cs-height_lg_70"></div>
  
  <div class="container-fluid bg-white pt-5 mt-5 text-center">
    <div class="cs-partner_logo_wrap row">
      <div class="cs-partner_logo col-lg-2 col-md-2 col-12">
        <a href="https://www.banqueatlantique.net/" target="_blank">
          <img src="{{ asset('assets/images_/diffuseurs/accueil/partners/1.png ') }}" alt="Partner Richkoff logo - BACI" width="50%" class="img img-fluid shadow" title="cliquez pour les visiter">
        </a>
      </div>
      <div class="cs-partner_logo col-lg-2 col-md-2 col-12">
        <a href="https://beautifulhome-abidjan.com/" target="_blank">
          <img src="{{ asset('assets/images_/diffuseurs/accueil/partners/2.png ') }}" alt="Partner Richkoff logo - Beautiful Home" width="50%" class="img img-fluid shadow" title="cliquez pour les visiter">
        </a>
      </div>
      <div class="cs-partner_logo col-lg-2 col-md-2 col-12">
        <a href="https://www.cfaogroup.com/fr/accueil/" target="_blank">
          <img src="{{ asset('assets/images_/diffuseurs/accueil/partners/3.png ') }}" alt="Partner Richkoff logo - CFAO" width="50%" class="img img-fluid shadow" title="cliquez pour les visiter">
        </a>
      </div>
      <div class="cs-partner_logo col-lg-2 col-md-2 col-12">
        <a href="https://www.gtbankci.com/" target="_blank">
          <img src="{{ asset('assets/images_/diffuseurs/accueil/partners/4.png ') }}" alt="Partner Richkoff logo - GTBank" width="50%" class="img img-fluid shadow" title="cliquez pour les visiter">
        </a>
      </div>
      <div class="cs-partner_logo col-lg-2 col-md-2 col-12">
        <a href="https://koffi-diabate.com/" target="_blank">
          <img src="{{ asset('assets/images_/diffuseurs/accueil/partners/5.png ') }}" alt="Partner Richkoff logo - KOFFI & DIABATE" width="50%" class="img img-fluid shadow" title="cliquez pour les visiter">
        </a>
      </div>
      <div class="cs-partner_logo col-lg-2 col-md-2 col-12">
        <a href="https://www.majesticcinema.ci/" target="_blank">
          <img src="{{ asset('assets/images_/diffuseurs/accueil/partners/6.jpeg ') }}" alt="Partner Richkoff logo - MAJESTIC" width="50%" class="img img-fluid shadow" title="cliquez pour les visiter">
        </a>
      </div>
    </div>
  </div>
  
  <div class="container-fluid bg-white py-5 text-center">
    <div class="cs-partner_logo_wrap row">
      <div class="cs-partner_logo col-lg-2 col-md-2 col-12">
        <a href="https://mansabank.com/" target="_blank">
          <img src="{{ asset('assets/images_/diffuseurs/accueil/partners/7.png ') }}" alt="Partner Richkoff logo - Mansa Bank" width="50%" class="img img-fluid shadow" title="cliquez pour les visiter">
        </a>
      </div>
      <div class="cs-partner_logo col-lg-2 col-md-2 col-12">
        <a href="https://www.moov-africa.ci/" target="_blank">
          <img src="{{ asset('assets/images_/diffuseurs/accueil/partners/8.png ') }}" alt="Partner Richkoff logo - Moov" width="50%" class="img img-fluid shadow" title="cliquez pour les visiter">
        </a>
      </div>
      <div class="cs-partner_logo col-lg-2 col-md-2 col-12">
        <a href="https://www.orange.ci/" target="_blank">
          <img src="{{ asset('assets/images_/diffuseurs/accueil/partners/9.png ') }}" alt="Partner Richkoff logo - Orange" width="50%" class="img img-fluid shadow" title="cliquez pour les visiter">
        </a>
      </div>
      <div class="cs-partner_logo col-lg-2 col-md-2 col-12">
        <a href="https://porteo-btp.com/" target="_blank">
          <img src="{{ asset('assets/images_/diffuseurs/accueil/partners/10.png ') }}" alt="Partner Richkoff logo - Porteo-BTP" width="50%" class="img img-fluid shadow" title="cliquez pour les visiter">
        </a>
      </div>
      <div class="cs-partner_logo col-lg-2 col-md-2 col-12">
        <a href="https://sahanalytics.com/fr/" target="_blank">
          <img src="{{ asset('assets/images_/diffuseurs/accueil/partners/11.png ') }}" alt="Partner Richkoff logo - SAH Anatics" width="50%" class="img img-fluid shadow" title="cliquez pour les visiter">
        </a>
      </div>
      <div class="cs-partner_log col-lg-2 col-md-2 col-12">
        <a href="https://sib.ci/" target="_blank">
          <img src="{{ asset('assets/images_/diffuseurs/accueil/partners/12.png ') }}" alt="Partner Richkoff logo - SIB" width="50%" class="img img-fluid shadow" title="cliquez pour les visiter">
        </a>
      </div>
    </div>
  </div>
  
  <div class="container-fluid bg-white py-5 text-center">
    <div class="cs-partner_logo_wrap row">
      <div class="cs-partner_logo col-lg-2 col-md-2 col-12">
        <a href="https://equinoxfitnessspa.com/" target="_blank">
          <img src="{{ asset('assets/images_/diffuseurs/accueil/partners/13.png ') }}" alt="Partner Richkoff logo - Equinox" width="50%" class="img img-fluid shadow" title="cliquez pour les visiter">
        </a>
      </div>
      <div class="cs-partner_logo col-lg-2 col-md-2 col-12">
        <a href="https://www.eurolait.ci/index-EN.php" target="_blank">
          <img src="{{ asset('assets/images_/diffuseurs/accueil/partners/14.png ') }}" alt="Partner Richkoff logo - Eurolait" width="50%" class="img img-fluid shadow" title="cliquez pour les visiter">
        </a>
      </div>
      <div class="cs-partner_logo col-lg-2 col-md-2 col-12">
        <a href="https://www.azalai.com/azalai-hotel-abidjan" target="_blank">
          <img src="{{ asset('assets/images_/diffuseurs/accueil/partners/15.png ') }}" alt="Partner Richkoff logo - AZALAÏ Hôtel" width="50%" class="img img-fluid shadow" title="cliquez pour les visiter">
        </a>
      </div>
      <div class="cs-partner_logo col-lg-2 col-md-2 col-12">
        <a href="https://www.radissonhotels.com/fr-fr/hotels/radisson-blu-abidjan-airport" target="_blank">
          <img src="{{ asset('assets/images_/diffuseurs/accueil/partners/16.png ') }}" alt="Partner Richkoff logo - Radission BLU Abidjan" width="50%" class="img img-fluid shadow" title="cliquez pour les visiter">
        </a>
      </div>
      <div class="cs-partner_logo col-lg-2 col-md-2 col-12">
        <a href="https://vasesdhonneur.org/" target="_blank">
          <img src="{{ asset('assets/images_/diffuseurs/accueil/partners/17.png ') }}" alt="Partner Richkoff logo - Vases d'honneur" width="50%" class="img img-fluid shadow" title="cliquez pour les visiter">
        </a>
      </div>
      <div class="cs-partner_log col-lg-2 col-md-2 col-12">
        <a href="https://www.facebook.com/WillFitnessAbidjan/" target="_blank">
          <img src="{{ asset('assets/images_/diffuseurs/accueil/partners/18.png ') }}" alt="Partner Richkoff logo - Will Fitness" width="50%" class="img img-fluid shadow" title="cliquez pour les visiter">
        </a>
      </div>
    </div>
  </div>
  
  <div class="cs-height_130 cs-height_lg_70"></div>

@endsection
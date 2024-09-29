@extends('parfum.layout')

@section('content')


<!-- Start Hero -->
<div class="cs-page_heading cs-style1 cs-center text-center cs-bg" data-src="{{ asset('assets/images_/parfums/voyage/ban.jpg') }}">
    <div class="container">
      <div class="cs-page_heading_in">
        <h1 class="cs-page_title cs-font_50">Voyage de l'âme</h1>
      </div>
    </div>
  </div>
  <!-- End Hero -->
  <div class="cs-height_145 cs-height_lg_80"></div>
  <div class="container">
    <div class="cs-section_heading cs-style1 text-center">
      <h2 class="cs-section_title wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">
        L'ODYSSEY SPIRUTUELLE
      </h2>
    </div>
    <div class="cs-height_90 cs-height_lg_45"></div>
    <img src="{{ asset('assets/images_/parfums/voyage/1.jpg') }}" alt="Voyage de l'âme" class="w-100 cs-radius_15" />
    <div class="cs-height_140 cs-height_lg_80"></div>
    <p class="cs-m0 text-center">
      Voyage de l'Âme nous convie à une odyssée spirituelle, où l'envoûtante
      essence du calambac guide nos pas. Ce parfum est une invitation à
      explorer les profondeurs de notre être, à naviguer sur les eaux
      mystiques de notre conscience. C'est un voyage olfactif vers l'infini,
      un pèlerinage vers la quintessence de notre existence.
    </p>
    <div class="cs-height_65 cs-height_lg_45"></div>
  
    <div class="row">
      <div class="col-sm-6 cs-portfolio_img_in">
        <img src="{{ asset('assets/images_/parfums/voyage/2.jpg') }}" alt="Richkoff" class="w-100 cs-radius_5" />
        <div class="cs-height_25 cs-height_lg_25"></div>
      </div>
  
      <div class="col-sm-6 cs-portfolio_img_in">
        <a href="">
          <img src="{{ asset('assets/images_/parfums/voyage/3.png') }}" alt="Richkoff" class="w-75 cs-radius_5" />
        </a>
  
        <div class="cs-height_25 cs-height_lg_25"></div>
      </div>
    </div>
  
    <div class="row">
      <div class="col-sm-12 cs-portfolio_img_in text-center">
        <a href="../contact.php" class="cs-btn cs-style1 cs-type1"><span>Commander</span></a>
      </div>
    </div>
    <div class="cs-height_125 cs-height_lg_55"></div>
  </div>

@endsection
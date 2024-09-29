@extends('parfum.layout')

@section('content')

<!-- Start Hero -->
<div class="cs-page_heading cs-style1 cs-center text-center cs-bg" data-src="{{ asset('assets/images_/parfums/exode/ban.jpg') }}">
    <div class="container">
      <div class="cs-page_heading_in">
        <h1 class="cs-page_title cs-font_50 text-dark">Exode</h1>
      </div>
    </div>
  </div>
  <!-- End Hero -->
  <div class="cs-height_145 cs-height_lg_80"></div>
  <div class="container">
    <div class="cs-section_heading cs-style1 text-center">
      <h2 class="cs-section_title wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">
        ÉVASION PURE, INCARNÉ DANS L'ÉCLAT D'UN PARFUM
      </h2>
    </div>
    <div class="cs-height_90 cs-height_lg_45"></div>
    <img src="{{ asset('assets/images_/parfums/exode/1.jpg') }}" alt="Richkoff" class="w-100 cs-radius_15" />
    <div class="cs-height_140 cs-height_lg_80"></div>
    <p class="cs-m0 text-center">
      Évasion Pure nous emporte ensuite dans l'aventure ultime vers la
      liberté. Il s'agit d'une ode à la fuite audacieuse vers l'inconnu, à la
      quête de soi à travers l'éclat d'un parfum. La fraîcheur vivifiante,
      presque aqueuse, se mêle à des notes subtiles d'agrumes et de thé vert,
      évoquant l'aurore nouvelle qui jaillit après la nuit, le premier pas
      vers un horizon dégagé.
    </p>
    <div class="cs-height_65 cs-height_lg_45"></div>
    <div class="row">
      <div class="col-sm-6 cs-portfolio_img_in">
        <img src="{{ asset('assets/images_/parfums/exode/2.jpg') }}" alt="Richkoff" class="w-100 cs-radius_5" />
        <div class="cs-height_25 cs-height_lg_25"></div>
      </div>
      <div class="col-sm-6 cs-portfolio_img_in">
        <img src="{{ asset('assets/images_/parfums/exode/3.png') }}" alt="Richkoff" class="w-75 cs-radius_5" />
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
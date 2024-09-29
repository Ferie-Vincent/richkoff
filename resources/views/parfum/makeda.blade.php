@extends('parfum.layout')

@section('content')

<!-- Start Hero -->
<div class="cs-page_heading cs-style1 cs-center text-center cs-bg" data-src="{{ asset('assets/images_/parfums/makeda/ban.jpg') }}">
    <div class="container">
      <div class="cs-page_heading_in">
        <h1 class="cs-page_title cs-font_50 text-dark">Makeda</h1>
      </div>
    </div>
  </div>
  <!-- End Hero -->
  <div class="cs-height_145 cs-height_lg_80"></div>
  <div class="container">
    <div class="cs-section_heading cs-style1 text-center">
      <h2 class="cs-section_title wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">
        RÉGNER SUR LE MONDE AVEC GRÂCE
      </h2>
    </div>
    <div class="cs-height_90 cs-height_lg_45"></div>
    <img src="{{ asset('assets/images_/parfums/makeda/1.jpg') }}" alt="Makeda Parfum" class="w-100 cs-radius_15" />
    <div class="cs-height_140 cs-height_lg_80"></div>
    <p class="cs-m0 text-center">
      Parfum de Reine ouvre le bal de cette saga. Inspiré par l'élégance
      intemporelle de la reine de Saba, cette fragrance capte l'essence même
      de la royauté. La fleur blanche, symbole de pureté et de grâce, se
      déploie majestueusement, enveloppant celle qui la porte d'un voile
      d'élégance sans pareil. Makeda incarne la rencontre entre le pouvoir et
      la délicatesse, entre la terre fertile de Saba et les mystères
      insondables du règne féminin.
    </p>
    <div class="cs-height_65 cs-height_lg_45"></div>
  
    <div class="row">
      <div class="col-sm-6 cs-portfolio_img_in">
        <img src="{{ asset('assets/images_/parfums/makeda/2.jpg') }}" alt="Case Study" class="w-100 cs-radius_5" />
        <div class="cs-height_25 cs-height_lg_25"></div>
      </div>
  
      <div class="col-sm-6 cs-portfolio_img_in">
        <a href="">
          <img src="{{ asset('assets/images_/parfums/makeda/3.png') }}" alt="Case Study" class="w-75 cs-radius_5" />
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
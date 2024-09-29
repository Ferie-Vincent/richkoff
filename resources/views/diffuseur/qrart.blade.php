@extends('diffuseur.layout')

@section('content')
<!-- Start Hero -->
<div class="cs-page_heading cs-style1 cs-center text-center cs-bg" data-src="{{ asset('assets/images_/diffuseurs/boxart/ban.jpg') }}">
  <div class="container">
    <div class="cs-page_heading_in">
      <h1 class="cs-page_title cs-font_50 cs-white_color">La Box Art</h1>
    </div>
  </div>
</div>
<!-- End Hero -->

<!-- End Why Choose -->
<div class="cs-height_150 cs-height_lg_80"></div>
<div class="container">
  <div class="cs-portfolio_details">
    <img src="{{ asset('assets/images_/diffuseurs/boxart/1.png') }}" alt="Image" class="cs-radius_15 w-100" />
    <div class="cs-height_90 cs-height_lg_40"></div>

    <div class="row">
      <div class="col-lg-6">
        <div class="cs-section_heading cs-style1">
          <h2 class="cs-section_title">Édition limitée</h2>
          <div class="cs-height_40 cs-height_lg_20"></div>
          <p>
            Une des plus belles collaborations sur la personnalisation de
            l'interface de la Qr box a vu le jour. Des œuvres d'art plus
            qu'un simple diffuseur de parfum, grâce aux tableaux de
            l'Émérite, Artiste-peintre ivoirienne
            <span class="cs-accent_color">
              <a href="https://fr.wikipedia.org/wiki/Mathilde_Moreau#:~:text=Ancienne%20%C3%A9tudiante%20de%20l'%C3%A9cole,Beaux%2DArts%20(ENBA)." target="_blank">
                Dr. MATHILDE MOREAU</a></span>
            grande figure de l'art en Côte d'Ivoire et à l'international.
          </p>
          <div class="cs-height_10 cs-height_lg_10"></div>
          <p>
            Vos diffuseurs Qr Box se distinguent artistiquement et vous
            procurent une parfaite ambiance olfactive.
          </p>
        </div>
      </div>
      <div class="col-lg-5 offset-lg-1">
        <div class="cs-height_60 cs-height_lg_40"></div>
        <h2 class="cs-font_30 cs-font_26_sm cs-m0">Art parfumé</h2>
        <div class="cs-height_50 cs-height_lg_30"></div>
        <div class="row">
          <div class="col-6">
            <h3 class="cs-accent_color cs-font_22 cs-font_18_sm cs-m0">
              1. Composition
            </h3>
            <div class="cs-height_30 cs-height_lg_30"></div>
          </div>

          <div class="col-6">
            <h3 class="cs-accent_color cs-font_22 cs-font_18_sm cs-m0">
              2. La termitière
            </h3>
            <div class="cs-height_30 cs-height_lg_30"></div>
          </div>
          <div class="col-6">
            <h3 class="cs-accent_color cs-font_22 cs-font_18_sm cs-m0">
              3. Sur le chemin <br />
              de la rivière
            </h3>
            <div class="cs-height_30 cs-height_lg_30"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="cs-height_65 cs-height_lg_10"></div>
</div>

<section class="cs-gradient_bg_1 cs-shape_wrap_6">
  <div class="cs-shape_2">
    <div></div>
  </div>
  <div class="cs-shape_2">
    <div></div>
  </div>
  <div class="container">
    <div class="cs-height_145 cs-height_lg_80"></div>

    <div class="row align-items-center cs-column_reverse_lg">
      <div class="col-lg-5">
        <div class="cs-hero_text display-6">
          <a href="../contact.php" class="cs-btn cs-style1 cs-type1"><span>Commandez</span></a>
        </div>
        <div class="cs-height_45 cs-height_lg_30"></div>
      </div>
      <div class="col-lg-6 offset-lg-1 text-center">
        <div class="cs-portfolio_img_in cs-shine_hover_1 rounded-circle">
          <img src="{{ asset('assets/images_/diffuseurs/boxart/prix.png ') }}" alt="Richkoff" class="w-75" />
        </div>
        <div class="cs-height_0 cs-height_lg_40"></div>
      </div>
    </div>
  </div>
  <div class="cs-height_65 cs-height_lg_10"></div>
</section>
@endsection
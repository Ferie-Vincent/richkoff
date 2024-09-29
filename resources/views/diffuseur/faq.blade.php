@extends('diffuseur.layout')

@section('content')
<!-- Start Hero -->
<div class="cs-page_heading cs-style1 cs-center text-center cs-bg" data-src="{{ asset('assets/images_/diffuseurs/faq/1.jpg') }}">
  <div class="container">
    <div class="cs-page_heading_in">
      <h1 class="cs-page_title cs-font_50 cs-white_color">
        Nous avons peut-être déjà la réponse à votre question
      </h1>
    </div>
  </div>
</div>
<!-- End Hero -->

<!-- End Portfolio -->
<div class="cs-height_145 cs-height_lg_80"></div>
<div class="container">
  <div class="row">
    <div class="col-lg-4">
      <div class="cs-faq_nav cs-radius_15">
        <div class="text-center">
          {{-- <img src="{{ asset('assets/images/lg.png') }}" alt="" class="mb-5" width="50%"" /> --}}
        </div>
        <h2 class="cs-faq_nav_title cs-m0">Documentations</h2>
        <div class="cs-height_30 cs-height_lg_30"></div>

        <ul class="cs-list cs-style1 cs-mp0">
          <li>
            <a href="{{ asset('assets/docs/brochure.pdf') }}" class="cs-text_btn cs-type2" target="_blank">
              <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M2 4H0V20C0 21.1 0.9 22 2 22H18V20H2V4ZM20 0H6C4.9 0 4 0.9 4 2V16C4 17.1 4.9 18 6 18H20C21.1 18 22 17.1 22 16V2C22 0.9 21.1 0 20 0ZM20 16H6V2H20V16Z" fill="#ffd700"></path>
              </svg>
              <span>Téléchargez le Catalogue</span>
            </a>
          </li>
          <li>
            <a class="cs-text_btn cs-type2">
              <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M2 4H0V20C0 21.1 0.9 22 2 22H18V20H2V4ZM20 0H6C4.9 0 4 0.9 4 2V16C4 17.1 4.9 18 6 18H20C21.1 18 22 17.1 22 16V2C22 0.9 21.1 0 20 0ZM20 16H6V2H20V16Z" fill="#ffd700"></path>
              </svg>
              <span>Signature olfactive</span>
            </a>
          </li>
          <li>
            <a class="cs-text_btn cs-type2">
              <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M2 4H0V20C0 21.1 0.9 22 2 22H18V20H2V4ZM20 0H6C4.9 0 4 0.9 4 2V16C4 17.1 4.9 18 6 18H20C21.1 18 22 17.1 22 16V2C22 0.9 21.1 0 20 0ZM20 16H6V2H20V16Z" fill="#ffd700"></path>
              </svg>
              <span>Huiles essentielles</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="col-lg-7 offset-lg-1">
      <div class="cs-height_0 cs-height_lg_40"></div>
      <div class="cs-accordians cs-style1">
        <div class="cs-accordian active">
          <div class="cs-accordian_head">
            <h2 class="cs-accordian_title">
              Peut-on tester les parfums avant de passer commande ?
            </h2>
            <span class="cs-accordian_toggle cs-accent_color">
              <svg width="15" height="8" viewBox="0 0 15 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 0L7.5 7.5L15 0H0Z" fill="currentColor"></path>
              </svg>
            </span>
          </div>
          <div class="cs-accordian_body">
            <p>
              Bien entendu ! Vous pouvez explorer nos parfums en vous
              rendant à notre showroom situé à Abidjan, Angré Star 9A pour
              les résidents du territoire, ou en commandant nos
              d'échantillons vaporisateur et recevoir une carte cadeau de
              5000F (8€) pour votre prochain achat. Cela vous permettra de
              découvrir nos fragrances avant de faire votre choix.
            </p>
          </div>
        </div>
        <!-- .cs-accordian -->
        <div class="cs-accordian">
          <div class="cs-accordian_head">
            <h2 class="cs-accordian_title">
              Quels composants sont inclus dans vos parfums et quels dangers
              potentiels pour ma santé peuvent-ils présenter ?
            </h2>
            <span class="cs-accordian_toggle cs-accent_color">
              <svg width="15" height="8" viewBox="0 0 15 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 0L7.5 7.5L15 0H0Z" fill="currentColor"></path>
              </svg>
            </span>
          </div>
          <div class="cs-accordian_body" style="display: none">
            <p>
              Les ingrédients de nos fragrances sont conformes aux normes
              d'IFRA (International Fragrance Association). Ils sont sans
              danger pour la santé, qu'ils soient naturels ou synthétiques.
            </p>
          </div>
        </div>
        <!-- .cs-accordian -->
        <div class="cs-accordian">
          <div class="cs-accordian_head">
            <h2 class="cs-accordian_title">
              Une personne peut-elle développer une réaction allergique à un
              parfum ?
            </h2>
            <span class="cs-accordian_toggle cs-accent_color">
              <svg width="15" height="8" viewBox="0 0 15 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 0L7.5 7.5L15 0H0Z" fill="currentColor"></path>
              </svg>
            </span>
          </div>
          <div class="cs-accordian_body" style="display: none">
            <p>
              NON. Il n'y a pas d'éléments allergènes dans un parfum.
              Cependant, une personne allergique peut réagir à une odeur si
              sa mémoire olfactive est sensible au souvenir de celle-ci.
            </p>
          </div>
        </div>
      </div>
      <!-- .cs-accordians -->
    </div>
  </div>
</div>

<div class="cs-height_145 cs-height_lg_80"></div>
@endsection
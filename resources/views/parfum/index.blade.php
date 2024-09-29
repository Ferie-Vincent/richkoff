
@include('parfum.partials.header')

@section('content')
<!-- Start Hero -->
<div class="cs-fullscreen_swiper_wrap">
    <div class="swiper cs-fullscreen_swiper_slider">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="cs-hero cs-style5">
            <figure class="cs-swiper_parallax_bg" data-src="{{ asset('assets/images_/parfums/accueil/1.png') }}">
              <img src="{{ asset('assets/images_/parfums/accueil/1.png') }}" alt="Slider" class="cs-entity_img" />
            </figure>
            <div class="cs-hero_text display-6">
              <a href="{{route('makeda')}}" class="cs-btn cs-style1 cs-type1"><span>Découvrir</span></a>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="cs-hero cs-style5">
            <figure class="cs-swiper_parallax_bg" data-src="{{ asset('assets/images_/parfums/accueil/2.png') }}">
              <img src="{{ asset('assets/images_/parfums/accueil/2.png') }}" alt="Slider" class="cs-entity_img" />
            </figure>
            <div class="cs-hero_text display-6">
              <a href="{{route('exode')}}" class="cs-btn cs-style1 cs-type1"><span>Découvrir</span></a>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="cs-hero cs-style5">
            <figure class="cs-swiper_parallax_bg" data-src="{{ asset('assets/images_/parfums/accueil/3.png') }}">
              <img src="{{ asset('assets/images_/parfums/accueil/3.png') }}" alt="Slider" class="cs-entity_img" />
            </figure>
            <div class="cs-hero_text display-6">
              <a href="{{route('confusion')}}" class="cs-btn cs-style1 cs-type1"><span>Découvrir</span></a>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="cs-hero cs-style5">
            <figure class="cs-swiper_parallax_bg" data-src="{{ asset('assets/images_/parfums/accueil/4.png') }}">
              <img src="{{ asset('assets/images_/parfums/accueil/4.png') }}" alt="Slider" class="cs-entity_img" />
            </figure>
            <div class="cs-hero_text display-6">
              <a href="{{route('santal')}}" class="cs-btn cs-style1 cs-type1"><span>Découvrir</span></a>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="cs-hero cs-style5">
            <figure class="cs-swiper_parallax_bg" data-src="{{ asset('assets/images_/parfums/accueil/5.png') }}">
              <img src="{{ asset('assets/images_/parfums/accueil/5.png') }}" alt="Slider" class="cs-entity_img" />
            </figure>
            <div class="cs-hero_text display-6">
              <a href="{{route('ceinture-noire')}}" class="cs-btn cs-style1 cs-type1"><span>Découvrir</span></a>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="cs-hero cs-style5">
            <figure class="cs-swiper_parallax_bg" data-src="{{ asset('assets/images_/parfums/accueil/6.png') }}">
              <img src="{{ asset('assets/images_/parfums/accueil/6.png') }}" alt="Slider" class="cs-entity_img" />
            </figure>
            <div class="cs-hero_text display-6">
              <a href="{{route('voyage')}}" class="cs-btn cs-style1 cs-type1"><span>Découvrir</span></a>
            </div>
          </div>
        </div>
      </div>
      <!-- <div class="cs-swiper_pagination cs-square_shape"></div> -->
      <!-- <div class="cs-swiper_pagination cs-slide_numbers"></div> -->
      <div class="cs-swiper_button_prev">
        <svg width="26" height="13" viewBox="0 0 26 13" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M0.469791 5.96967C0.176899 6.26256 0.176899 6.73744 0.469791 7.03033L5.24276 11.8033C5.53566 12.0962 6.01053 12.0962 6.30342 11.8033C6.59632 11.5104 6.59632 11.0355 6.30342 10.7426L2.06078 6.5L6.30342 2.25736C6.59632 1.96447 6.59632 1.48959 6.30342 1.1967C6.01053 0.903806 5.53566 0.903806 5.24276 1.1967L0.469791 5.96967ZM26.0001 5.75L1.00012 5.75V7.25L26.0001 7.25V5.75Z" fill="currentColor" />
        </svg>
        Préc
      </div>
      <div class="cs-swiper_button_next">
        Suiv
        <svg width="26" height="13" viewBox="0 0 26 13" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M25.5305 7.03033C25.8233 6.73744 25.8233 6.26256 25.5305 5.96967L20.7575 1.1967C20.4646 0.903806 19.9897 0.903806 19.6968 1.1967C19.4039 1.48959 19.4039 1.96447 19.6968 2.25736L23.9395 6.5L19.6968 10.7426C19.4039 11.0355 19.4039 11.5104 19.6968 11.8033C19.9897 12.0962 20.4646 12.0962 20.7575 11.8033L25.5305 7.03033ZM0.00012207 7.25H25.0001V5.75H0.00012207V7.25Z" fill="currentColor" />
        </svg>
      </div>
    </div>
  </div>

<!-- Script -->
<script src="{{ asset('assets/js/plugins/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/isotope.pkg.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/jquery.slick.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/jquery.counter.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/lightgallery.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/wow.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/gsap.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/swiper.min.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>
<script src="{{ asset('assets/js/script.js') }}"></script>
</body>

</html>
  
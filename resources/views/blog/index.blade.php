@extends('layout')

@section('content')

  <!-- Start Hero -->
  <div class="cs-page_heading cs-style1 cs-center text-center cs-bg" data-src="{{asset('assets/images_/blog/1.png')}}">
    <div class="container">
      <div class="cs-page_heading_in">
        <h1 class="cs-page_title cs-font_50 cs-white_color">Actualité</h1>
      </div>
    </div>
  </div>

  <div class="cs-height_150 cs-height_lg_80"></div>

  <div class="container">
    <div class="cs-portfolio_1_heading">
      <div class="cs-section_heading cs-style1">
        <h3 class="cs-section_subtitle">Actualités</h3>
        <h2 class="cs-section_title">Découvrez les informations sur RICHKOFF</h2>
      </div>
    </div>
    <div class="cs-height_90 cs-height_lg_15"></div>
    <div class="cs-isotop cs-style1 cs-isotop_col_3 cs-has_gutter_24" style="position: relative; height: 1467px;">
      <div class="cs-grid_sizer"></div>

      @foreach ($articles as $article)
      <div class="cs-isotop_item ui_ux_design" style="position: absolute; left: 0%; top: 0px;">
        <a href="{{ route('actualite.show', $article) }}" class="cs-portfolio cs-style1 cs-type1">
        <div class="cs-portfolio_hover"></div>
        <div class="cs-portfolio_bg cs-bg" data-src="{{ asset('storage/' . $article->image) }}" style="background-image: url(&quot;{{ asset('storage/' . $article->image) }}&quot;);"></div>
        <div class="cs-portfolio_info">
            <div class="cs-portfolio_info_bg cs-accent_bg-dk"></div>
            <h2 class="cs-portfolio_title" style="margin-top: -40px !important">{{ $article->title }}</h2>
            <div class="cs-portfolio_subtitle">Lire plus...</div>
        </div>
        </a>
    </div><!-- .cs-isotop_item -->
      @endforeach



    </div>
    <div class="cs-height_90 cs-height_lg_40"></div>
  </div>

@endsection
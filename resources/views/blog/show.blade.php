@extends('layout')

@section('content')

  <!-- Start Hero -->
  <div class="cs-page_heading cs-style1 cs-center text-center cs-bg" data-src="{{ asset('assets/images_/blog/1.png') }}">
    <div class="container">
      <div class="cs-page_heading_in">
        <h1 class="cs-page_title cs-font_50 cs-white_color">Actualité</h1>
      </div>
    </div>
  </div>

  <div class="cs-height_150 cs-height_lg_80"></div>

  <div class="container">
    <div class="cs-section_heading cs-style1 text-center">
      <h4 class="cs-section_subtitle"> Source
        <a href="{{ $article->url }}" class="colorText" target="_blank">
          {{ $article->source }}
        </a>
      </h4>
      <h2 class="cs-section_title wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s" style="visibility: visible; animation-duration: 0.8s; animation-delay: 0.2s; animation-name: fadeInUp;">
        {{ $article->title }}
      </h2>
    </div>
    <div class="cs-height_90 cs-height_lg_45"></div>
    <img src="{{ asset('storage/' . $article->image) }}" alt="Case Study" class="w-100 cs-radius_15" >
    <div class="cs-height_140 cs-height_lg_80"></div>
    <div class="cs-height_60 cs-height_lg_45"></div>
    <p class="cs-m0">
      {!! nl2br(e($article->text)) !!}
    </p>
    <div class="cs-height_65 cs-height_lg_45"></div>
    <div class="cs-height_125 cs-height_lg_55"></div>
  </div>


@endsection
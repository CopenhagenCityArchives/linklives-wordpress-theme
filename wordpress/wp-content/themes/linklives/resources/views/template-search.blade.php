{{--
  Template Name: Søgning
--}}

@extends('layouts.app')

@section('content')
  <base href="/soeg-i-livsforloeb-og-kilder">
  <app-root></app-root>

  <script>
    window.lls = {
      featherIconPath: "{{ App\asset_path('images/feather-sprite.svg') }}",
      language: "{{ pll_current_language() }}",
      title: "{{ get_field('search_title_da') }}",
      titleEn: "{{ get_field('search_title_en') }}",
      introText: "{{ get_field('search_lead_da') }}",
      introTextEn: "{{ get_field('search_lead_en') }}",
      helpBoxText: "{{ get_field('search_help_da') }}",
      helpBoxTextEn: "{{ get_field('search_help_en') }}"
    };
  </script>
  <style>
    @import url("https://dx7i5z2o95p3n.cloudfront.net/frontend/styles.css");
  </style>
  <script src="https://dx7i5z2o95p3n.cloudfront.net/frontend/runtime-es2015.js" type="module"></script>
  <script src="https://dx7i5z2o95p3n.cloudfront.net/frontend/runtime-es5.js" nomodule="" defer=""></script>
  <script src="https://dx7i5z2o95p3n.cloudfront.net/frontend/polyfills-es5.js" nomodule="" defer=""></script>
  <script src="https://dx7i5z2o95p3n.cloudfront.net/frontend/polyfills-es2015.js" type="module"></script>
  <script src="https://dx7i5z2o95p3n.cloudfront.net/frontend/scripts.js" defer=""></script>
  <script src="https://dx7i5z2o95p3n.cloudfront.net/frontend/main-es2015.js" type="module"></script>
  <script src="https://dx7i5z2o95p3n.cloudfront.net/frontend/main-es5.js" nomodule="" defer=""></script>
@endsection

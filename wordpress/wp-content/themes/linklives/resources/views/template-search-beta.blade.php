{{--
  Template Name: Søgning - Beta
--}}

@extends('layouts.app')

@section('content')
  @while (have_posts()) @php the_post() @endphp
    <base href="/soeg-i-livsforloeb-og-kilder">
    <app-root></app-root>

    <script>
      window.lls = {
        featherIconPath: '{{ App\asset_path('images/feather-sprite.svg') }}',
        language: '{{ pll_current_language() }}',
        title: '{{ get_the_title() }}',
        introText: '{!! str_replace(array("\r", "\n"), '', html_entity_decode(get_field('search_lead'))) !!}',
        helpBoxText: '{!! str_replace(array("\r", "\n"), '', html_entity_decode(get_field('search_help'))) !!}',
        aboutLifeCourseText: '{!! str_replace(array("\r", "\n"), '', html_entity_decode(get_field('search_about'))) !!}',
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

  @endwhile

@endsection

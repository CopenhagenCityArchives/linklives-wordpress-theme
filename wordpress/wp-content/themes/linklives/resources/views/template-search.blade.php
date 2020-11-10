{{--
  Template Name: Søgning
--}}

@extends('layouts.app')

@section('content')
  <base href="/soeg-i-livsforloeb-og-kilder">
  <app-root></app-root>

  <script>
    window.lls = {featherIconPath: "{{ App\asset_path('images/feather-sprite.svg') }}"};
  </script>
  <style>
  @import url("https://dx7i5z2o95p3n.cloudfront.net/frontend/styles.css");<br />
  </style><script src="https://dx7i5z2o95p3n.cloudfront.net/frontend/runtime-es2015.js" type="module"></script>
  <script src="https://dx7i5z2o95p3n.cloudfront.net/frontend/runtime-es5.js" nomodule="" defer=""></script>
  <script src="https://dx7i5z2o95p3n.cloudfront.net/frontend/polyfills-es5.js" nomodule="" defer=""></script>
  <script src="https://dx7i5z2o95p3n.cloudfront.net/frontend/polyfills-es2015.js" type="module"></script>
  <script src="https://dx7i5z2o95p3n.cloudfront.net/frontend/scripts.js" defer=""></script>
  <script src="https://dx7i5z2o95p3n.cloudfront.net/frontend/main-es2015.js" type="module"></script>
  <script src="https://dx7i5z2o95p3n.cloudfront.net/frontend/main-es5.js" nomodule="" defer=""></script>
@endsection

{{--
  Template Name: Fond-oversigt
--}}

@extends('layouts.app')

@section('content')

  @include('partials.page-header')

  @php $posts = get_posts( array('post_type' => 'fond') ) @endphp

  <section class="module archive-wrapper theme-{{ get_field('theme') ? get_field('theme') : 'white' }}">
    <div class="container-fluid">
      <div class="row row-eq-height">
        @php global $post @endphp

        @foreach ( $posts as $post )
          @php setup_postdata( $post ) @endphp
          @include('partials.content-partner', ['classes' => 'col-lg-6'])
        @endforeach

        @php wp_reset_postdata() @endphp
      </div>
    </div>

  </section>

@endsection

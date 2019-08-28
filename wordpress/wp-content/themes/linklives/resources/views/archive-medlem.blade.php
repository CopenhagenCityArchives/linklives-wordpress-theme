{{--
  Template Name: Medlem-oversigt
--}}

@extends('layouts.app')

@section('content')

  @include('partials.page-header')

    @php
    $terms = get_terms([
        'taxonomy' => 'rolle',
        'orderby' => 'meta_value_num',
        'order' => 'ASC',
        'meta_query' => [[
          'key' => 'role_order',
          'type' => 'NUMERIC',
        ]]
    ]);
    @endphp

    @if (!empty($terms))
      @foreach ($terms as $term)

        @php
          $args = array(
            'post_type' => 'medlem',
            'orderby' => 'title',
            'order' => 'ASC',
            'tax_query' => [[
              'taxonomy' => 'rolle',
              'field' => 'term_id',
              'terms' => $term->term_id
            ]]
          );
          $query = new WP_Query( $args );
        @endphp

        <section class="module archive-wrapper theme-{{ get_field('theme') ? get_field('theme') : 'green' }} count-{{ $query->found_posts }}">
          <div class="container-fluid">
            <h3>{{ $term->name }}</h3>

            <div class="row row-eq-height">

              @while ($query->have_posts()) @php $query->the_post() @endphp
                @include('partials.content-medlem')
              @endwhile

              @php wp_reset_postdata() @endphp
            </div>
          </div>

        </section>

      @endforeach
    @endif

@endsection

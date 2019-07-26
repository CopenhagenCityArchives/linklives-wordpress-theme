@extends('layouts.app')

@section('content')

  @include('partials.page-header')

  <section class="module archive-wrapper">
    <div class="container-fluid">
      @if (!have_posts())
        <div class="alert alert-warning">
          {{ pll__( 'Ingen nyheder' ) }}
        </div>
        {!! get_search_form(false) !!}
      @endif

      <div class="row row-eq-height">
        @php
          $cols;
          $colsRowMd = 0;
          $colsRowLg = 0;
          $colsRowXl = 0;
        @endphp

        @while (have_posts()) @php the_post() @endphp
          @if (is_sticky())
            @php
              $cols = 'col-xl-6';
              $colsRowMd += 12;
              $colsRowLg += 12;
              $colsRowXl += 6;
            @endphp
          @elseif (has_post_thumbnail())
            @php
              $cols = 'col-lg-6';
              $colsRowMd += 12;
              $colsRowLg += 6;
              $colsRowXl += 6;
            @endphp
          @else
            @php
              $cols = 'col-md-6 col-xl-3';
              $colsRowMd += 6;
              $colsRowLg += 6;
              $colsRowXl += 3;
            @endphp
          @endif

          @php
            $classes = $cols;
            $classes .= $colsRowMd % 12 == 0 ? ' last-md' : '';
            $classes .= $colsRowLg % 12 == 0 ? ' last-lg' : '';
            $classes .= $colsRowXl % 12 == 0 ? ' last-xl' : '';
          @endphp
          @include('partials.content-'.get_post_type(), ['classes' => $classes])
        @endwhile
      </div>
      @include('components.nav-index')

{{--
      @php global $wp_query; @endphp

      @if (  $wp_query->max_num_pages > 1 )
      	<button class="btn btn-primary load-more">More posts</button>
      @endif --}}

    </div>

  </section>

  @includeWhen(( !is_front_page() && is_home() ) || is_tag(), 'partials.tags-filter')

@endsection

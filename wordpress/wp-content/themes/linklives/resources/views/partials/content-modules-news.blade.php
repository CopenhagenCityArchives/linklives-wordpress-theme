@php
  $posts = get_sub_field('modules_news_specificnews') ? get_sub_field('modules_news_specificnews') : get_posts(array('posts_per_page' => 3));
@endphp

<section class="module module-news">
  <div class="container-fluid">
    <a class="float-right link" href="{{ get_post_type_archive_link( 'post' ) }}">{{ pll__( 'Alle nyheder' ) }}</a>

    <header class="d-flex align-content-center">
      <h1>{{ get_sub_field('modules_news_headline') ? get_sub_field('modules_news_headline') : pll__( 'Nyheder' )}}</h1>
      <h2 class="handwritten">{{ get_sub_field('modules_news_handwriting') ? get_sub_field('modules_news_handwriting') : pll__( 'The latest' )}}</h2>
    </header>

    @if( $posts )
      @php global $post @endphp

    	<div class="row row-eq-height">
      	@foreach( $posts as $key => $post )
          @php setup_postdata($post) @endphp
          @include('partials.content-post', ['classes' => $key == 2 ? 'col-lg-4 last-lg last-xl' : 'col-lg-4'])
      	@endforeach
        @php wp_reset_postdata() @endphp
      </div>
    @endif
  </div>
</section>

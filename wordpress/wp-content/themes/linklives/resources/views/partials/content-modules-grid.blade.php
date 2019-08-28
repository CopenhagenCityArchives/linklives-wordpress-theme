@php
  $posts = get_sub_field('modules_grid_content');
  global $post;
@endphp

<section class="module module-grid theme-{{ get_sub_field('modules_grid_theme') }}">
  <div class="container-fluid">

    @if( $posts )
      <header class="d-flex">
        <h2 class="handwritten mr-3">{{ get_sub_field('modules_grid_handwriting') ?: get_sub_field('modules_grid_handwriting')}}</h2>
        <h2>{{ get_sub_field('modules_grid_headline') ?: get_sub_field('modules_grid_headline') }}</h2>
      </header>

      <div class="row row-eq-height align-items-center">
    	  @foreach( $posts as $post )
          @php setup_postdata($post) @endphp
          <a {{ post_class('col-6 col-md-3 mb-4 mb-md-0 post-type') }} href="{{get_post_type_archive_link(get_post_type()) . '#' . get_post_field( 'post_name' )}}">
            <article>
              @include('components.thumbnail')

              <header>
                <h6>{{ get_the_title() }}</h6>
              </header>

            </article>
          </a>

    	  @endforeach
        @php wp_reset_postdata() @endphp

      </div>
    @endif
  </div>
</section>

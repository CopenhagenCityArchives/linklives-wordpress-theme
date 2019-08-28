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

          <a {{ post_class('col-6 col-md-3 post-type') }} href="{{the_permalink()}}">
            <article>
              @if ( has_post_thumbnail() )
                @php
                  $type = get_post_mime_type( get_post_thumbnail_id() );
                  $mime_type = explode('/', $type);
                  $type = $mime_type['1'];
                @endphp

                @if($type == 'svg+xml')
                  <div class="thumbnail" style="">
                    @php
                      $svg_url = wp_get_attachment_image_src( get_post_thumbnail_id());
                      $domain = get_site_url();
                      $relative_url = str_replace( $domain . '/wp-content/uploads', '', $svg_url[0] );
                      include(wp_upload_dir()['basedir'] . $relative_url);
                    @endphp
                  </div>
                @else
                  <img class="thumbnail" title="{{get_post(get_post_thumbnail_id())->post_excerpt}}" src="{{the_post_thumbnail_url('thumbnail-image-x1')}}" srcset="{{the_post_thumbnail_url('thumbnail-image-x2')}} 2x"/>
                @endif
              @endif

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

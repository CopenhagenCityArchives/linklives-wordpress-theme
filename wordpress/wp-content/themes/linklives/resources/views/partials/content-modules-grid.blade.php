<section class="module module-grid theme-{{ get_sub_field('modules_grid_theme') }}">
  <div class="container-fluid">
    @php
      $content = get_sub_field('modules_grid_content')
    @endphp
    @if( $content )
      <div class="row row-eq-height align-items-center">
        <div class="col-xl-3 d-flex align-items-center">
          @include('partials.modules-header', ['before' => true])
        </div>

    	   @foreach( $content as $c )
           <div class="col-sm-6 col-lg-4 col-xl-3">
             <a class="d-flex align-items-center justify-content-center flex-column post-partner" href="{{the_permalink($c->ID)}}">
               <img src="{{get_the_post_thumbnail_url($c->ID)}}" />
               <p>{{ get_the_title($c->ID) }}</p>
             </a>
          </div>
    	   @endforeach
      </div>
    @endif
  </div>
</section>

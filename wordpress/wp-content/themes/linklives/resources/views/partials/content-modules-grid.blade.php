<section class="module module-grid theme-{{ get_sub_field('modules_grid_theme') }}">
  <div class="container-fluid">
    @php
      $content = get_sub_field('modules_grid_content')
    @endphp
    @if( $content )
      <div class="row row-eq-height">
        <div class="col-md-3">
          @include('partials.modules-header', ['before' => true])
        </div>

    	   @foreach( $content as $c )
           <div class="col-md-3">
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

<section class="module module-grid theme-{{ get_sub_field('modules_grid_theme') }}">
  <div class="container-fluid">
    @php
      $content = get_sub_field('modules_grid_content')
    @endphp
    @if( $content )
      <div class="row row-eq-height">
        <div class="col-md-3">
          <header class="d-flex align-content-center">
            <h2 class="handwritten mr-3">{{ get_sub_field('modules_grid_handwriting') ? get_sub_field('modules_grid_handwriting') : pll__( 'Vores' )}}</h2>
            <h1>{{ get_sub_field('modules_grid_headline') ? get_sub_field('modules_grid_headline') : pll__( 'Indhold' )}}</h1>
          </header>
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

<section class="module module-groupedlinks">
  <div class="groups-wrap">
    <div class="container-fluid">
      <h6 class="mb-4">{{ get_sub_field('modules_groupedlinks_headline') ? get_sub_field('modules_groupedlinks_headline') : pll__( 'Tilbud' )}}</h6>

      @if( have_rows('modules_groupedlinks_groups') )
        <ul class="list-unstyled">
          @while ( have_rows('modules_groupedlinks_groups') )
            @php the_row() @endphp
            <li>
              <a class="group-link {{ get_row_index() == 1 ? 'active' : '' }}" data-group="{{ get_row_index() }}">
                <span class="handwritten mr-3">{{ get_sub_field('modules_groupedlinks_groups_handwriting') ? get_sub_field('modules_groupedlinks_groups_handwriting') : pll__( 'for' )}}</span>
                {{ the_sub_field('modules_groupedlinks_groups_grouptitle') }}
              </a>
            </li>
          @endwhile
        </ul>
      @endif
    </div>
  </div>
  <div class="links-wrap">
    <div class="links-animate">
      @if( have_rows('modules_groupedlinks_groups') )
    	  @while ( have_rows('modules_groupedlinks_groups') )
          @php the_row() @endphp
          <div id="group-{{ get_row_index() }}" class="link-wrap">
            <div class="container-fluid">
              <h6 class="mb-4">{{ the_sub_field('modules_groupedlinks_groups_headline') }}</h6>
              <p>{{ the_sub_field('modules_groupedlinks_groups_body') }}</p>

              @if( have_rows('modules_groupedlinks_groups_links') )
                <ul class="list-unstyled">
              	  @while ( have_rows('modules_groupedlinks_groups_links') )
                    @php the_row() @endphp
                      <li><a href="{{ the_sub_field('modules_groupedlinks_groups_links_linkurl') }}">{{ the_sub_field('modules_groupedlinks_groups_links_linktext') }}@include('components.icon', ['icon' => 'arrow-right'])</a></li>
              		@endwhile
              	</ul>
              @endif
            </div>
          </div>
    		@endwhile
      @endif
    </div>
  </div>
</section>
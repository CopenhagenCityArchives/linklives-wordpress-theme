<article @php post_class('col-md-6 col-lg-4 col-xl-3 text-white post-type') @endphp>

  @include('components.byline', ['headline' => 'h5'])

  <div class="entry-summary mt-4">
    @php the_excerpt() @endphp
  </div>

  @if( have_rows('members_links') )
    @while ( have_rows('members_links') )
      @php the_row() @endphp
      <a class="link text-white mr-3" href="{{the_sub_field('members_links_url')}}">{{the_sub_field('members_links_title')}}</a>
    @endwhile
  @endif
</article>
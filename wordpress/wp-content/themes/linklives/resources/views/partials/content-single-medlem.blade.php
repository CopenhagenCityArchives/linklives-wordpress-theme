<article @php post_class() @endphp>
  <header>
    <h1 class="entry-title display-4">{!! get_the_title() !!}</h1>
    @include('partials/entry-meta')
    @include('partials/entry-author')
  </header>

  @include('components.profile-image')

  @if( have_rows('members_links') )

    @while ( have_rows('members_links') )
      @php the_row() @endphp
      <a href="{{the_sub_field('members_links_url')}}">{{the_sub_field('members_links_title')}}</a>
    @endwhile
  @endif
  @if( get_field('members_contact') )
    {{get_field('members_phone') ? the_field('members_phone') : ''}}
    {{get_field('members_email') ? the_field('members_email') : ''}}
  @endif

  <div class="entry-content">
    @php the_content() @endphp
  </div>

  <footer>
    {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
  </footer>
</article>

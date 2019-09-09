<article @php post_class() @endphp>

  @include('partials.page-header')

  <section class="module archive-wrapper theme-white">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-10 offset-sm-1 col-lg-8 offset-lg-0 col-xl-6 order-lg-2">
          <div class="entry-content mb-5">
            @php the_content() @endphp
          </div>
        </div>
        <div class="offset-sm-1 col-lg-2 offset-lg-0 col-xl-3 order-lg-1">
          @php $photographer = get_field('photographer', get_post_thumbnail_id(get_the_ID())) @endphp

          @if( $photographer )
            <div class="mb-4">
              <div class="light">{{pll__('Profilbillede-fotograf')}}</div>
              <p>{{ $photographer }}</p>
            </div>
          @endif

          @if( have_rows('members_links') )
            <div class="mb-4">
              <div class="light">{{pll__('Links')}}</div>
              @while ( have_rows('members_links') )
                @php the_row() @endphp
                <a class="d-block" href="{{the_sub_field('members_links_url')}}">{{the_sub_field('members_links_title')}}</a>
              @endwhile
            </div>
          @endif

          @if (get_field('members_phone') || get_field('members_email'))
            <div class="light">{{pll__('Kontaktoplysninger')}}</div>
          @endif

          @if (get_field('members_email'))
            <a class="d-block" href="mailto:{{ get_field('members_email') }}" target="_blank">{{ get_field('members_email') }}</a>
          @endif

          @if (get_field('members_phone'))
            <a class="d-block" href="tel:{{ get_field('members_phone') }}" target="_blank">{{ get_field('members_phone') }}</a>
          @endif
        </div>
      </div>
    </div>
  <section>

  @if( have_rows('modules') )
    @while ( have_rows('modules') )
      @php the_row() @endphp
      @include('partials.content-' . str_replace('_', '-', get_row_layout()))
    @endwhile
  @endif

</article>

<article @php post_class('module') @endphp>
  <div class="container-fluid">
    @if ( has_post_thumbnail())
      <div class="row mb-5">
        <div class="col-sm-10 offset-sm-1 col-lg-8 offset-lg-2 col-xl-6 offset-xl-3">
          <div class="img-wrap">
            @include('components.thumbnail')
          </div>
        </div>
        <div class="col-sm-10 offset-sm-1 offset-lg-0 col-lg-2 d-flex align-items-end">
          <div class="light thumbnail-title">
            {{get_post(get_post_thumbnail_id())->post_excerpt}}
          </div>
        </div>
      </div>
    @endif
    <div class="row">
      <div class="col-sm-10 offset-sm-1 col-lg-8 offset-lg-2 col-xl-6 offset-xl-3">
        <header>
          <h1 class="entry-title display-4 mt-2 mb-4">{!! get_the_title() !!}</h1>
        </header>
      </div>
      <div class="w-100"></div>
      <div class="col-sm-10 offset-sm-1 col-lg-8 offset-lg-0 col-xl-6 order-lg-2">
        <div class="entry-content mb-5">
          @php the_content() @endphp
        </div>
      </div>
      <div class="offset-sm-1 col-lg-2 offset-lg-0 col-xl-3 order-lg-1">
        @include('partials/entry-author')
        @include('partials/entry-tags')

        @if (get_field('website'))
          <div class="light">{{pll__('Hjemmeside')}}</div>
          <a class="d-block" target="_blank" href="{{the_field('website')}}">{{the_field('website')}}</a>
        @endif
      </div>
    </div>
  </div>
</article>

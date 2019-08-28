<section class="module module-content">
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
        <div class="entry-content mb-5">
          @php the_content() @endphp
        </div>
      </div>
    </div>
  </div>
</section>

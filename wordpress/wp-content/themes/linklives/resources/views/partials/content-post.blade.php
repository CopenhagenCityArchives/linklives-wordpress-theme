<a {{ post_class($classes . ' post-type') }} href="{{ get_the_permalink() }}">
  <article class="d-flex align-items-stretch">
    @if ( has_post_thumbnail() )
      <img class="thumbnail" alt="{{get_the_title()}}" title="{{get_post(get_post_thumbnail_id())->post_excerpt}}" src="{{the_post_thumbnail_url('thumbnail-image-x1')}}" srcset="{{the_post_thumbnail_url('thumbnail-image-x2')}} 2x"/>
    @endif
    <div class="content">

      <time datetime="{{ get_post_time('c') }}">{{ get_the_date(pll__( 'j. M Y' )) }}</time>
      <header>
        <h5>{{ get_the_title() }}</h5>
      </header>
      <p>{{ get_the_excerpt() }}</p>

      @php $tags = get_the_tags() @endphp

      @if ($tags)
        <div class="light">
          @foreach($tags as $key => $tag)
            {{ $key+1 == count($tags) ? $tag->name : $tag->name . ', ' }}
          @endforeach
        </div>
      @endif
      @include('components.icon', ['icon' => 'arrow-right', 'class' => 'right'])
    </div>
  </article>
</a>

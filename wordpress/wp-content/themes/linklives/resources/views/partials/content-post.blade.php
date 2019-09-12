<a {{ post_class($classes . ' post-type') }} href="{{ get_the_permalink() }}">
  <article class="d-flex align-items-stretch" aria-label="{{ pll__('Nyhed') . ' – ' . get_the_title()}}">
    @if ( has_post_thumbnail() )
      @include('components.thumbnail', ['size' => 'thumbnail-image-x1'])
    @endif
    <div class="content">

      <time datetime="{{ get_post_time('c') }}">{{ get_the_date(pll__( 'j. M Y' )) }}</time>
      <header>
        <h5>{{ get_the_title() }}</h5>
      </header>
      <p>{{ implode(' ', array_slice(explode(' ', get_field('lead') . ' ' . get_the_excerpt()), 0, 20)) . '…' }}</p>

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

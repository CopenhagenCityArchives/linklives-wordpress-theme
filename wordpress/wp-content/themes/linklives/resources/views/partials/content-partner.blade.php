<div {{ post_class($classes . ' post-type') }} id="{{ get_post_field( 'post_name' ) }}">
  <article>
    @include('components.thumbnail')

    <header>
      <h4>{{ get_the_title() }}</h4>
    </header>

    @php the_content() @endphp

    @php $tags = get_the_tags() @endphp

    @if ($tags)
      <div class="light">
        @foreach($tags as $key => $tag)
          {{ $key+1 == count($tags) ? $tag->name : $tag->name . ', ' }}
        @endforeach
      </div>
    @endif

    @if (get_field('website'))
      <a href="{{the_field('website')}}" target="_blank" class="btn mt-3">{{ pll__( 'Besøg hjemmeside' ) }} @include('components.icon', ['icon' => 'arrow-right', 'class' => 'right'])</a>
    @endif
  </article>
</div>

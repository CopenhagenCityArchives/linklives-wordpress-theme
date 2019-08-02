@php
  $tags = get_tags(array(
    'orderby' => 'count',
    'order' => 'DESC'
  ))
@endphp

@if ($tags)
  <div class="tags-filter">
    <div class="container-fluid">

      <button class="btn btn-outline-secondary float-right tags-filter-close">{{ pll__('Luk') }} @include('components.icon', ['icon' => 'x'])</button>

      <div class="d-md-flex">
        <div class="breadcrumbs">
          <div class="link">{{ pll__('Nyheder') }}</div>
          <ul class="current list-unstyled">
            @foreach($tags as $tag)
              <li>
                <a class="d-flex align-items-center" href="{{get_tag_link($tag->term_id)}}">
                  <h1 class="display-4">{{$tag->name}}</h1>
                  <p>{{$tag->count == 1 ? $tag->count . ' ' . pll__('nyhed') : $tag->count . ' ' . pll__('nyheder') }}</p>
                </a>
              </li>
            @endforeach
          </ul>
        </div>
      </div>

    </div>
  </div>
@endif

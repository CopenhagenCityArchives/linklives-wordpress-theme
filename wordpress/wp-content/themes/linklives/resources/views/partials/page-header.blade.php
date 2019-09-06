@php
  $index = !is_front_page() && is_home() || is_tag();
  $lead = $index ? false : get_field('lead');
@endphp

<div class="module page-header">
  <div class="container-fluid">
    <div class="row">
      <div class="{{$lead ? 'col-lg-6 col-xl-3' : 'col-12'}}">
        @if($index)
          <button class="btn btn-outline-secondary float-right tags-filter-open">{{ pll__('Vælg emne') }} @include('components.icon', ['icon' => 'chevron-down'])</button>
        @endif

        @php $parent = App::parentPage() @endphp

        @if ( $parent )
          <div class="breadcrumbs">
            <a class="link" href="{{ $parent['url'] }}">{{ $parent['title'] }}</a>

            <h1 class="current display-4">{{ App::title() }}</h1>

            @if(is_tag())
              <a class="btn btn-icon btn-outline-secondary" href="{{ $parent['url'] }}">@include('components.icon', ['icon' => 'x'])</a>
            @endif
          </div>
        @elseif (is_singular('medlem'))
          <div class="d-flex align-items-center">
            @include('components.profile-image', ['id' => get_the_ID(), 'class' => 'd-inline mr-4'])
            <h1 class="display-4">{{ App::title() }}</h1>
          </div>
        @else
          <h1 class="display-4">{{ App::title() }}</h1>
        @endif

      </div>

      @if( $lead )
        <div class="col-lg-6">
          <p class="lead">
            {{ $lead }}
          </p>
        </div>
      @endif
    </div>
  </div>
</div>

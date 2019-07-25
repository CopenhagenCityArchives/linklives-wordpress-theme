@php $lead = get_field('lead') @endphp


<div class="module page-header">
  <div class="container-fluid">
    <div class="row">
      <div class="{{$lead ? 'col-lg-6 col-xl-4' : 'col-12'}}">
        @php $parent = App::parentPage() @endphp

        @if ( $parent )
          <div class="breadcrumbs">
            <a class="link" href="{{ $parent['url'] }}">{{ $parent['title'] }}</a>
          </div>
        @endif

        <h1 class="display-4">{{ App::title() }}</h1>

        @if(is_tag())
          <a class="btn btn-icon btn-outline-secondary" href="{{ $parent['url'] }}">@include('components.icon', ['icon' => 'x'])</a>
        @endif

        @includeWhen(( !is_front_page() && is_home() ) || is_tag(), 'partials.tags-filter')

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

@extends('layouts.app')

@section('content')
  @include('partials.page-header')

  <section class="module theme-yellow">
    <div class="container-fluid">
      <div class="entry-content">
        @php echo get_field('404_text', 'options') @endphp
      </div>
    </div>
  </section>
@endsection

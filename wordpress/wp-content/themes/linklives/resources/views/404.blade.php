@extends('layouts.app')

@section('content')
  @include('partials.page-header')

  <section class="module">
    <div class="container-fluid">
      @if (!have_posts())
        <div class="alert alert-warning">
          {{ pll__( 'Siden eksisterer ikke' ) }}
        </div>
        {!! get_search_form(false) !!}
      @endif
    </div>
  </section>
@endsection

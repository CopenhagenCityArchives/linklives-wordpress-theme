@php $contact_options = get_sub_field('modules_contact_options') @endphp

<section class="module module-contact">
  <div class="container-fluid">

    <header class="d-flex align-content-center">
      <h1>{{ get_sub_field('modules_contact_headline') ? get_sub_field('modules_contact_headline') : pll__( 'Nyheder' )}}</h1>
      <h2 class="handwritten">{{ get_sub_field('modules_contact_handwriting') ? get_sub_field('modules_contact_handwriting') : pll__( 'The latest' )}}</h2>
    </header>

    @if( have_rows('modules_contact_options') )

      @php $col_count = 12/count($contact_options) @endphp

      <div class="row row-eq-height">
        @while ( have_rows('modules_contact_options') )
          @php the_row() @endphp
          <div class="col-lg-{{$col_count}}">
            <div class="contact-option">
              <h4>{{ get_sub_field('modules_contact_options_headline') }}</h4>
              <p>{{ get_sub_field('modules_contact_options_body') }}</p>
            </div>
            <a class="btn btn-primary" href="{{ get_sub_field('modules_contact_options_url') }}">{{ get_sub_field('modules_contact_options_btn') }} @include('components.icon', ['icon' => 'arrow-right', 'class' => 'right'])</a>
          </div>
        @endwhile
      </div>

    @endif
  </div>
</section>

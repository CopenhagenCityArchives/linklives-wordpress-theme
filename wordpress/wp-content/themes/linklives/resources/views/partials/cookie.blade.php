@if (get_field('cookie_copy', 'options') && get_field('cookie_btn', 'options'))
  <section class="module full-width cookie">
    <div class="container-fluid">
      <div class="d-flex flex-column flex-lg-row align-items-center">
        <div class="icon-wrapper">
          @include('components.icon', ['icon' => 'check-circle', 'class' => ''])
        </div>
        <div>
          @php the_field('cookie_copy', 'options') @endphp
        </div>
        <button id="accept" class="btn btn-primary flex-grow-1">{{ get_field('cookie_btn', 'options') }}</button>
      </div>
    </div>
  </section>
@endif

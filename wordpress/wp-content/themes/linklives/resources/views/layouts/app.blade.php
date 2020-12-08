<!doctype html>
<html {!! get_language_attributes() !!}>
  @include('partials.head')
  <body @php body_class() @endphp>
    @php do_action('get_header') @endphp
    @include('partials.header')
    <div class="wrap" role="document" id="{{ pll__('indhold') }}">
      <main class="main">
        @if(!post_password_required())
          @yield('content')
        @else
          @include('partials.page-header')

          <section class="module">
            <div class="container-fluid">
              <div class="row">
                <div class="col-sm-10 offset-sm-1 col-lg-8 offset-lg-2 col-xl-6 offset-xl-3">
                  <div class="entry-content mb-5">
                    {!! get_the_password_form() !!}
                  </div>
                </div>
              </div>
            </div>
          </section>
        @endif
      </main>
      @if (App\display_sidebar())
        <aside class="sidebar">
          @include('partials.sidebar')
        </aside>
      @endif
    </div>
    @php do_action('get_footer') @endphp
    @include('partials.footer')
    @php wp_footer() @endphp
  </body>
</html>

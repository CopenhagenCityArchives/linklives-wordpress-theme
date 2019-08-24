<footer class="module full-width">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6 col-lg-4 order-lg-2">
        <h5>Links</h5>
        @if (has_nav_menu('footer_navigation'))
          {!! wp_nav_menu(['walker' => new Sub_Menu_Wrap(), 'items_wrap' => '<ul class="list-unstyled">%3$s</ul>', 'container'=> false, 'theme_location' => 'footer_navigation', 'menu_class' => 'menu-item menu-primary']) !!}
        @endif
      </div>
      <div class="col-md-6 col-lg-3 order-lg-3">
        <h5>Nyhedsbrev</h5>
        <!-- BEGYND: HTML-formular  -->
        <form action="https://testdette.uxmail.io/handlers/post/" method="post">

          <input type="hidden" name="action" value="subscribe" />
          <input type="hidden" name="lists" value="57246" />

          <div class="form-group">
            <label for="name_id">Navn</label>
            <input type="text" class="form-control form-control-sm" name="name" id="name_id" placeholder="Navn" />
          </div>

          <div class="form-group">
            <label for="email_address_id">E-mail</label>
            <input type="email" class="form-control form-control-sm" name="email_address" id="email_address_id" placeholder="E-mail" />
          </div>

          <input type="submit" class="btn btn-primary" value="Tilmeld" />

        </form>
        <!-- AFSLUT: HTML-formular  -->

      </div>

      <div class="col-lg-4 order-lg-1 text-center text-lg-left">
        <a class="brand" href="{{ pll_home_url() }}"><img alt="{{ get_bloginfo('name', 'display') }}" src="@asset('images/link-lives.svg')"></a>
        <p class="mt-3 text-muted"><small>Ophavsret © {{ date('Y') }} Link-Lives. Alle rettigheder forbeholdes.</small></p>
      </div>
    </div>
  </div>
</footer>

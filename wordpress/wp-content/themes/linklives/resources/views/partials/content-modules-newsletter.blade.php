<section class="module module-newsletter theme-{{ get_sub_field('modules_newsletter_theme') }}">
  <div class="container-fluid">

    @include('partials.modules-header', ['before' => true])

    @if(get_sub_field('modules_newsletter_type') == 'true')

      <h3>Tilmeld</h3>
      <!-- BEGYND: HTML-formular  -->
      <form action="https://testdette.uxmail.io/handlers/post/" method="post">

        <input type="hidden" name="action" value="subscribe" />
        <input type="hidden" name="lists" value="57246" />

        <p>
          <label>E-mail-adresse</label>
          <input type="text" name="email_address" id="email_address_id" />
        </p>

        <p>
          <input type="submit" value="Tilmeld" />
        </p>

      </form>
      <!-- AFSLUT: HTML-formular  -->

    @else
      <h3>Frameld</h3>

      <!-- BEGYND: HTML-formular  -->

      <form action="https://testdette.uxmail.io/handlers/post/" method="post">
        <input type="hidden" name="action" value="unsubscribe" />
        <input type="hidden" name="lists" value="57246" />

        <p>
          <label>E-mail-adresse</label>
          <input type="text" name="email_address" id="email_address_id2" />
        </p>

        <p>
          <input type="submit" value="Frameld" />
        </p>

      </form>
      <!-- AFSLUT: HTML-formular  -->
    @endif

  </div>
</section>

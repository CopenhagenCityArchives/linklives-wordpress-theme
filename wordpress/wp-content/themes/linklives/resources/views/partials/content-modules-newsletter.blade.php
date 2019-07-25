<section class="module module-grid theme-{{ get_sub_field('modules_newsletter_theme') }}">
  <div class="container-fluid">
    <header class="d-flex align-content-center">
      <h1>{{ get_sub_field('modules_newsletter_headline') ? get_sub_field('modules_newsletter_headline') : pll__( 'Nyhedsbrev' )}}</h1>
      <h2 class="handwritten">{{ get_sub_field('modules_newsletter_handwriting') ? get_sub_field('modules_newsletter_handwriting') : pll__( 'følg med' )}}</h2>
    </header>

    @if(get_sub_field('modules_newsletter_type') == 'true')

      <h3>Tilmeld</h3>
      <!-- BEGYND: HTML-formular  -->
      <form action="https://testdette.uxmail.io/handlers/post/" method="post">

        <input type="hidden" name="action" value="subscribe" />
        <input type="hidden" name="lists" value="57246" />

        <p>
          <label for="email_address_id">E-mail-adresse</label>
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
          <label for="email_address_id">E-mail-adresse</label>
          <input type="text" name="email_address" id="email_address_id" />
        </p>

        <p>
          <input type="submit" value="Frameld" />
        </p>

      </form>
      <!-- AFSLUT: HTML-formular  -->
    @endif

  </div>
</section>

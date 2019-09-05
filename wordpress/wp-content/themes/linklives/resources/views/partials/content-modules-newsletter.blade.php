<section class="module module-newsletter theme-{{ get_sub_field('modules_newsletter_theme') }}">
  <div class="container-fluid">

    @include('partials.modules-header', ['before' => true])

    @if(get_sub_field('modules_newsletter_type') == 'true')

      <h3>Tilmeld</h3>
¨
      <form action="https://link-lives.uxmail.io/handlers/post/" method="post">

        <input type="hidden" name="action" value="subscribe" />
        <input type="hidden" name="lists" value="59269" />

        <p>
          <label for="email_address_id">E-mail-adresse</label>
          <input type="text" name="email_address" id="email_address_id" />
        </p>

        <p>
          <label for="data_Navn_id">Navn</label>
          <input type="text" name="data_Navn" id="data_Navn_id" />
        </p>

        <p>
          <input type="submit" value="Tilmeld" />
        </p>

        <input type="hidden" name="succes_url" value="https://www.link-lives.dk/du-er-nu-tilmeldt-nyhedsbrevet"/>
        <input type="hidden" name="failure_url" value="https://www.link-lives.dk/noget-gik-galt"/>

      </form>

    @else
      <h3>Frameld</h3>

      <form action="https://link-lives.uxmail.io/handlers/post/" method="post">
        <input type="hidden" name="action" value="unsubscribe" />
        <input type="hidden" name="lists" value="59269" />

        <p>
          <label for="email_address_id">E-mail-adresse</label>
          <input type="text" name="email_address" id="email_address_id" />
        </p>

        <p>
          <input type="submit" value="Frameld" />
        </p>

      <input type="hidden" name="succes_url" value="https://www.link-lives.dk/du-er-nu-frameldt-nyhedsbrevet/"/>
      <input type="hidden" name="failure_url" value="https://www.link-lives.dk/noget-gik-galt"/>

      </form>

    @endif

  </div>
</section>

<section class="module module-newsletter theme-{{ get_sub_field('modules_newsletter_theme') }}">
  <div class="container-fluid">

    @include('partials.modules-header', ['before' => true])

    <div class="row">
      <div class="col-md-6 col-xl-4">
        @if(get_sub_field('modules_newsletter_type') == 'true')

          <h4>{{ pll__('Tilmeld') }}</h4>

          <form action="https://link-lives.uxmail.io/handlers/post/" method="post">

            <input type="hidden" name="action" value="subscribe" />
            <input type="hidden" name="lists" value="59269" />

            <div class="form-group">
              <label for="email_address_id">{{ pll__('Email') }}</label>
              <input type="email" class="form-control" name="email_address" id="email_address_id" placeholder="{{ pll__('Skriv din email') }}" required>
            </div>

            <div class="form-group">
              <label for="data_Navn_id">{{ pll__('Navn') }}</label>
              <input type="text" class="form-control" name="data_Navn" id="data_Navn_id" placeholder="{{ pll__('Skriv dit navn') }}" required>
            </div>

            <input class="btn btn-primary mt-2" type="submit" value="{{ pll__('Tilmeld') }}" />

            <input type="hidden" name="succes_url" value="https://www.link-lives.dk/du-er-nu-tilmeldt-nyhedsbrevet"/>
            <input type="hidden" name="failure_url" value="https://www.link-lives.dk/noget-gik-galt"/>

          </form>

        @else
          <h4>{{ pll__('Frameld') }}</h4>

          <form action="https://link-lives.uxmail.io/handlers/post/" method="post">
            <input type="hidden" name="action" value="unsubscribe" />
            <input type="hidden" name="lists" value="59269" />

            <div class="form-group">
              <label for="email_address_unsubscribe_id">{{ pll__('Email') }}</label>
              <input type="email" class="form-control" name="email_address" id="email_address_unsubscribe_id" placeholder="{{ pll__('Skriv din email') }}" required>
            </div>

            <input class="btn btn-primary mt-2" type="submit" value="{{ pll__('Frameld') }}" />

            <input type="hidden" name="succes_url" value="https://www.link-lives.dk/du-er-nu-frameldt-nyhedsbrevet/"/>
            <input type="hidden" name="failure_url" value="https://www.link-lives.dk/noget-gik-galt"/>

          </form>

        @endif
      </div>
    </div>
  </div>
</section>

<footer class="module full-width">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6">
        @if (has_nav_menu('footer_navigation'))
          <h4>Menu</h4>
          {!! wp_nav_menu(['walker' => new Sub_Menu_Wrap(), 'container'=> false, 'theme_location' => 'footer_navigation', 'menu_class' => 'menu-item menu-primary']) !!}
        @endif
      </div>
      <div class="col-md-6">
        Footer test tekst
      </div>
    </div>
  </div>
</footer>

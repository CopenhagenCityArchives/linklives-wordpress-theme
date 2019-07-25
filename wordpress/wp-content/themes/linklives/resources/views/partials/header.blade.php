<header class="menu-top">
  <div class="container-fluid">
    <a class="brand" href="{{ home_url('/') }}"><img alt="{{ get_bloginfo('name', 'display') }}" src="@asset('images/link-lives.svg')"></a>
    <button type="button" class="btn btn-link nav-toggle float-right d-lg-none">
      <span class="hamburger"></span>
    </button>
    <nav>
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['walker' => new Sub_Menu_Wrap(), 'container'=> false, 'theme_location' => 'primary_navigation', 'menu_class' => 'menu-item menu-primary']) !!}
      @endif
      @if (has_nav_menu('secondary_navigation'))
        {!! wp_nav_menu(['container'=> false, 'theme_location' => 'secondary_navigation', 'menu_class' => 'menu-item menu-secondary']) !!}
      @endif
    </nav>
  </div>
</header>

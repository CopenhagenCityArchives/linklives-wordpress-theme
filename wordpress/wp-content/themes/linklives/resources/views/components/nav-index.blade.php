@php
  global $wp_query;
  $max_page = $wp_query->max_num_pages;
@endphp

@if ($max_page > 1)
  <nav class="nav-index mt-4">
    <div class="float-left">{{ previous_posts_link( 'Forrige side' ) }}</div>
    <div class="float-right">{{ next_posts_link( 'Næste side' ) }}</div>
    <div class="clearfix"></div>
  </nav>
@endif

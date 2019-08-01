<?php

class Sub_Menu_Wrap extends Walker_Nav_Menu {
  function start_lvl(&$output, $depth = 0, $args = array())
  {
    $indent = str_repeat("\t", $depth);
    $output .= "\n$indent<div class=\"sub-menu-wrapper\"><div class=\"container-fluid\"><div class=\"row\"><div class=\"col-lg-7\"><ul class=\"sub-menu\">\n";
  }
  function end_lvl(&$output, $depth = 0, $args = array())
  {
    $markup = '';
    $contact = get_posts(array(
      'post_type'		=> 'medlem',
      'numberposts' => 1,
      'meta_key' => 'members_menu',
      'meta_value' => '1',
      'lang' => pll_current_language()
    ));

    if( $contact ):
      $markup .= '<div class="col-lg-5"><div class="contact"><h4 class="mb-3">' . pll__( 'Kontakt' ) . '</h4>';
	    foreach( $contact as $c ):
        $markup .= '<div class="d-flex">';
        if ( has_post_thumbnail($c->ID)) :
          $markup .= '<img width="64px" height="64px" class="rounded-circle mr-3" src="' . get_the_post_thumbnail_url($c->ID, 'profile-image-x1') . '" srcset="' . get_the_post_thumbnail_url($c->ID, 'profile-image-x2') . ' 2x"/>';
        endif;
        $markup .= '<div><h5>' . get_the_title($c->ID) . '</h5>';
        $markup .= '<a class="d-block" href="tel:' . get_field('members_phone', $c->ID) . '" target="_blank">' . get_field('members_phone', $c->ID) . '</a>';
        $markup .= '<a class="d-block" href="mailto:' . get_field('members_email', $c->ID) . '" target="_blank">' . get_field('members_email', $c->ID) . '</a></div>';

      endforeach;

      $markup .= '</div></div></div>';

    endif;

    $indent = str_repeat("\t", $depth);
    $output .= "$indent</ul></div>$markup</div></div>\n";
  }
}

add_action('acf/init', function() {

	if( function_exists('acf_register_block') ) {

		acf_register_block(array(
			'name'				=> 'infobox',
			'title'				=> pll__('Infoboks'),
			'description'		=> pll__('En infoboks i højreside af indholdssider.'),
			'render_callback'	=> 'block_infobox',
			'category'			=> 'formatting',
			'icon'				=> 'info',
			'keywords'			=> array( 'infobox', 'indhold' ),
		));

    acf_register_block(array(
      'name'				=> 'lead',
      'title'				=> pll__('Underrubrik'),
      'description'		=> pll__('En underrubrik bruges under overskriften som indledning'),
      'render_callback'	=> 'block_lead',
      'category'			=> 'formatting',
      'icon'				=> 'editor-alignleft',
      'keywords'			=> array( 'lead', 'underrubrik' ),
    ));
	}
});

function block_lead( $block ) {
  echo '<p class="lead">' . get_field('block_lead') . '</p>';
}

function block_infobox( $block ) {
  echo '<aside class="infobox">' . get_field('block_infobox') . '</aside>';
}

add_filter('next_posts_link_attributes', 'posts_link_attributes');
add_filter('previous_posts_link_attributes', 'posts_link_attributes');

function posts_link_attributes() {
    return 'class="btn btn-secondary"';
}

// Move Yoast to bottom
add_filter( 'wpseo_metabox_prio', function () {
	return 'low';
});

// function loadmore_ajax_handler(){
//
// 	$args = json_decode( stripslashes( $_POST['query'] ), true );
// 	$args['paged'] = $_POST['page'] + 1; // we need next page to be loaded
// 	$args['post_status'] = 'publish';
//
// 	query_posts( $args );
//
// 	if( have_posts() ) :
// 		while( have_posts() ): the_post();
// 		endwhile;
//
// 	endif;
// 	die;
// }
//
// add_action('wp_ajax_loadmore', 'loadmore_ajax_handler'); // wp_ajax_{action}
// add_action('wp_ajax_nopriv_loadmore', 'loadmore_ajax_handler'); // wp_ajax_nopriv_{action}

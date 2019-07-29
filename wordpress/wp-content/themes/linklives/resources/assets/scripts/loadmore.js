jQuery(function($){
  console.log('loaded loadmore.js')
	$('.load-more').click(function(){
    console.log('btn clicked')

		var button = $(this),
		    data = {
			'action': 'loadmore',
			'query': loadmore.posts, // that's how we get params from wp_localize_script() function
			'page' : loadmore.current_page
		};

    console.log(loadmore.posts)

		$.ajax({ // you can also use $.post here
			url : loadmore.ajaxurl, // AJAX handler
			data : data,
			type : 'POST',
			beforeSend : function ( xhr ) {
				button.text('Loading...'); // change the button text, you can also add a preloader image
			},
			success : function( data ){
				if( data ) {
					button.text( 'More posts' ).prev().before(data); // insert new posts
					loadmore.current_page++;

					if ( loadmore.current_page == loadmore.max_page )
						button.remove(); // if last page, remove the button

					// you can also fire the "post-load" event here if you use a plugin that requires it
					// $( document.body ).trigger( 'post-load' );
				} else {
					button.remove(); // if no data, remove the button as well
				}
			}, error : function() {
        console.log('error')
      }
		});
	});
});

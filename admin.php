<?php /* admin page */

if ( is_admin() ){
	/* Call the html code */
	add_action('admin_menu', 'tt_subscribe_admin_menu');
	add_action('admin_init', 'tt_subscribe_data_init');
	
	function tt_subscribe_admin_menu() {
		add_options_page('TT-Subscribe', 'TT-Subscribe', 'administrator', 'tt-subscribe', 'tt_subscribe_html_page');
	}
}	

function tt_subscribe_data_init() { // whitelist options
	register_setting( 'tt_subscribe_data', 'tt-subscribe-facebook-url' );
	register_setting( 'tt_subscribe_data', 'tt-subscribe-facebook-txt' );
	register_setting( 'tt_subscribe_data', 'tt-subscribe-twitter-url' );
	register_setting( 'tt_subscribe_data', 'tt-subscribe-twitter-txt' );
	register_setting( 'tt_subscribe_data', 'tt-subscribe-feedburner-url' );
	register_setting( 'tt_subscribe_data', 'tt-subscribe-feedburner-txt' );
	register_setting( 'tt_subscribe_data', 'tt-subscribe-background' );
	register_setting( 'tt_subscribe_data', 'tt-subscribe-width' );
}


function tt_subscribe_html_page() {
    wp_enqueue_style('admin.css', TT_SUBSCRIBE_URLPATH.'styles/admin.css');	
?>
<div id="tt-subscribe-admin">
    <h1>TT-Subscribe Admin Panel</h1>
    
    <form method="post" action="options.php">
		<?php settings_fields( 'tt_subscribe_data' ); ?>
      

        <h2>Look and Feel:</h2>
        <div><label for="tt-subscribe-background">Background Color</label></div>
        <input name="tt-subscribe-background" type="text" id="tt-subscribe-background" value="<?php echo get_option('tt-subscribe-background'); ?>" />
                    <p>(ex. 6d84b4, original background color settings)</p>
        <div><label for="tt-subscribe-width">Width</label></div>
        <input name="tt-subscribe-width" type="text" id="tt-subscribe-width" value="<?php echo get_option('tt-subscribe-width'); ?>" />
                    <p>(ex. 280, original width settings)</p>


        <h2>Facebook:</h2>
        <div><label for="tt-subscribe-facebook-url">Facebook URL</label></div>
        <input name="tt-subscribe-facebook-url" type="text" id="tt-subscribe-facebook-url" value="<?php echo get_option('tt-subscribe-facebook-url'); ?>" />
                    <p>(ex. http://www.facebook.com/thesabeltuto)</p>
        <div><label for="tt-subscribe-facebook-txt">Facebook Text</label></div>
        <input name="tt-subscribe-facebook-txt" type="text" id="tt-subscribe-facebook-txt" value="<?php echo get_option('tt-subscribe-facebook-txt'); ?>" />
                    <p>(ex. Subscribe to my Facebook Page!)</p>


        <h2>Twitter:</h2>
        <div><label for="tt-subscribe-twitter-url">Twitter URL</label></div>
        <input name="tt-subscribe-twitter-url" type="text" id="tt-subscribe-twitter-url" value="<?php echo get_option('tt-subscribe-twitter-url'); ?>" />
                    <p>(ex. http://www.twitter.com/thesabeltuto)</p>
        <div><label for="tt-subscribe-twitter-txt">Twitter Text</label></div>
        <input name="tt-subscribe-twitter-txt" type="text" id="tt-subscribe-twitter-txt" value="<?php echo get_option('tt-subscribe-twitter-txt'); ?>" />
                    <p>(ex. Follow me on Twitter!)</p>



        <h2>Feedburner:</h2>
        <div><label for="tt-subscribe-feedburner-url">Feedburner URL</label></div>
        <input name="tt-subscribe-feedburner-url" type="text" id="tt-subscribe-feedburner-url" value="<?php echo get_option('tt-subscribe-feedburner-url'); ?>" />
                    <p>(ex. http://www.facebook.com/thesabeltuto)</p>
        <div><label for="tt-subscribe-feedburner-txt">Feedburner Text</label></div>
        <input name="tt-subscribe-feedburner-txt" type="text" id="tt-subscribe-feedburner-txt" value="<?php echo get_option('tt-subscribe-feedburner-txt'); ?>" />
                    <p>(ex. Get Updated! Bookmark this now!)</p>
		<br />
        <input type="submit" value="<?php _e('Save Changes') ?>" id="tt-subscribe-submit" />
    
    </form>
    
    
    <div id="tt-subscribe-admin-footer">Plugin created by <a href="http://thesabeltuto.blogspot.com">Thesabel Tuto</a> | Plugin site at <a href="http://ttplugins.wordpress.com/tt-subscribe/">TT Plugins</a></div>

</div>

<?php
}
?>
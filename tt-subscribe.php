<?php
/*
	Plugin Name: TT - Subscribe
	Plugin URI: http://ttplugins.wordpress.com/tt-subscribe
	Description: This plugin is a simplified subscription box that is totally customizable. It currently includes facebook, twitter and feedburner. Other social media links will be included soon. Created by Thesabel Tuto.
	Version: 1.0
	Author: Thesabel Tuto
	Author URI: http://thesabeltuto.blogspot.com

	Copyright 2013  THESABEL UY TUTO, CSNA, MBA  (email : thesabeltuto@gmail.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

define('TT_SUBSCRIBE_VERSION', '1.0');

// Define paths and variables
define('TT_SUBSCRIBE_PATH', dirname(__FILE__));
define('TT_SUBSCRIBE_FOLDER', basename(dirname(__FILE__)));
define('TT_SUBSCRIBE_ABSPATH', trailingslashit(str_replace('\\','/', WP_PLUGIN_DIR.'/'.TT_SUBSCRIBE_FOLDER)));
define('TT_SUBSCRIBE_URLPATH', trailingslashit(plugins_url(TT_SUBSCRIBE_FOLDER)));

require_once TT_SUBSCRIBE_PATH . '/install.php';

if ( is_admin() )
	require_once TT_SUBSCRIBE_PATH . '/admin.php';
	

function tt_subscribe() {
	wp_enqueue_script('jquery.css', 'http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js');
    wp_enqueue_script('script.js', TT_SUBSCRIBE_URLPATH.'scripts/script.js');
    wp_enqueue_style('style.css', TT_SUBSCRIBE_URLPATH.'styles/style.css');

?>


	<style>
	div#tt-subscribe, #tt-subscribe-icons { width: <?php echo get_option('tt-subscribe-width'); ?>px!important; }
    #tt-subscribe-header { background: #<?php echo get_option('tt-subscribe-background'); ?>!important; }
	#tt-subscribe-area-facebook, #tt-subscribe-area-twitter, #tt-subscribe-area-feedburner {
		 width: <?php echo get_option('tt-subscribe-width')-20; ?>px!important;
	}
    </style>

<div id="tt-subscribe">
	<div id="tt-subscribe-header">
        <h1><span id="h1up">GET OUR TOP STORIES</span><br />FOLLOW <?php bloginfo( $show ); ?></h1>
        <div id="tt-subscribe-icons">
            <div id="tt-subscribe-facebook"></div>
            <div id="tt-subscribe-twitter"></div>
            <div id="tt-subscribe-feedburner"></div>
        </div>
    </div>
    <div id="tt-subscribe-area">
        <div id="tt-subscribe-area-facebook">
            <div id="fb-root"></div>
            <script>(function(d, s, id) {
              var js, fjs = d.getElementsByTagName(s)[0];
              if (d.getElementById(id)) return;
              js = d.createElement(s); js.id = id;
              js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
              fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));</script>
            <div class="fb-like" data-href="<?php echo get_option('tt-subscribe-facebook-url'); ?>" data-send="false" data-width="<?php echo get_option('tt-subscribe-width')-20; ?>" data-show-faces="true" data-font="arial"></div>
        	<a href="<?php echo get_option('tt-subscribe-facebook-url'); ?>" alt="<?php echo get_option('tt-subscribe-facebook-txt'); ?>"><?php echo get_option('tt-subscribe-facebook-txt'); ?></a>
        </div>
        <div id="tt-subscribe-area-twitter">
            <a href="<?php echo get_option('tt-subscribe-twitter-url'); ?>" class="twitter-follow-button" data-show-count="true" data-lang="en"><?php echo get_option('tt-subscribe-twitter-txt'); ?></a>
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>        
        	<a href="<?php echo get_option('tt-subscribe-twitter-url'); ?>" alt="<?php echo get_option('tt-subscribe-twitter-txt'); ?>"><?php echo get_option('tt-subscribe-twitter-txt'); ?></a>
        </div>
        <div id="tt-subscribe-area-feedburner">
     	   <a href="<?php echo get_option('tt-subscribe-feedburner-url'); ?>" alt="<?php echo get_option('tt-subscribe-feedburner-txt'); ?>"><?php echo get_option('tt-subscribe-feedburner-txt'); ?></a>
        </div>

    </div>
</div>

<?php
}
?>






/* 	Plugin Name: TT - Subscribe
	Plugin URI: http://ttplugins.wordpress.com/tt-subscribe
	Description: This plugin is a simplified subscription box that is totally customizable. It currently includes facebook, twitter and feedburner. Other social media links will be included soon. Created by Thesabel Tuto.
	Version: 1.0
	Author: THESABEL UY TUTO, CSNA, MBA  (email : thesabeltuto@gmail.com)
	Author URI: http://thesabeltuto.blogspot.com
*/

$(document).ready(function() {
	$('div#tt-subscribe-facebook').addClass('active');
    $('div#tt-subscribe-facebook').click(function(){
			$('div#tt-subscribe-area-facebook').show();
			$('div#tt-subscribe-area-twitter').hide();
			$('div#tt-subscribe-area-feedburner').hide();
			$('div#tt-subscribe-facebook').addClass('active');
			$('div#tt-subscribe-twitter').removeClass('active');
			$('div#tt-subscribe-feedburner').removeClass('active');
		});
    $('div#tt-subscribe-twitter').click(function(){
			$('div#tt-subscribe-area-facebook').hide();
			$('div#tt-subscribe-area-twitter').show();
			$('div#tt-subscribe-area-feedburner').hide();
			$('div#tt-subscribe-facebook').removeClass('active');
			$('div#tt-subscribe-twitter').addClass('active');
			$('div#tt-subscribe-feedburner').removeClass('active');
		});
    $('div#tt-subscribe-feedburner').click(function(){
			$('div#tt-subscribe-area-facebook').hide();
			$('div#tt-subscribe-area-twitter').hide();
			$('div#tt-subscribe-area-feedburner').show();
			$('div#tt-subscribe-facebook').removeClass('active');
			$('div#tt-subscribe-twitter').removeClass('active');
			$('div#tt-subscribe-feedburner').addClass('active');
		});
});

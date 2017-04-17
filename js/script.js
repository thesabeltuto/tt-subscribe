/*	script.js */

jQuery(document).ready(function() {
	
	//hide all
	jQuery('div.tt-susbscribe-iconselect').each(function(index, obj) {
		jQuery(this).show();
		jQuery(this).children().last().hide();
	});
	jQuery('div.tt-susbscribe-areaselect').each(function(index, obj) {
		jQuery(this).hide();
	});
	
	//show first for each widget on site
	jQuery('div#tt-subscribe').each(function(index, obj) {
		//area
		jQuery(this).children().next().children().first().show();
		
		//icons 
		jQuery(this).children().children().next().children().first().addClass('tt-susbscribe-active');
		jQuery('div.tt-susbscribe-active').each(function(index, obj) {
			jQuery(this).children().hide();
			jQuery(this).children().last().show();
		});
	});
	
	//on clicking icons
	jQuery('div.tt-susbscribe-iconselect').each(function(index,obj) {
		jQuery(this).click(function(index, obj){
			var clicked = jQuery(this).attr('id');
			var prefix = clicked.substr(0,13);
			var suffix = clicked.substr(12);
			
			//hide all
			jQuery(this).parent('div').children('div').each(function(index,obj) {
				jQuery(this).removeClass('tt-susbscribe-active');	
				jQuery(this).children('div').first().show();
				jQuery(this).children('div').last().hide();
			});
			
			//area
			jQuery(this).parent('div').parent('div').next('div').children('div').each(function() {
				if( jQuery(this).attr('id') == prefix+'area'+suffix ) {
					jQuery(this).show();
					//force google+ iframe
					if(clicked=="tt-subscribe-google")
						jQuery('div#'+prefix+'area'+suffix+' div').show();				
				} else { 
					jQuery(this).hide();
				}
			});
							
			//icons
			jQuery(this).each(function(){
				if( jQuery(this).attr('id') == clicked ) {	
					jQuery(this).addClass('tt-susbscribe-active');
				}
			});
						
//			console.log('clicked: '+clicked);
//			console.log('prefix: '+prefix);
//			console.log('suffix: '+suffix);
			
		});
	});
		
	jQuery('div.tt-susbscribe-iconselect').mouseover(function(index, obj){
			if(jQuery(this).hasClass('tt-susbscribe-active')){
				jQuery(this).children().first().hide();
				jQuery(this).children().last().show();
			} else {
				jQuery(this).children().first().hide();
				jQuery(this).children().last().show();
			}
   });
	
	jQuery('div.tt-susbscribe-iconselect').mouseout(function(index, obj){
			if(jQuery(this).hasClass('tt-susbscribe-active')){
				jQuery(this).children().first().hide();
				jQuery(this).children().last().show();
			} else {
				jQuery(this).children().first().show();
				jQuery(this).children().last().hide();
			}
	});
});
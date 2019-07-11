
	//jQuery.noConflict();

	jQuery(document).ready(function(){

		jQuery('.cordion h3').click(function(){
			jQuery('.cordion li').removeClass('on');
			jQuery(this).parents('li').addClass('on');
		});


		jQuery('.btn-content-off').click(function(){
			jQuery(jQuery(this).attr('rel')).toggle();
		});


		jQuery('.btn-tab').click(function(){
			jQuery('.tab-item').removeClass('on').addClass('off');
			jQuery('.btn-tab').removeClass('on');
			

			jQuery('#'+(jQuery(this).attr('rel'))).removeClass('off').addClass('on');
			jQuery(this).addClass('on');
		});

	});	


	//jQuery.noConflict();

	jQuery(document).ready(function(){

		jQuery('.cordion h3').click(function(){ 
			if(jQuery(this).parents('li').hasClass('on')){
				jQuery('.cordion li').removeClass('on');
			}else{
				jQuery('.cordion li').removeClass('on');
				jQuery(this).parents('li').addClass('on');
			}
		});

		jQuery('.btn-content-off').click(function(){
			if(jQuery(this).hasClass('on')){
				jQuery(this).removeClass('on');
				jQuery('i',this).removeClass('fa-minus');
				jQuery('i',this).addClass('fa-chevron-down');
				jQuery(jQuery(this).attr('rel')).css('display','none');
			}else{
				jQuery(this).addClass('on');
				jQuery('i',this).removeClass('fa-chevron-down');
				jQuery('i',this).addClass('fa-minus');
				jQuery(jQuery(this).attr('rel')).css('display','block');
			}
		});


		jQuery('.btn-tab').click(function(){
			if(jQuery(this).hasClass('on')){
				jQuery('.tab-item').removeClass('on').addClass('off');
				jQuery('.btn-tab').removeClass('on');
			}else{
				jQuery('.tab-item').removeClass('on').addClass('off');
				jQuery('.btn-tab').removeClass('on');
				

				jQuery('#'+(jQuery(this).attr('rel'))).removeClass('off').addClass('on');
				jQuery(this).addClass('on');
			}
		});

	});	

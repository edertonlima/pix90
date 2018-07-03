<!DOCTYPE html>
<html lang="pt-br">
<head>

<title></title>

<!-- CSS -->
<link rel="stylesheet" type="text/css" href="assets/css/style.css" media="screen" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

<!-- JQUERY -->
<script type="text/javascript" src="/assets/js/jquery.min.js"></script>
<script type="text/javascript" src="/assets/js/bootstrap.min.js"></script>


<script type="text/javascript">
	jQuery.noConflict();

	jQuery(document).ready(function(){

		jQuery('.menu-mobile').click(function(){
			if(jQuery(this).hasClass('active')){
				//jQuery('.nav').css('top','-100vh');
				jQuery(this).removeClass('active');
				jQuery('.header').removeClass('active');
			}else{
				//jQuery('.nav').css('top','0px');
				jQuery(this).addClass('active');
				jQuery('.header').addClass('active');
			}
		});

		if(jQuery('body').height() <= jQuery(window).height()){
			jQuery('.footer').css({position: 'absolute', bottom: '0px'});
		}else{
			jQuery('.footer').css({position: 'relative'});
		}

		scroll_body = jQuery(window).scrollTop();
		if(scroll_body > 400){
			jQuery('.header').addClass('scroll_menu');
		}
	});	

	jQuery(window).resize(function(){
		jQuery('.menu-mobile').removeClass('active');
		jQuery('.header').removeClass('active');
		//jQuery('.nav').css('top','-100vh');
		if(jQuery('body').height() <= jQuery(window).height()){
			jQuery('.footer').css({position: 'absolute', bottom: '0px'});
		}else{
			jQuery('.footer').css({position: 'relative'});
		}
	});

	jQuery(window).scroll(function(){
		scroll_body = jQuery(window).scrollTop();
		if(scroll_body > 400){
			jQuery('.header').addClass('scroll_menu');
		}else{
			jQuery('.header').removeClass('scroll_menu');
		}
	});
</script>

<?php /*
<!-- ZOPIM -->
<!--Start of Zendesk Chat Script-->
<script type="text/javascript">
window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
$.src="https://v2.zopim.com/?4wUPiAqqUPHLIihFTiGQt2Su4HknexxE";z.t=+new Date;$.
type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");
</script>

<!-- SUMO -->
<script src="//load.sumome.com/" data-sumo-site-id="0820f5828ba5ae1d27edd8bde6d74989a0ddbfa73cad0af4f62420486d84f071" async="async"></script>
*/ ?>

</head>
<body>

	<header class="header clear">
		<div class="container clear box-sizing">
			<h1>
				<a href="javascript:" title="">
					<img src="assets/images/logo.png" alt="">
				</a>
			</h1>

			<nav class="nav">
				<ul class="menu-principal">
					<li class="">
						<a href="javascript:" title="video">
							video
						</a>
					</li>

					<li class="">
						<a href="javascript:" title="sobre">
							sobre
						</a>
					</li>

					<li class="">
						<a href="javascript:" title="contato" class="">
							contato
						</a>
					</li>
				</ul>
			</nav>
		</div>

		<i class="fa fa-bars menu-mobile" aria-hidden="true"></i>

	</header>
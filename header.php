<!DOCTYPE html>
<html lang="pt-br">
<head>


<?php 
	$url = 'https://www.ederton.xyz/preview/pix90';
	$titulo = 'Pix90';
	$descricao = 'O QUE É O PIX90? Uma ferramenta que torna pessoas comuns em grandes vendedores dentro do MERCADO LIVRE. Faz com que as vendas gerem lucro e o(a) vendedor(a) ganhe notoriedade por ser um(a) ótimo(a) vendedor(a) entregador(a) dos pedidos no prazo.';
	$imagem = $url.'/assets/images/img-2.png';
	//$imgPage = $imagem_princ;
	$autor = 'Ederton Lima, edertton@gmail.com';
?>

<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="shortcut icon" href="<?php echo $url; ?>/assets/images/favicon.ico" type="image/x-icon" />
<link rel="icon" href="<?php echo $url; ?>/assets/images/favicon.ico" type="image/x-icon" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="content-language" content="pt" />
<meta name="rating" content="General" />
<meta name="description" content="<?php echo $descricao; ?>" />
<meta name="keywords" content="" />
<meta name="robots" content="index,follow" />
<meta name="author" content="<?php echo $autor; ?>" />
<meta name="language" content="pt-br" />
<meta name="title" content="<?php echo $titulo; ?>" />

<!-- SOCIAL META -->
<meta itemprop="name" content="<?php echo $titulo; ?>" />
<meta itemprop="description" content="<?php echo $descricao; ?>" />
<meta itemprop="image" content="<?php echo $imagem; ?>" />

<html itemscope itemtype="<?php echo $url; ?>" />
<link rel="image_src" href="<?php echo $imagem; ?>" />
<link rel="canonical" href="<?php echo $url; ?>" />

<meta property="og:type" content="website">
<meta property="og:title" content="<?php echo $titulo; ?>" />
<meta property="og:type" content="article" />
<meta property="og:description" content="<?php echo $descricao; ?>" />
<meta property="og:image" content="<?php echo $imagem; ?>" />
<meta property="og:url" content="<?php echo $url; ?>" />
<meta property="og:site_name" content="<?php echo $titulo; ?>" />
<meta property="fb:admins" content="<?php echo $autor; ?>" />
<meta property="fb:app_id" content="1205127349523474" /> 

<meta name="twitter:card" content="summary" />
<meta name="twitter:url" content="<?php echo $url; ?>" />
<meta name="twitter:title" content="<?php echo $titulo; ?>" />
<meta name="twitter:description" content="<?php echo $descricao; ?>" />
<meta name="twitter:image" content="<?php echo $imagem; ?>" />
<!-- SOCIAL META -->

<title><?php echo $titulo; ?></title>


<!-- CSS -->
<link rel="stylesheet" type="text/css" href="assets/css/style.css" media="screen" />
<link rel="stylesheet" type="text/css" href="assets/css/jquery.fancybox.min.css" media="screen" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

<!-- JQUERY -->
<script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>
<!--<script type="text/javascript" src="/assets/js/bootstrap.min.js"></script>-->


<script type="text/javascript">
	jQuery.noConflict();

	jQuery(document).ready(function(){
		jQuery('#sobre').click(function(){
			jQuery('html,body').animate({
				scrollTop: jQuery('#footer').offset().top
			}, 1000);
		});
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
						<a href="https://www.youtube.com/embed/U5Srx2a49Sc" title="video" data-fancybox>
							video
						</a>
					</li>

					<li class="">
						<a href="javascript:" title="sobre" id="sobre">
							sobre
						</a>
					</li>

					<li class="">
						<a href="javascript:" title="contato" data-fancybox data-src="#contato" class="btn-contato">
							contato
						</a>
					</li>
				</ul>
			</nav>
		</div>

		<i class="fa fa-bars menu-mobile" aria-hidden="true"></i>

	</header>
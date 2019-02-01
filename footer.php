

	<footer class="footer bg-cinza" id="footer">
		<div class="container">

			<h1>
				<a href="javascript:" title="">
					<img src="assets/images/logo.png" alt="">
				</a>
			</h1>

			<div class="info_footer">
				<strong><span>PIX90:</span> CNPJ 61.417.861/0001-79</strong><br>
				Rua Célia 1-19, sala 01, Jd. Mesquita, Bauru - SP, 17014-410<br>
				
				<a href="mailto:pix90@pix90.com.br">pix90@pix90.com.br</a>
				<span><i class="fab fa-whatsapp"></i> 14-99102-4041 / 14-3016-1039</span>

				<p class="center">Todos os direitos reservados</p>
			</div>
			
			<?php /*<div class="redes">
				<a href=""><i class="fab fa-facebook-f"></i></a>
				<a href=""><i class="fab fa-youtube"></i></a>
				<a href=""><i class="fab fa-soundcloud"></i></a>
			</div>*/ ?>
		</div>

		<i class="fas fa-angle-up" id="link-up"></i>
	</footer>

</body>
</html>

<script type="text/javascript">
	jQuery("#btn-contato").click(function(){
		jQuery('#btn-contato').html('ENVIANDO').prop( "disabled", true );
		jQuery('#contato .msg-form').removeClass('erro ok').html('');
		var nome = jQuery('#contato #nome').val();
		var email = jQuery('#contato #email').val();
		var telefone = jQuery('#contato #telefone').val();

		if(nome == ''){
			jQuery('#contato #nome').parent().addClass('erro');
		}

		if(email == ''){
			jQuery('#contato #email').parent().addClass('erro');
		}

		if(telefone == ''){
			jQuery('#contato #telefone').parent().addClass('erro');
		}

		if((nome == '') || (email == '') || (telefone == '')){
			jQuery('#contato .msg-form').html('Todos os campos são obrigatórios!');

			jQuery('#btn-contato').html('ENVIAR').prop( "disabled", false );
		}else{
			jQuery.getJSON("mail.php", { nome:nome, email:email, telefone:telefone }, function(result){		
				if(result=='ok'){
					resultado = 'Solicitação enviada com sucesso!';
					classe = 'ok';
				}else{
					resultado = result;
					classe = 'erro';
				}
				jQuery('#contato .msg-form').addClass(classe).html(resultado);
				jQuery('#contato').trigger("reset");
				jQuery('#btn-contato').html('ENVIAR').prop( "disabled", false );
			});
		}
	});

	jQuery("#btn-mensagem").click(function(){
		jQuery('#btn-mensagem').html('ENVIANDO').prop( "disabled", true );
		jQuery('#mensagem .msg-form').removeClass('erro ok').html('');
		var nome = jQuery('#mensagem #nome').val();
		var email = jQuery('#mensagem #email').val();
		var telefone = jQuery('#mensagem #telefone').val();
		var mensagem = jQuery('#mensagem #textarea').val();

		if(nome == ''){
			jQuery('#mensagem #nome').parent().addClass('erro');
		}

		if(email == ''){
			jQuery('#mensagem #email').parent().addClass('erro');
		}

		if(telefone == ''){
			jQuery('#mensagem #telefone').parent().addClass('erro');
		}

		if(mensagem == ''){
			jQuery('#mensagem #textarea').parent().addClass('erro');
		}

		if((nome == '') || (email == '') || (telefone == '') || (mensagem == '')){
			jQuery('#mensagem .msg-form').html('Todos os campos são obrigatórios!');

			jQuery('#btn-mensagem').html('ENVIAR').prop( "disabled", false );
		}else{
			jQuery.getJSON("mail.php", { nome:nome, email:email, telefone:telefone, mensagem:mensagem }, function(result){		
				if(result=='ok'){
					resultado = 'Solicitação enviada com sucesso!';
					classe = 'ok';
				}else{
					resultado = result;
					classe = 'erro';
				}
				jQuery('#mensagem .msg-form').addClass(classe).html(resultado);
				jQuery('#mensagem').trigger("reset");
				jQuery('#btn-mensagem').html('ENVIAR').prop( "disabled", false );
			});
		}
	});

	jQuery('.btn-contato').click(function(){
		jQuery('.msg-form').removeClass('erro ok').html('');
		jQuery('fieldset').removeClass('erro');
	});

	jQuery(document).ready(function(){
		jQuery('input').change(function(){
			if(jQuery(this).parent().hasClass('erro')){
				jQuery(this).parent().removeClass('erro');
			}
		});

		jQuery('textarea').change(function(){
			if(jQuery(this).parent().hasClass('erro')){
				jQuery(this).parent().removeClass('erro');
			}
		});
	})
</script>

<script type="text/javascript" src="assets/js/jquery.fancybox.min.js"></script>

<script type="text/javascript" src="assets/js/maskedinput.js"></script>
<script type="text/javascript">
	jQuery(function(jQuery){
	   jQuery(".telefone").mask("(99) 9999-9999?9");
	});
</script>


	<footer class="footer bg-cinza" id="footer">
		<div class="container">

			<h1>
				<a href="javascript:" title="">
					<img src="assets/images/logo.png" alt="">
				</a>
			</h1>

			<div class="info_footer">
				<strong><span>PIX90:</span> ALTIVO MARTINS JUNIOR ME, CNPJ 61.417.861/0001-79</strong><br>
				Rua célia 1-19, Jd Mesquita, Bauru-SP, 17014-410<br>
				<a href="mailto:pix90@pix90.com.br">pix90@pix90.com.br</a>
				<span><i class="fab fa-whatsapp"></i> (14) 99102-4041</span>
			</div>
			
			<?php /*<div class="redes">
				<a href=""><i class="fab fa-facebook-f"></i></a>
				<a href=""><i class="fab fa-youtube"></i></a>
				<a href=""><i class="fab fa-soundcloud"></i></a>
			</div>*/ ?>
		</div>
	</footer>

</body>
</html>

<script type="text/javascript">
	jQuery(".enviar").click(function(){
		jQuery('.enviar').html('ENVIANDO').prop( "disabled", true );
		jQuery('.msg-form').removeClass('erro ok').html('');
		var nome = jQuery('#nome').val();
		var email = jQuery('#email').val();
		var telefone = jQuery('#telefone').val();

		if(nome == ''){
			jQuery('#nome').parent().addClass('erro');
		}

		if(email == ''){
			jQuery('#email').parent().addClass('erro');
		}

		if(telefone == ''){
			jQuery('#telefone').parent().addClass('erro');
		}

		if((nome == '') || (email == '') || (telefone == '')){
			jQuery('.msg-form').html('Todos os campos são obrigatórios!');

			jQuery('.enviar').html('ENVIAR').prop( "disabled", false );
		}else{
			jQuery.getJSON("mail.php", { nome:nome, email:email, telefone:telefone }, function(result){		
				if(result=='ok'){
					resultado = 'Solicitação enviada com sucesso!';
					classe = 'ok';
				}else{
					resultado = result;
					classe = 'erro';
				}
				jQuery('.msg-form').addClass(classe).html(resultado);
				jQuery('#contato').trigger("reset");
				jQuery('.enviar').html('ENVIAR').prop( "disabled", false );
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
	})
</script>

<script type="text/javascript" src="assets/js/jquery.fancybox.min.js"></script>

<script type="text/javascript" src="assets/js/maskedinput.js"></script>
<script type="text/javascript">
	jQuery(function(jQuery){
	   jQuery(".telefone").mask("(99) 9999-9999?9");
	});
</script>
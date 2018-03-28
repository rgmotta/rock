<div class="barra-footer">
	<div class="container">
		<div class="row">
			<div class="redes-sociais col-md-6">
				<?php  
					if(is_active_sidebar('redes-sociais')){
						dynamic_sidebar('redes-sociais');
					}
				?>
			</div>
			<div class="telefone col-md-6">
				<h2>Whatsapp ;)</h2><a target="_blank" href="https://api.whatsapp.com/send?phone=5533-984271177&text=Me mande uma msg ;)">(33)98427-1177;)</a>
			</div>
		</div>
		<div class="row">
			<div class="copyright col-md-12">
				<?php if(is_active_sidebar('copyright')){
					dynamic_sidebar('copyright');
				} 
				?>
			</div>
		</div>
	</div>
</div>
<?php wp_footer(); ?>
</body>

</html>
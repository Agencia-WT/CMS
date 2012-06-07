<div class="row-fluid">
	<div class="hero-unit">
		<div class="row-fluid">
			<div class="span8">
			<h1>CMS v 0.1</h1>	
			<hr>
			<h4>Modulos instalados</h4>
			<hr>
			<?php $modulos = CakePlugin::loaded(); ?>
			<ol>
			<?php foreach ( $modulos as $modulo): ?>
				<li><?php echo $modulo ?></li>
			<?php endforeach ?>
			</ol>
			</div>
			<div class="span4">
				<h3>Login</h3>
				<hr>
				<?php echo $this->element('form_login') ?>
			</div>		

		</div>

		
		
	</div>
</div>
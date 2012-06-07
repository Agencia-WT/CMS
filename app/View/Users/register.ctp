<?php echo $this->Session->flash() ?>
<h2>Register</h2>
<hr>
<div class="row-fluid">
	<div class="span12">
		<?php echo $this->Form->create() ?>
		<?php echo $this->Form->textarea('editor',array('id'=> 'ckeditor')) ?>
		<?php echo $this->Form->end('Enviar') ?>
	</div>
</div>

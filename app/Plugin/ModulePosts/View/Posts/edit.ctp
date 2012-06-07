<div class="row-fluid">
	<div class="span12">
		<button class="btn btn-danger">Remover post</button>
	</div>
</div>
<hr>
<div class="row-fluid">
	<div class="span12">
		<?php echo $this->element('form_posts',array('action' => 'edit/'.$post['Post']['id'])) ?>		
	</div>
</div>

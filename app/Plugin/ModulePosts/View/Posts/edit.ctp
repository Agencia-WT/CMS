<div class="row-fluid">
	<div class="span12">
		<ul class="breadcrumb">
		  <li>
		    <?php echo $this->Html->link('Home','/') ?> <span class="divider">/</span>
		  </li>
		  <li>
		  	<?php echo $this->Html->link('Posts','/module_posts/posts/') ?> <span class="divider">/</span>
		  </li>
		  <li class="active">Editar</li>
		</ul>		
		<hr>		
	</div>
</div>

<div class="row-fluid">
	<div class="span12">
		<button class="btn btn-danger right">Remover post</button>
	</div>
</div>
<hr>
<div class="row-fluid">
	<div class="span12">
		<?php echo $this->element('form_posts',array('action' => 'edit/'.$post['Post']['id'])) ?>		
	</div>
</div>

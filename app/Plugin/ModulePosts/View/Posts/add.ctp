<div class="row-fluid">
	<div class="span12">

		<ul class="breadcrumb">
		  <li>
		    <?php echo $this->Html->link('Home','/') ?> <span class="divider">/</span>
		  </li>
		  <li>
		  	<?php echo $this->Html->link('Posts','/module_posts/posts/') ?> <span class="divider">/</span>
		  </li>
		  <li class="active">Adicionar</li>
		</ul>	
		<hr>
	</div>
</div>

<div class="row-fluid">
	<div class="span12">	
		<?php echo $this->element('form_posts',array('action' => 'add')) ?>		
	</div>
</div>

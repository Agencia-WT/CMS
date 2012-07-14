<div class="row-fluid">
  <div class="span12">
    <ul class="breadcrumb">
      <li>
        <?php echo $this->Html->link('Home','/') ?> <span class="divider">/</span>
      </li>
      <li class="active">Posts</li>
    </ul> 
    <hr>    
  </div>
</div>

<div class="row-fluid">
  <div class="span11">
    <h2>Notícias</h2>
  </div>
  <div class="span1">
    <?php echo $this->Html->link('Adicionar','/module_posts/posts/add',array('class' => 'btn btn-primary')) ?>
  </div>  
</div>
<hr>
<table class="table table-bordered">
  <thead>
    <tr>
      <th>#</th>
      <th>Titulo</th>
      <th>Resumo</th>
      <th>Criado</th>
      <th>Modificado</th>
      <th>#</th>
    </tr>
  </thead>	
  <tbody>
  	<?php foreach ($posts as $post): ?>
  		<tr>
  			<td><?php echo $post['Post']['id'] ?></td>
  			<td><?php echo $post['Post']['title']?></td>
  			<td>
  				<?php 
						echo $this->Text->excerpt(strip_tags($post['Post']['content']),'method', 120, '...');
					?>
				</td>
  			<td><?php echo $post['Post']['created'] ?></td>
  			<td><?php echo $post['Post']['modified'] ?></td>
  			<td>
  				<?php echo $this->Html->link('Editar','/module_posts/posts/edit/'.$post['Post']['id']) ?>
  			</td>
  		</tr>	
  	<?php endforeach ?>
  </tbody>
</table>
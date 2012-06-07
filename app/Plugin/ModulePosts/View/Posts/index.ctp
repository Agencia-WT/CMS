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
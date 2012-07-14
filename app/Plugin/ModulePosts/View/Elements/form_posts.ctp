<div class="row-fluid">
		<?php  
		echo $this->Form->create
		(
			'Post',
			array
			(
				'url' => array
				(
					'controller' => 'posts',
					'action'	 => $action
				),
				'class'			=> 'form-horizontal',
				'inputDefaults' => array
				(
					'label' => false,
					'error' => false,
					'div'		=> false
				)
			)
		); 
		?>	
	<div class="span8">

			<fieldset>

				<div class="control-group">
					<label for="" class="control-label"><?php echo __('Titulo') ?></label>
					<div class="controls">
						<?php echo $this->Form->input('title',
						array(
							'value' => !empty($post['Post']['title']) ? $post['Post']['title'] : ''  
							) 
						) ?>			
					</div>
				</div>	

				<div class="control-group">
					<label for="" class="control-label"><?php echo __('Conteúdo') ?></label>
					<div class="controls">
						<?php echo $this->Form->textarea(
							'content',
							array(
								'id' => 'ckeditor',
								'value' => !empty($post['Post']['content']) ? $post['Post']['content'] : '' 
								)
							) ?>		
					</div>
				</div>	

				<div class="form-actions">
					<button class="btn btn-primary"><?php echo $action == 'add' ? 'Adicionar' : 'Alterar' ?></button>
				</div>

			</fieldset>
	</div>

	<div class="span3">
		<fieldset>
				<div class="control-group">
					<label for="" class="control-label"><?php echo __('Categorias') ?></label>
					<div class="controls">

						<?php echo $this->Form->input('Category',
						array(
							'multiple' => 'checkbox',
							'options' => $category_options,
							'selected' => !empty($post['Checkbox']) ? $post['Checkbox'] : ''
							) 
						) ?>			
					</div>
				</div>		
							
		</fieldset>
	</div>	
	</form>
</div>

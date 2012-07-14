<?php  
class Post extends ModulePostsAppModel
{
	public $name = 'Post';

  public $hasAndBelongsToMany = array(
    'Category' => array(
      'className' => 'Category',
      'joinTable' => 'posts_categories',
      'foreignKey' => 'post_id',
      'associationForeignKey' => 'category_id'
      )
  );

}
?>
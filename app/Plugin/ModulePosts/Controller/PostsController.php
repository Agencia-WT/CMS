<?php  
class PostsController extends ModulePostsAppController
{

	public $uses = array('ModulePosts.Category','ModulePosts.Post');

  public $paginate = array(
      'limit' => 25,
      'order' => array(
          'Post.title' => 'asc'
      )
  );

	public function beforeFilter()
	{
		parent::beforeFilter();
		$this->set('category_options', $this->Category->find('list', array('fields' => array('id','name'))));
	}


	public function index()
	{	
		$this->set('posts', $this->Post->find('all'));
	}

	public function add()
	{
		if( $this->request->is('post') )
		{
			if( $this->Post->save( $this->request->data ) )
			{
				$this->Session->setFlash('Post salvo com sucesso','flash_success');
				$this->redirect('/module_posts/posts/');
			}
		}
	}

	public function edit( $id = null )
	{

		$post = $this->Post->findById($id);
		$post['Checkbox'] = Set::extract($post['Category'], '{n}.id');

		$this->set('post', $post );

		if( $this->request->is('post') )
		{
			$this->request->data['Post']['id'] = $id;
			
			if( $this->Post->save( $this->request->data ) )
			{
				$this->Session->setFlash('Post salvo com sucesso','flash_success');
				$this->redirect('/module_posts/posts/');
			}
		}		
	}

}
?>
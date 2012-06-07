<?php  
class PostsController extends ModulePostsAppController
{

  public $paginate = array(
      'limit' => 25,
      'order' => array(
          'Post.title' => 'asc'
      )
  );

	public function beforeFilter()
	{
		parent::beforeFilter();
	}


	public function index()
	{
		$posts = $this->paginate('Post');
    $this->set(compact('posts'));		
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
		$this->set('post',$this->Post->findById($id) );

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
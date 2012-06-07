<?php
class ModulePostsAppController extends AppController {
	public $components = array();
	public $helpers = array('Text');


	public function beforeFilter()
	{
		$this->Auth->allow('*');
	}
}
?>
<?php

class Home_Controller extends Base_Controller {

	public $layout = 'layout.1col';
	
	public function action_index()
	{
		$this->layout->nest('content', 'home.index', array(
			
		));
	}
}

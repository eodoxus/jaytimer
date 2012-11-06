<?php

class View extends Laravel\View
{
	public function get()
	{
		if (strpos($this->path, 'storage/views') === FALSE && Request::env() == 'local') {
			$__data = $this->data();
			ob_start();
	
			try
			{
				// Load the view within the current scope
				include $this->path;
			}
			catch (\Exception $e)
			{
				ob_get_clean(); throw $e;
			}
			
			$content = ob_get_clean();

			// The view filter event gives us a last chance to modify the
			// evaluated contents of the view and return them. This lets
			// us do something like run the contents through Jade, etc.
			if (Event::listeners('view.filter'))
			{
				return Event::first('view.filter', array($content, $this->path));
			}
	
			return $content;
		}
		return parent::get();
	}
}
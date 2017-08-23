<?php

class Controller_404 extends Controller
{	
	function action_index()
	{
		$this->view->generate('login_view.php', '404_view.php', 'template_view.php');
	}
}

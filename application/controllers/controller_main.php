<?php

class Controller_Main extends Controller
{

	function action_index()
	{	
		$this->view->generate('login_view.php', 'main_view.php', 'template_view.php');
	}
}
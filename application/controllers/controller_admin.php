<?php
class Controller_Admin extends Controller {
	function __construct() {
		$this->model = new Model_Admin();
		$this->view = new View();
	}	
	function action_index()	{		
		session_start();
		//$data['userAppData'] = $this->model->getApps();
		if(!isset($_SESSION['user_id'])){ 
			session_start();
			session_destroy();
			header('Location:/');
			exit;
		}
		$this->view->generate('login_view.php', 'admin_view.php', 'template_view.php', /*$data*/ null);
	}
	function action_viewapps()	{
		if(isset($_POST['admin_page_app_look'])) {
			unset($_POST['admin_page_app_look']);
			$viewing_apps = array();
			foreach($_POST as $item)
				$viewing_apps[] = $item;		
			$data['selected_apps'] = $this->model->getAppsById($viewing_apps);
			$this->view->generate('login_view.php', 'admin_view.php', 'template_view.php', $data);
		} elseif(isset($_POST['admin_page_upload_xml'])){
			$data['admin_page_message'] = $this->model->uploadToXML();
			$data['userAppData'] = $this->model->getApps();
			$this->view->generate('login_view.php', 'admin_view.php', 'template_view.php', $data);			
		} 
	}
}

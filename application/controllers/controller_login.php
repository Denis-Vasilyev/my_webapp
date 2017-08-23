<?php
include "application/models/model_user.php";
//include "application/models/model_admin.php";
class Controller_Login extends Controller{
	public $model_user;
	//public $model_admin;
	
	function __construct()
	{
		$this->model = new Model_Login();
		$this->view = new View();
		$this->model_user = new Model_User();
	}
	
	function action_index()	{
		if(isset($_POST['logout'])){
			session_start();
			session_destroy();
			header('Location:/');
			exit;
		} else if(isset($_POST['svusrbtn'])){
			if (isset($_POST['login']) && isset($_POST['password'])){
				$data["reg_state"] = $this->model->saveNewUser($_POST['login'], $_POST['password']);
				$this->view->generate('login_view.php', 'main_view.php', 'template_view.php', $data);
				exit;
			} else {
				$data["message"] = "Не верно сформирован POST-запрос.";
				$this->view->generate('login_view.php', 'main_view.php', 'template_view.php', $data);
				exit;
			}
		} else if(isset($_POST['regbtn'])){
			$data["reg_state"] = "show_form";
			$this->view->generate('login_view.php', 'main_view.php', 'template_view.php', $data);
			exit;
		} else if(isset($_POST['login']) && isset($_POST['password'])){
			$login = trim($_POST['login']);
			$password = $_POST['password'];
			
			$data = $this->model->checkUser($login, $password);
			//print_r($data);
			//extract()
			if($data["login_state"] == "access_granted"){
				session_start();
				$_SESSION['user_login'] = $data['user_login'];
				$_SESSION['user_id'] 	= $data['user_id'];
				$_SESSION['role_id'] 	= $data['role_id'];
				//header('Location:/');
				if($data['role_id'] == 1) {
					//$this->view->generate('login_view.php', 'admin_view.php', 'template_view.php', $data);
					header('Location:/admin');
					exit;
				} elseif($data['role_id'] == 2) {
					//$data['userAppData'] = $this->model_user->getApps($data['user_id']);
					//$this->view->generate('login_view.php', 'user_view.php', 'template_view.php', $data);
					header('Location:/user');
					exit;
				}				
			}
			$this->view->generate('login_view.php', 'main_view.php', 'template_view.php', $data);
		} 
		
		//
	}
	
}

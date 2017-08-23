<?php

class Controller_User extends Controller {
	function __construct() {
		$this->model = new Model_User();
		$this->view = new View();
	}
	
	function action_index()	{		
		session_start();
		//$data['userAppData'] = $this->model->getApps($_SESSION['user_id']);
		if(!isset($_SESSION['user_id'])){ 
			session_start();
			session_destroy();
			header('Location:/');
			exit;
		}
		$this->view->generate('login_view.php', 'user_view.php', 'template_view.php', /*$data*/ null);
	}
	function action_viewapps()	{
		if(isset($_POST['user_page_app_look'])) {
			unset($_POST['user_page_app_look']);
			$viewing_apps = array();
			foreach($_POST as $item)
				$viewing_apps[] = $item;		
			$data['selected_apps'] = $this->model->getAppsById($viewing_apps);
			$this->view->generate('login_view.php', 'user_view.php', 'template_view.php', $data);
		} elseif (isset($_POST['user_page_app_add'])) {
			$data['user_page_app_add'] = true;
			$this->view->generate('login_view.php', 'user_view.php', 'template_view.php', $data);
		}
	}
	function action_addapp() {
		if(isset($_POST['user_page_create'])) {
				if( isset($_POST['user_page_app_name']) &&
					isset($_POST['user_page_app_cont']) &&
					isset($_FILES['user_page_image'])   &&
					isset($_POST['user_page_phone'])      ) {
				session_start();				
				$uploaddir = 'E:\\localsites\\www\\upload\\images\\';
				$uploadfile = $uploaddir . basename($_FILES['user_page_image']['name']);
				
				if (move_uploaded_file($_FILES['user_page_image']['tmp_name'], $uploadfile)) {
					$uploadresult = "Файл корректен и был успешно загружен.";
				} else { 
					$data['user_page_message'] = "Ошибка загрузки изображения: ".$_FILES['user_page_image']['error'];
					$this->view->generate('login_view.php', 'user_view.php', 'template_view.php', $data);
					exit;
				}
				
				$user_page_image = $_FILES['user_page_image']['name'];
				
				$last_rec_id = $this->model->saveApp(	$_POST['user_page_app_name'],
														$_POST['user_page_app_cont'],
														$_SESSION['user_id'],
														$_POST["user_page_phone"],
														$user_page_image );						
	
				$data['user_page_message'] = 'Заявка добавлена!';
				$data['userAppData'] = $this->model->getApps($_SESSION['user_id']);
				$data['last_rec_id'] = $last_rec_id;
				$this->view->generate('login_view.php', 'user_view.php', 'template_view.php', $data);
				exit;
			}
			else{
				header('Location: user_page.php');
				unset($_SESSION['user_page_mode']);
				$_SESSION['user_page_message'] = 'Не верно сформирован POST-запрос.';            
			}
			$this->view->generate('login_view.php', 'user_view.php', 'template_view.php', $data);
		} elseif (isset($_POST['user_page_cansel'])) {
			header('Location:/user');
			exit;
		}
	}
}

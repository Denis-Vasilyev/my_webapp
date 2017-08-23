<?php

class Model_Login extends Model
{
	public function saveNewUser($login, $password) {
		include "application/models/db.php";
		$login = trim($login);
		
		if($login == '' || $login == ' ') unset($login);
		if($password == '') unset($password);
		
		if (empty($login) || empty($password)) { //если пользователь не ввел логин или пароль, то выдаем ошибку и останавливаем скрипт
			
			return $data = 'Вы не ввели логин или пароль.';
		}
		
		if(!preg_match( "|^[-a-zA-Z0-9_]+$|i", $login)){
			return $data = 'Логин содержит недопустимые символы.';
		}
		
		$stmnt = $pdo->prepare("SELECT * FROM users WHERE login=:login");
		$stmnt->execute(array(':login' => $login));

		$result = $stmnt->fetchAll();

		if (count($result)) {                        
			return $data = "Пользователь с таким логином уже существует.";
		} else {
			$pas = sha1($password);
			$stmnt = $pdo->prepare("INSERT INTO users (login, password, role_id) VALUES(:login, :pas, '2')");
			$stmnt->execute(array(':login' => $login, ':pas' => $pas));
			return $data = "reg_successfull";
		}
	}
	
	public function checkUser($login, $password) {
		include "application/models/db.php";
		$login = trim($login);
		if($login == '' || $login == ' '){ 
			unset($login);
		}
		if($password == ''){ 
			unset($password);
		}
		if (empty($login) || empty($password)) { //если пользователь не ввел логин или пароль, то выдаем ошибку и останавливаем скрипт
			$data['login_state'] = 'access_denied';
			return $data;
		}
		if(!preg_match("|^[-a-zA-Z0-9_]+$|i", $login)){
			$data['login_state'] = 'access_denied';
			return $data;
		}
		$pas = sha1($password);
		$stmnt = $pdo->prepare("SELECT * FROM users WHERE login= :login AND password= :pas");
		$stmnt->execute(array(':login' => $login,':pas' => $pas));
		$result = $stmnt->fetch();
		if($result){
			if($result['role_id'] == 1 || $result['role_id'] == 2){
				$data['user_login'] = $result['login'];
				$data['user_id'] = $result['id'];
				$data['role_id'] = $result['role_id'];
				$data['login_state'] = 'access_granted';
				return $data;
			}
			else {
				$data['login_state'] = 'access_denied';
				return $data;
				exit;
			}
		} else{
			$data['login_state'] = 'access_denied';
			return $data;
		}        
	}
	
	public function get_data()
	{	
		
		// to do
		
	}

}

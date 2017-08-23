<?php 
if(isset($data)){ 
	extract($data);
	if(isset($reg_state)){
		if($reg_state == 'show_form')
			showRegistrationForm();
		elseif($reg_state == 'reg_successfull'){
			echo "<p style='color:green'>Регистрация прошла успешно.</p>";
			showLoginForm();
		}
		else {
			echo "<p style='color:blue'>".$reg_state."</p>";
			showRegistrationForm(); 
		}
	} elseif(isset($login_state)) {
		if($login_state == 'access_denied'){
			echo "<p style='color:red'>Логин и/или пароль введены неверно.</p>";
			showLoginForm();
		} elseif($login_state=='access_granted') {
			echo "<p style='color:green'>Авторизация прошла успешно.</p>";
			showExitForm();
		}  else {
			print_r($login_state);
			echo "<p style='color:blue'>".$login_state."</p>";
			showLoginForm(); 
		}
	} else showExitForm();
} else {
		//session_start();
		if(	isset($_SESSION['user_login'])	&&
			isset($_SESSION['user_id'])		&&
			isset($_SESSION['role_id']))
			showExitForm();
		else showLoginForm();
}
function showLoginForm(){
		echo "<form action='/login' method='post'>
				<table class='table table-bordered'>
					<tr>
						<th colspan='2'>Авторизация</th>
					</tr>
					<tr>
						<td>Логин</td>
						<td><input type='text' name='login'></td>
					</tr>
					<tr>
						<td>Пароль</td>
						<td><input type='password' name='password'></td>
					</tr>
					<tr>
						<th colspan='2' style='text-align: right'>
						<input type='submit' value='Войти' name='enterbtn' style='width: 150px; height: 30px;'><br>
						<input type='submit' value='Регистрация' name='regbtn' style='width: 150px; height: 30px;'>
						</th>
					</tr>
				</table>
			</form>";
}
function showRegistrationForm(){
		echo "<table class='table table-bordered'>
				<form action='/login' method='post'>				
					<tr>
						<th colspan='2'>Регистрация</th>
					</tr>
					<tr>
						<td>Ваш логин</td>
						<td><input type='text' name='login'></td>
					</tr>
					<tr>
						<td>Ваш пароль</td>
						<td><input type='password' name='password'></td>
					</tr>	
					<tr>
						<th colspan='2' style='text-align: right'>
							<input type='submit' value='Зарегистрироваться' name='svusrbtn' style='width: 160px; height: 30px;'>										
			</form>
			<form action='/' method='post'>				
							<input type='submit' value='Выйти' name='exitbtn' style='width: 160px; height: 30px;'>
						</th>
					</tr>
				</table>
			</form>";
}
function showExitForm(){
		echo "<form action='/login' method='post'>
				<table class='table'>
					<tr>
						<td style='border-top: none;'>
							<input type='submit' value='Выйти' name='logout' style='width: 150px; height: 30px; float: right;'>
						</td>
					</tr>
				</table>
			  </form>";
}
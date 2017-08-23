<h1>Страница пользователя</h1>
<p>
		<?php
			//print_r($data);
			if(isset($data)) extract($data);
			if(isset($user_page_message)) echo $user_page_message; 
			//echo "<h3>Страница пользователя</h3>"; 
			/*
			if(isset($userAppData)){
				echo "<form action='/user/viewapps' method='post'>
						<h3>Таблица заявок</h3>  
						<table border = '1'>
							<tr>
							<th>#</th><th>ID</th><th>Наименование</th><th>Описание</th><th>Изображение</th><th>Контактный телефон</th>";
				if(isset($last_rec_id)){
					foreach($userAppData as $row){
						if($last_rec_id == $row['id'])
							echo 	"<tr bgcolor='lightgray'><td><input type='checkbox' name='$row[id]' value='$row[id]'></td><td>";
						else 
							echo 	"<tr><td><input type='checkbox' name='$row[id]' value='$row[id]'></td><td>";
						echo	$row['id'].'</td><td>'
								.$row['name'].'</td><td>'
								.$row['content'].'</td><td>'
								.$row['image'].'</td><td>'
								.$row['phone'].'</td></tr>';
					}
				} else {
					foreach($userAppData as $row)
						echo 	"<tr><td><input type='checkbox' name='$row[id]' value='$row[id]'></td><td>"
								.$row['id'].'</td><td>'
								.$row['name'].'</td><td>'
								.$row['content'].'</td><td>'
								.$row['image'].'</td><td>'
								.$row['phone'].'</td></tr>';
				}
				echo "		</tr>
						</table>
							<p>
									<input type='submit' name='user_page_app_look' value='Просмотр заявки (-ок)' size='40'>
									<input type='submit' name='user_page_app_add' value='Подать заявку' size='40'>
							</p>
					</form>";			
			} elseif(isset($selected_apps)){
				//print_r($selected_apps);
				echo "<h3>Просмотр заявок</h3>";
				echo "<label>**********************************************************************</label><br>";
				foreach($selected_apps as $row){
				 //"<td><input type='checkbox' name='$row[id]' value='$row[id]'></td>"
					echo "<label><b>Заявка № $row[id]</b></label><br>";
                    echo "<label>Наименование:<br>$row[name]</label><br>";
                    echo "<label>Содержание:<br>$row[content]</label><br>";
                    echo "<label>Изображение:<br>$row[image]</label><br>";
                    echo "<label>Указанный контактный телефон: <br>$row[phone]</label><br>";
                    echo "<label>********************************************************************</label><br>";
					echo "<br>";
				}
				echo 	"<form action='/user' method='post'>
							<p>
									<input type='submit' name='applookback' value='Назад' size='40'>
							</p>
						 </form>";						
			} elseif(isset($user_page_app_add)){
				echo    "<h3>Создание заявки</h3>                        
                        <form enctype='multipart/form-data' action='/user/addapp' method='post'>
                                <p>
                                        <label>Имя заявки:<br></label>
                                        <input name='user_page_app_name' type='text' size='20' maxlength='20'>
                                </p>
                                <p>
                                        <label>Содержание заявки:<br></label>
                                        <input name='user_page_app_cont' type='text' size='40' maxlength='255'>
                                </p>
                                <p>
                                        <label>Контактный телефон:<br></label>
                                        <input name='user_page_phone' type='text' size='20' maxlength='20'>
                                </p>
                                <p>
                                        <label>Изображение:<br></label>
                                        <input type='hidden' name='MAX_FILE_SIZE' value='10485760' />
                                        <input name='user_page_image' type='file' accept='image/*'>
                                </p>
                                <p>
                                        <input name='user_page_create' type='submit'  value='Создать'>
                                        <input name='user_page_cansel' type='submit'  value='Отмена'>
                                </p>
                        </form>";				
			}*/
		?>
		
</p>
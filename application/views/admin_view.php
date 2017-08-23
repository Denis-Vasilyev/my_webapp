<h1>Страница администратора</h1>
<p>
		<?php
			//print_r($data);			
			if(isset($data))extract($data);
			if(isset($admin_page_message)) echo $admin_page_message; 
			include "templates/admin_applications.php";
			//include "templates/index.php";
			
			/*if(isset($userAppData)){
				//print_r($userAppData);
				echo "<form action='/admin/viewapps' method='post'>
						<h3>Таблица заявок</h3>  
						<table border = '1'>
							<tr>
							<th>#</th><th>ID</th><th>Пользователь</th><th>Наименование</th><th>Описание</th><th>Изображение</th><th>Контактный телефон</th>";
				foreach($userAppData as $row){
						echo 	"<tr><td><input type='checkbox' name='$row[id]' value='$row[id]'></td><td>"
								.$row['id'].'</td><td>'
								.$row['u_login'].'</td><td>'
								.$row['name'].'</td><td>'
								.$row['content'].'</td><td>'
								.$row['image'].'</td><td>'
								.$row['phone'].'</td></tr>';
				}
				echo 	"</tr>
						</table><br>  
                            <p>
                                <input type='submit' name='admin_page_app_look' value='Просмотр заявки (-ок)' size='40'>                    
                                <input type='submit' name='admin_page_upload_xml' value='Выгрузить в XML' size='40' action='loadXML.php' method='post'>
                            </p>
                        </form>";			
			} elseif(isset($selected_apps)){
				//print_r($selected_apps);
				echo "<h3>Просмотр заявок</h3>";
				echo "<label>**********************************************************************</label><br>";
				foreach($selected_apps as $row){
				 //"<td><input type='checkbox' name='$row[id]' value='$row[id]'></td>"
					echo "<label><b>Заявка № $row[id]</b></label><br>";
					echo "<label>Пользователь:<br>$row[u_login]</label><br>";
                    echo "<label>Наименование:<br>$row[name]</label><br>";
                    echo "<label>Содержание:<br>$row[content]</label><br>";
                    echo "<label>Изображение:<br>$row[image]</label><br>";
                    echo "<label>Указанный контактный телефон: <br>$row[phone]</label><br>";
                    echo "<label>********************************************************************</label><br>";
					echo "<br>";
				}
				echo 	"<form action='/admin' method='post'>
							<p>
									<input type='submit' name='applookback' value='Назад' size='40'>
							</p>
						 </form>";						
			} */
		?>
		
</p>
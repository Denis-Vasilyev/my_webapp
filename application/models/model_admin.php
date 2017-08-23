<?php
class Model_Admin extends Model{
	public function getApps() {
			include 'application/models/db.php';
			$stmnt = $pdo->query(   "SELECT a.id, a.name, a.content, a.phone, a.image, u.login AS u_login
                                      FROM users u
                                      INNER JOIN applications a ON a.user_id = u.id" );
			$stmnt->execute();
			return $stmnt->fetchAll();
	}	
	
	public function getAppsById($viewing_apps) {
			include 'application/models/db.php';
			// $stmnt = $pdo->query(   "SELECT a.id, a.name, a.content, a.phone, a.image, u.login AS u_login
									 // FROM users u
									 // INNER JOIN applications a ON a.user_id = u.id AND a.id = :app_id" );
			$stmnt = $pdo->prepare(     "SELECT a.id, a.name, a.content, a.phone, a.image, u.login AS u_login
										 FROM users u 
										 INNER JOIN applications a ON a.user_id = u.id AND a.id = :app_id" );
			$data = array();
			foreach($viewing_apps as $item){
				$stmnt->execute(array(':app_id' => $item));
				$data[] = $stmnt->fetch();				
			}
			return $data;			
	}
	
	public function uploadToXML(){
			include 'application/models/db.php';		
			$stmnt = $pdo->query(   "SELECT a.id, a.name, a.content, a.phone, a.image, u.login AS u_login, u.id AS u_id
										FROM users u
										INNER JOIN applications a ON a.user_id = u.id" );
$prepXML = <<<XML
<doc></doc>
XML;
			$appData = new SimpleXMLElement($prepXML);
			for($i=0; $row = $stmnt->fetch(); $i++){
				$appData->addChild('application');
				$appData->application[$i]->addChild("id",       $row['id']);
				$appData->application[$i]->addChild("name",     $row['name']);
				$appData->application[$i]->addChild("content",  $row['content']);
				$appData->application[$i]->addChild("user",     $row['u_login'])->addAttribute("id", $row['u_id']);        
				$appData->application[$i]->addChild("image",    $row['image']);
			}
			$filename = 'applications.xml';
			$appData->saveXML($filename);
			return 'Заявки успешно выгружены на сервер в файл ['.$filename.'] в каталог по умолчанию.';  
    }
}

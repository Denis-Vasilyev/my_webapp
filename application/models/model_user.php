<?php

class Model_User extends Model{
	public function getApps($user_id) {
			include 'application/models/db.php';
			$pappstmnt = $pdo->prepare("SELECT id, name, content, phone, image FROM applications WHERE user_id=?");
			$pappstmnt->execute(array($user_id));
			for( $i = 0; $userAppData[$i] = $pappstmnt->fetch(); $i++ );
			unset($userAppData[$i]);
			return $userAppData;
	}	
	
	public function getAppsById($viewing_apps) {
			include 'application/models/db.php';
		    $pappstmnt = $pdo->prepare('SELECT * FROM applications WHERE id=?');
			$data = array();
			foreach($viewing_apps as $item){
				$pappstmnt->execute(array($item));
				$data[] = $pappstmnt->fetch();				
			}
			return $data;			
	}
	
	public function saveApp($app_name, $app_cont, $user_id, $phone, $image){
		include 'application/models/db.php';
		$pcrappstmnt = $pdo->prepare(   "INSERT INTO applications("
													. "name, content, user_id, "
													. "phone, image) VALUES ( "
													. ":user_page_app_name,"
													. ":user_page_app_cont,"
													. ":user_id,"
													. ":user_page_phone,"
													. ":user_page_image)");

		$pcrappstmnt->execute( array(
						':user_page_app_name' 	=>	$app_name,
						':user_page_app_cont' 	=>	$app_cont,
						':user_id' 				=>  $user_id,
						':user_page_phone' 		=>  $phone,
						':user_page_image' 		=>  $image ));
		//            $last_rec_id_stmnt = $pdo->query(   "SELECT AUTO_INCREMENT //еще один способ взять ID последней записи
		//                                                FROM information_schema.TABLES
		//                                                WHERE table_schema = 'db'
		//                                                AND TABLE_NAME = 'applications'");
		//            $last_record_id = $last_rec_id_stmnt->fetch()['AUTO_INCREMENT'] - 1;
		return $pdo->lastInsertId();
	}
}

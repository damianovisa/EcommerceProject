<?php 
namespace app\models;

class ContactUs extends \app\core\Model{

	public function insertMessage(){
		$SQL = "INSERT INTO contact(user_id,username,message) VALUES (:user_id,:username,:message)";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute([
        'user_id'=>$this->user_id,
        'username'=>$this->username,
        'message'=>$this->message]);
	}

}
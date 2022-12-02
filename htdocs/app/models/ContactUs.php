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

	public function getMessages(){
        $sql = "SELECT * FROM contact";
		$STMT = self::$_connection->prepare($sql);
		$STMT->execute();
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\ContactUs');
		return $STMT->fetchAll();
    }

    public function getById($message_id)
    {
        $SQL = "SELECT * FROM contact WHERE message_id=:message_id";
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute(['message_id' => $message_id]);
        $STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\ContactUs');
        return $STMT->fetch();
    }

}
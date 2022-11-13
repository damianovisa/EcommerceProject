<?php 
namespace app\models;

class User extends \app\core\Model{

	public function getUser($username){
		$SQL = "SELECT * FROM user WHERE username=:username";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['username'=>$user_email]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\User');
		return $STMT->fetch();
	}

	public function insertUser(){
		$SQL = "INSERT INTO user(username, password_hash) VALUES (:username, :password_hash)";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['username'=>$this->username,'password_hash'=>$this->password_hash]);
	}

}
<?php 
namespace app\models;

class User extends \app\core\Model{

	public function getUser($username){
		$SQL = "SELECT * FROM user WHERE username=:username";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['username'=>$username]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\User');
		return $STMT->fetch();
	}

	public function insertUser(){
		$SQL = "INSERT INTO user(username, password_hash,fname,lname) VALUES (:username, :password_hash,:fname,:lname)";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['username'=>$this->username,'password_hash'=>$this->password_hash,'fname'=>$this->fname,'lname'=>$this->lname]);
	}
	public function updateUser(){
		$SQL = "UPDATE user SET username=:username, password_hash=:password_hash,fname=:fname,lname=:lname WHERE username=:username" ;
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['username'=>$this->username,'password_hash'=>$this->password_hash,'fname'=>$this->fname,'lname'=>$this->lname]);
	}

}
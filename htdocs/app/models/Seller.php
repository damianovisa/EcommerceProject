<?php 
namespace app\models;

class Seller extends \app\core\Model{

	public function getSeller($username){
		$SQL = "SELECT * FROM seller WHERE username=:username";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['username'=>$username]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Seller');
		return $STMT->fetch();
	}
	
	public function insertSeller(){
		$SQL = "INSERT INTO seller(username, password_hash,fname,lname) VALUES (:username, :password_hash,:fname,:lname)";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['username'=>$this->username,'password_hash'=>$this->password_hash,'fname'=>$this->fname,'lname'=>$this->lname]);
	}

}
<?php 
namespace app\models;

class User extends \app\core\Model{

	public function getSeller($username){
		$SQL = "SELECT * FROM seller WHERE username=:username";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['username'=>$user_email]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\User');
		return $STMT->fetch();
	}
}
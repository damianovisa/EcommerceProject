<?php 
namespace app\models;

class Product extends \app\core\Model{

	public function insert(){
		$SQL = "INSERT INTO product(product_name, product_manufacter,product_price) VALUES (:product_name, :product_manufacturer,:product_price)";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['product_name'=>$this->product_name,'product_manufacter'=>$this->product_manufacter,'product_price'=>$this->product_price]);
	}

}
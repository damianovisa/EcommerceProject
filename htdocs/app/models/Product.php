<?php 
namespace app\models;

class Product extends \app\core\Model{

	public function insertProduct(){
		$SQL = "INSERT INTO product(product_name, product_manufacture,product_price) VALUES (:product_name, :product_manufactur,:product_price)";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['product_name'=>$this->product_name,'product_manufacture'=>$this->product_manufacture,'product_price'=>$this->product_price]);
	}
}
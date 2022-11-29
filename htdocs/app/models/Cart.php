<?php 
namespace app\models;

class Cart extends \app\core\Model{

	public function insertProductToCart()
    {
        $SQL = "INSERT INTO cart (product_id,product_name,product_manufacture,product_price)
         VALUES
        (:product_id,:product_name,:product_manufacture,:product_price)";
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute([
        'Seller_id' => $this->Seller_id,
        'product_name' => $this->product_name,
        'product_manufacture' => $this->product_manufacture,
        'product_price' => $this->product_price]);

    }   

}
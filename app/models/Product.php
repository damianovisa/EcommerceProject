<?php 
namespace app\models;

class Product extends \app\core\Model{

	public function insertProduct()
    {
        $SQL = "INSERT INTO product (Seller_id,product_name,product_manufacture,product_price,product_image)
         VALUES
        (:Seller_id,:product_name,:product_manufacture,:product_price,:product_image)";
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute([
        'Seller_id' => $this->Seller_id,
        'product_name' => $this->product_name,
        'product_manufacture' => $this->product_manufacture,
        'product_price' => $this->product_price, 
        'product_image'=> $this->product_image]);
    }   

    public function getAllProducts(){
        $sql = "SELECT * FROM product";
		$STMT = self::$_connection->prepare($sql);
		$STMT->execute();
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Product');
		return $STMT->fetchAll();
    }

    public function getBySeller($Seller_id)
    {
        $SQL = "SELECT * FROM product WHERE Seller_id=:Seller_id";
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute(['Seller_id' => $Seller_id]);
        $STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Product');
        return $STMT->fetchAll();
    }

    public function getByProduct($product_id)
    {
        $SQL = "SELECT * FROM product WHERE product_id=:product_id";
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute(['product_id' => $product_id]);
        $STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Product');
        return $STMT->fetch();
    }

    public function delete(){
        $SQL = "DELETE FROM product WHERE product_id=:product_id";
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute(['product_id'=>$this->product_id]);
    }


	
}
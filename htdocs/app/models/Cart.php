<?php 
namespace app\models;

class Cart extends \app\core\Model{

	public function insertProductToCart()
    {
        $SQL = "INSERT INTO cart (product_id,user_id)VALUES(:product_id,:user_id)";
       $STMT = self::$_connection->prepare($SQL);
       $STMT->execute(['product_id' => $this->product_id,'user_id' => $this->user_id]);
    } 

    public function getCartbyUserID($user_id)
    {

        $SQL = "SELECT * FROM  cart inner join product on product.product_id=cart.product_id WHERE user_id=:user_id";
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute(['user_id' => $user_id]);
        $STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Product');
        return $STMT->fetchAll();
    }

    public function delete($cart_id, $user_id){
		$SQL = "DELETE FROM cart WHERE cart_id=:cart_id AND user_id=:user_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['cart_id'=>$cart_id, 'user_id'=>$user_id]);
	}

 


}
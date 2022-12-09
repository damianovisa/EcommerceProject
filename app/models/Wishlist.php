<?php 
namespace app\models;

class Wishlist extends \app\core\Model{

	public function insertProductToWishlist()
    {
        $SQL = "INSERT INTO wishlist (product_id,user_id)VALUES(:product_id,:user_id)";
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute(['product_id' => $this->product_id, 'user_id' => $this->user_id]);
    } 

    public function getWishlistbyUserID($user_id)
    {

        $SQL = "SELECT * FROM  wishlist inner join product on product.product_id=wishlist.product_id WHERE user_id=:user_id";
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute(['user_id' => $user_id]);
        $STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Product');
        return $STMT->fetchAll();
    }

    public function delete($wishlist_id, $user_id){
		$SQL = "DELETE FROM wishlist WHERE wishlist_id=:wishlist_id AND user_id=:user_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['wishlist_id'=>$wishlist_id, 'user_id'=>$user_id]);
	}

 


}
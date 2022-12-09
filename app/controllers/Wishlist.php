<?php
namespace app\controllers;

class Wishlist extends \app\core\Controller{
	
	public function index(){
		$wishlist = new \app\models\Wishlist();
		$wishlists = $wishlist->getWishlistbyUserID($_SESSION['user_id']);
		$this->view('/Wishlist/index', $wishlists);
	}



	public function delete($wishlist_id){
		$wishlist = new \app\models\Wishlist();
		$wishlists = $wishlist->delete($wishlist_id, $_SESSION['user_id']);
		header('location:/Wishlist/index?message=Deleted from wishlist');
	}



	public function logout(){
		session_destroy();
		header('location:/User/index?message=Logged out');
	}

	public function addToWishlist($product_id){
			$wishlist = new \app\models\Wishlist();

			// $cart->product_id = $_SESSION['product_id'];
			$wishlist->product_id = $product_id;
			$wishlist->user_id = $_SESSION['user_id'] ;
			//$cart = $cart->getUserId($_SESSION['user_id']);
			// $cart->user_id = $_SESSION['user_id'];
			// $_SESSION['cart_id'] = $cart->cart_id;
			$wishlist->insertProductToWishlist();
			header('location:/User/home?message=Added to wishlist');
	}

}
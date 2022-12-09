<?php
namespace app\controllers;

class Cart extends \app\core\Controller{
	
	public function index(){
		$cart = new \app\models\Cart();
		$carts = $cart->getCartbyUserID($_SESSION['user_id']);
		$this->view('/Cart/index', $carts);
	}



	public function delete($cart_id){
		$cart = new \app\models\Cart();
		$carts = $cart->delete($cart_id, $_SESSION['user_id']);
		header('location:/Cart/index?message=Deleted from cart');
	}



	public function logout(){
		session_destroy();
		header('location:/User/index?message=Logged out');
	}

	public function addToCart($product_id){
			$cart = new \app\models\Cart();

			// $cart->product_id = $_SESSION['product_id'];
			$cart->product_id = $product_id;
			$cart->user_id = $_SESSION['user_id'] ;
			//$cart = $cart->getUserId($_SESSION['user_id']);
			// $cart->user_id = $_SESSION['user_id'];
			// $_SESSION['cart_id'] = $cart->cart_id;
			$cart->insertProductToCart();
			header('location:/User/home?message=Added to cart');
	}

}
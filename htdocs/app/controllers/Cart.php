<?php
namespace app\controllers;

class Cart extends \app\core\Controller{
	
	public function index(){
		$this->view('/Cart/index');
	}

	public function logout(){
		session_destroy();
		header('location:/User/index?message=Logged out');
	}

	public function addToCart(){
			$cart = new \app\models\Cart();
			$cart->product_id = $_SESSION['product_id'];
			$cart->product_name = $_POST['product_name'];
			$cart->product_manufacture = $_POST['product_manufacture'];
			$cart->product_price = $_POST['product_price'];
			// $cart->product_image = $_POST['product_image'];
			$_SESSION['cart_id'] = $cart->cart_id;
			$cart->insertProductToCart();
			
			header('location:/User/home?message=Added to cart');
	}

}
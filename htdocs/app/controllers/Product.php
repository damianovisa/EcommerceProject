<?php
namespace app\controllers;

class Product extends \app\core\Controller{

	public function index(){
		$this->view('/Product/index');
	}

	public function addProduct(){
	
		if(isset($_POST['action'])){
			$product = new \app\models\Product();
			$product->Seller_id = $_SESSION['Seller_id'];
			$product->product_name = $_POST['product_name'];
			$product->product_manufacture = $_POST['product_manufacture'];
			$product->product_price = $_POST['product_price'];
			$product->product_image = $_POST['product_image'];
			$_SESSION['product_id'] = $product->product_id;
			$product->insertProduct();
			header('location:/Product/addProduct?message=Product Added');
		}else{
			$this->view('Product/addProduct');
		}
	}


	public function logout(){
		session_destroy();
		header('location:/Seller/index?message=Logged out');
	}

	
}
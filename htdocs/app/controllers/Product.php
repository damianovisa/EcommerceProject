<?php
namespace app\controllers;

class Product extends \app\core\Controller{

	public function index(){
		$this->view('/Product/index');
	}


public function addProduct(){
	
		if(isset($_POST['action'])){
			$product = new app\models\Product();
			$seller = new \app\models\Seller();
			$product->product_name = $_POST['product_name'];
			$product->product_manufacter = $_POST['product_manufacture'];
			$product->product_price = $_POST['product_price'];
			$seller->Seller_id = $_SESSION['Seller_id'];
			$_SESSION['product_id'] = $product->product_id;
			$product->insertProduct();
			echo "Product added";
		}else{
			
			$this->view('Product/addProduct');
		}
	}

	public function logout(){
		session_destroy();
		header('location:/Seller/index?message=Logged out');
	}
}
<?php
namespace app\controllers;

class Seller extends \app\core\Controller{

public function addProduct(){
		if(isset($_POST['action'])){
			$seller = new app\models\Seller();
			$product = new app\models\Product();
			$product->product_name = $_POST['product_name'];
			$product->product_manufacter = $_POST['product_manufacter'];
			$product->product_price = $_POST['product_price'];
			$seller->Seller_id = $_SESSION['Seller_id'];
			$seller->insert();
			echo "Product added";
		}else{
			
			$this->view('Seller/home');
		}
	}



}	
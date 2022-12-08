<?php

namespace app\filters;

#[\Attribute]

class sellerLogin extends \app\core\AccessFilter{
	public function execute(){
		if(!isset($_SESSION['Seller_id'])){
			header('location:/Seller/index?error=Loggin to access this page');
			return true;
		}else{
			return false;
		}
		
}
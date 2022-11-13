<?php
namespace app\controllers;

class Seller extends \app\core\Controller{
	public function index(){
	
		if(isset($_POST['action'])){
			$seller = new \app\models\Seller();
			$seller = $seller->getSeller($_POST['username']);
			if(password_verify($_POST['password'],$seller->password_hash)){
				$_SESSION['user_id'] = $seller->Seller_id;
				$_SESSION['username'] = $seller->username;
				header('location:/Main/index');
			}else{
				header('location:/Seller/index?error=Invalid credentials');
			}
		}else{
			$this->view('Seller/index');
		}

	}

	public function register(){
		if(isset($_POST['action'])){
			if($_POST['password'] == $_POST['password_conf']){
				$seller = new \app\models\Seller();
				$nameIsUsed = $seller->getSeller($_POST['username']);
				if(!$nameIsUsed){
					$seller->username = $_POST['username'];
					$seller->password_hash = $_POST['password'];
					$seller->fname = $_POST['fname'];
					$seller->lname = $_POST['lname'];
					$seller->insertSeller();
					header('location:/Seller/index?message=Registered successfully');
				}else{
					header('location:/Seller/register?error=Username is already taken');	
				}
			}else{
				header('location:/Seller/register?error=Passwords do not match');
			}
		}else{
			$this->view('Seller/register');
		}
	}
}
<?php
namespace app\controllers;

class User extends \app\core\Controller{
	public function index(){
	
		if(isset($_POST['action'])){
			$user = new \app\models\User();
			$user = $user->getUser($_POST['username']);
			if(password_verify($_POST['password'],$user->password_hash)){
				$_SESSION['user_id'] = $user->user_id;
				$_SESSION['username'] = $user->username;
				header('location:/User/home');
			}else{
				header('location:/User/index?error=Invalid credentials');
			}
		}else{
			$this->view('User/index');
		}

	}
	public function UpdateUser(){
	if(isset($_POST['action'])){
			if($_POST['password'] == $_POST['password_conf']){
				$user = new \app\models\User();
				$nameIsUsed = $user->getUser($_POST['username']);
				if(!$nameIsUsed){
					$user->username = $_POST['username'];
					$user->password_hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
					$user->fname = $_POST['fname'];
					$user->lname = $_POST['lname'];
					$user->updateUser();
					header('location:/User/home?message=Updated successfully');
				}else{
					header('location:/User/UpdateUser?error=Username is already taken');	
				}
			}else{
				header('location:/User/UpdateUser?error=Passwords do not match');
			}
		}else{
			$this->view('User/UpdateUser');
		}
	}


	public function register(){
		if(isset($_POST['action'])){
			if($_POST['password'] == $_POST['password_conf']){
				$user = new \app\models\User();
				$nameIsUsed = $user->getUser($_POST['username']);
				if(!$nameIsUsed){
					$user->username = $_POST['username'];
					$user->password_hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
					$user->fname = $_POST['fname'];
					$user->lname = $_POST['lname'];
					$user->insertUser();
					header('location:/User/index?message=Registered successfully');
				}else{
					header('location:/User/register?error=Username is already taken');	
				}
			}else{
				header('location:/User/register?error=Passwords do not match');
			}
		}else{
			$this->view('User/register');
		}
	}

	public function home(){
		$product = new \app\models\Product();
        $products = $product->getAllProducts();

		$this->view('/User/home', $products);
	}

	public function logout(){
		session_destroy();
		header('location:/User/index?message=Logged out');
		
	}

	public function aboutUs(){
		$this->view('/User/aboutUs');
	}

	


}
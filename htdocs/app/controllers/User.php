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
				header('location:/Main/index');
			}else{
				header('location:/User/index?error=Invalid credentials');
			}
		}else{
			$this->view('User/index');
		}

	}

	public function register(){
		if(isset($_POST['action'])){
			if($_POST['password'] == $_POST['password_conf']){
				$user = new \app\models\User();
				$nameIsUsed = $user->getUser($_POST['username']);
				if(!$nameIsUsed){
					$user->username = $_POST['username'];
					$user->password_hash = $_POST['password'];
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
}
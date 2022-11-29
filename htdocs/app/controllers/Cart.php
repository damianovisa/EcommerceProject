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

}
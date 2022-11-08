<?php
namespace app\controllers;

class Main extends \app\core\Controller{
	public function index(){
		$this->view('index');
	}

	public function login(){
		$this->view('login');
	}

}
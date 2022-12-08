<?php

namespace app\filters;

#[\Attribute]

class userLogin extends \app\core\AccessFilter{
	public function execute(){
		if(!isset($_SESSION['user_id'])){
			header('location:/User/index?error=Loggin to access this page');
			return true;
		}else{
			return false;
		}
		
}
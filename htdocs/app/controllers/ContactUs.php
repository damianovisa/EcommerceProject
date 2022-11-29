<?php
namespace app\controllers;

class ContactUs extends \app\core\Controller{
	
	public function contactUs(){
			$contact = new \app\models\ContactUs();
            $user = new \app\models\User();

            if (isset($_POST['action'])) {
                $concact->message = $_POST['message'];
                $user->user_id = $_SESSION['user_id'];
                $user->username = $_SESSION['username'];
    
               $contact->insertMessage();
            }else{
            	$this->view('User/contactUs', $user);
			}
	}

}
<?php
namespace app\controllers;

class ContactUs extends \app\core\Controller{
	
    public function index(){
        
            $contact = new \app\models\ContactUs();

            if (isset($_POST['action'])) {
                $contact->message = $_POST['message'];
                $contact->user_id = $_SESSION['user_id'];
                $contact->username = $_SESSION['username'];
                $contact->insertMessage();
                header('location:/ContactUs/index?message=Message sent');
            }else{
                $this->view('ContactUs/index', $contact);
            }
    }

    public function viewMessages(){
        $contact = new \app\models\ContactUs();
        $messages = $contact->getMessages();

        $this->view('/ContactUs/viewMessages', $messages);
    }

    public function delete($message_id){
        $contact = new \app\models\ContactUs();
        $contact = $contact->getById($message_id);
        $contact->message_id = $message_id;

        $contact->delete();
        header('location:/ContactUs/viewMessages?message=Product removed');
    }

    public function logout(){
        session_destroy();
        header('location:/Seller/index?message=Logged out');
    }

    

}
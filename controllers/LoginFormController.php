<?php

require_once(__DIR__.'/../models/Database.php');

class LoginFormController{

	public function index(){
		if(isset($_POST['username']) && isset($_POST['password'])){

			$database = new Database;
			$database->load($_POST);

			if($_POST['username'] === $this->username && $_POST['password'] === 'Test'){
				echo 'succes';
			} else {
				echo 'failed';
			}
		} else {
			echo 'not a post';
		}
	}

}

$loginController = new LoginFormController;
$loginController->index();
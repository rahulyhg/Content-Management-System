<?php

require_once('config.php');
require_once(MODEL_PATH.'/View.php');

$action = isset($_GET['action']) ? $_GET['action'] : null;
$view = new View;

switch($action){
	case 'test_page':
		$view->render(
			'test_page',
			array(
				'test' => 'Hello World Again!!'
			)
		);
		break;
	case 'home_page':
	default:
		$view->render('home_page');
		break;
}

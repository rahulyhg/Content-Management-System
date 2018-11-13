<?php

class View {
	public function render($view, $view_variables = array()){
		extract($view_variables);
		require_once(LAYOUT_PATH.'/header.php');
		require_once(VIEW_PATH.'/'.$view.'.php');
		require_once(LAYOUT_PATH.'/footer.php');
	}
}
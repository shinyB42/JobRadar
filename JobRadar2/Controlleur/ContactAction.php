<?php
require_once('./controlleur/Action.interface.php');
class ContactAction implements Action {
	public function execute(){
                $_REQUEST["activePage"]="contact";
		return "contact";
	}
}

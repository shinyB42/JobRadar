<?php
require_once('./controlleur/Action.interface.php');
class AProposAction implements Action {
	public function execute(){
                $_REQUEST["activePage"]="Apropos";
		return "APropos";
	}
}
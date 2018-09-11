<?php
require_once 'controlleur/Action.Interface.php';
class LogoutAction implements Action{
    public function execute(){
        if(!isset($_SESSION))
            session_start();
        unset($_SESSION["connected"]);
        session_destroy();
        $redirection = new DefaultAction();
        return $redirection->execute();
    }
}

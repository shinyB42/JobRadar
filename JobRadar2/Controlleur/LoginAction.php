<?php
require_once 'Controlleur/Action.Interface.php';
require_once 'Modeles/Classes/CompteDAO.php';
class LoginAction implements Action{
    public function execute(){
        $_REQUEST["activePage"]="login";
        if (!isset($_REQUEST["username"]) or !$this->valide())
            return "login";
        
        $compteDAO = new CompteDAO();
        $compte = $compteDAO->findByUsername($_REQUEST["username"]);
        if ($compte == null){
            $_REQUEST["field_messages"]["login"]["username"] = "Utilisateur inexistant";
            return "login";
        } else if ($compte->getPassword() != $_REQUEST["password"]){
            $_REQUEST["field_messages"]["login"]["password"] = "Mot de passe incorrect";
            return "login";
        }
        if (!isset($_SESSION))
            session_start();
        $_SESSION["connected"] = $compte;
        $redirection = new DefaultAction();
        return $redirection->execute();
        
    }
    
    public function valide(){
        $result = true;
        if ($_REQUEST["username"] == ""){
            $_REQUEST["field_messages"]["login"]["username"] = "Entrez votre nom d'utilisateur";
            $result = FALSE;
        }
        if ($_REQUEST["password"] == ""){
            $_REQUEST["field_messages"]["login"]["password"] = "Entrez votre mot de passe";
            $result = FALSE;
        }
        
        return $result;
    }
}

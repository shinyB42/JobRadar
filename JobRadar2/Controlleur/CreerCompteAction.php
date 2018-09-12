<?php
require_once 'Controlleur/Action.Interface.php';
require_once 'Modeles/Classes/Compte.php';
require_once 'Modeles/Classes/CompteDAO.php';
require_once 'Modeles/Classes/QuartierDAO.php';


class CreerCompteAction implements Action{
    public function execute() {
        
        $dbQuartier = new QuartierDAO();
        $_REQUEST["quartiers"] = $dbQuartier->findAll();
        
        if (!ISSET($_REQUEST["username"]) or !$this->valide()){
            $_REQUEST["activePage"]="creerCompte";
            return "formulaireInscription";
        }
        
        $dbcompte = new CompteDAO();
        
        $compte = new Compte();
        $compte->setUsername($_REQUEST["username"]);
        $compte->setPassword($_REQUEST["password"]);
        $compte->setNomCompte($_REQUEST["nom"]);
        $compte->setPrenomCompte($_REQUEST["prenom"]);
        $compte->setAdresseCompte($_REQUEST["adresse"]);
        $compte->setIdQuartierCompte($_REQUEST["quartier"]);
        $compte->setTelephoneCompte($_REQUEST["telephone"]);
        $compte->setEmailCompte($_REQUEST["email"]);
        
        $dbcompte->create($compte);
        if (isset($_REQUEST["postulerTemp2"])){
            session_start();
            
            // asser farfelu comme solution puisque cest la base de donne qui 
            // attribue le numero de compte
            $compte->setNumeroCompte($dbcompte->findByUsername(
                                    $compte->getUsername())->getNumeroCompte()
            ); 
            $_SESSION["connected"]=$compte;
            $redirection = new PostulerAction();
            return $redirection->execute();
        }
        $_SESSION["connected"]=$compte;
        $redirection = new DetailCompteAction();
        return $redirection->execute();
    }
    
    public function valide(){
        $result = true;
        
        $dbCompte = new CompteDAO();
        if(!is_null($dbCompte->findByUsername($_REQUEST["username"]))){
            $_REQUEST["field_messages"]["formInscription"]["username"] = "Cet utilisateur existe deja";    
            $result = FALSE;
        }
        if ($_REQUEST["username"] == ""){
            $_REQUEST["field_messages"]["formInscription"]["username"] = "Entrez votre nom d'utilisateur";
            $result = FALSE;
        }
        if ($_REQUEST["password"] == ""){
            $_REQUEST["field_messages"]["formInscription"]["password"] = "Entrez votre mot de passe";
            $result = FALSE;
        }
        if ($_REQUEST["nom"] == ""){
            $_REQUEST["field_messages"]["formInscription"]["nom"] = "Entrez votre nom ";
            $result = FALSE;
        }
        if ($_REQUEST["prenom"] == ""){
            $_REQUEST["field_messages"]["formInscription"]["prenom"] = "Entrez votre prenom";
            $result = FALSE;
        }
        if ($_REQUEST["adresse"] == ""){
            $_REQUEST["field_messages"]["formInscription"]["adresse"] = "Entrez votre adresse";
            $result = FALSE;
        }
        if ($_REQUEST["telephone"] == ""){
            $_REQUEST["field_messages"]["formInscription"]["telephone"] = "Entrez votre telephone";
            $result = FALSE;
        }
        if ($_REQUEST["email"] == ""){
            $_REQUEST["field_messages"]["formInscription"]["email"] = "Entrez votre e-mail";
            $result = FALSE;
        }
        
        return $result;
    }
    
}
<?php
require_once 'Controlleur/Action.Interface.php';
require_once 'Modeles/Classes/Emploi.php';
require_once 'Modeles/Classes/EmploiDAO.php';
require_once 'Modeles/Classes/QuartierDAO.php';
class ModifierEmploiAction implements Action{
    public function execute() {
        
        $dbQuartier = new QuartierDAO();
        $_REQUEST["quartiers"] = $dbQuartier->findAll();
        
        $idEmployeur = "";
		$idEmploi = "";
		$emploi = new Emploi();
		
        if (!isset($_SESSION)){
            session_start();
            if(isset($_SESSION["connected"])){
                $idEmployeur = $_SESSION["connected"]->getNumeroCompte() And $idEmploi = $emploi->getIdEmploi();
            }
        }
        if (!$this->valide())  //methode de validation
			return "formulaireEmploi";
		
        
        $dbemploi = new EmploiDAO();
        
        //$emploi = new Emploi();
		$emploi->setIdEmploi();
        $emploi->setIdCompteEmployeur($idEmployeur);
        $emploi->setTitreEmploi($_REQUEST["titre"]);
        $emploi->setDescriptionEmploi($_REQUEST["description"]);
        $emploi->setCompagnieEmploi($_REQUEST["compagnie"]);
        $emploi->setNombrePosteEmploi($_REQUEST["nombrePoste"]);
        $emploi->setEmploiACombler($_REQUEST["nombrePoste"]);
        $emploi->setLieuEmploi($_REQUEST["lieu"]);
        $emploi->setIdQuartierEmploi($_REQUEST["quartier"]);
        $emploi->setDateHeureDebutEmploi($_REQUEST["dateDebut"]);
        $emploi->setDateHeureFinEmploi($_REQUEST["dateFin"]);
        
        $dbemploi->update($emploi);
        $redirection = new DefaultAction();
        return $redirection->execute();
    }
    
    public function valide(){
        $result = true;
        if ($_REQUEST["titre"] == ""){
            $_REQUEST["field_messages"]["formEmploi"]["titre"] = "Entrez un titre pour l'emploi";
            $result = FALSE;
        }
        if ($_REQUEST["description"] == ""){
            $_REQUEST["field_messages"]["formEmploi"]["description"] = "Entrez une description";
            $result = FALSE;
        }
        if ($_REQUEST["compagnie"] == ""){
            $_REQUEST["field_messages"]["formEmploi"]["compagnie"] = "Entrez un nom de compagnie ";
            $result = FALSE;
        }
        if ($_REQUEST["nombrePoste"] == ""){
            $_REQUEST["field_messages"]["formEmploi"]["nombrePoste"] = "Entrez un nombre de postes";
            $result = FALSE;
        } elseif(!is_numeric($_REQUEST["nombrePoste"])){
            $_REQUEST["field_messages"]["formEmploi"]["nombrePoste"] = "Entrez un numero";
            $result = FALSE;
        }
        if ($_REQUEST["lieu"] == ""){
            $_REQUEST["field_messages"]["formEmploi"]["lieu"] = "Entrez une adresse";
            $result = FALSE;
        }
        if ($_REQUEST["dateDebut"] == ""){
            $_REQUEST["field_messages"]["formEmploi"]["dateDebut"] = "Entrez une date de debut";
            $result = FALSE;
        }
        if ($_REQUEST["dateFin"] == ""){
            $_REQUEST["field_messages"]["formEmploi"]["dateFin"] = "Entrez une date de fin";
            $result = FALSE;
        }
        
        return $result;
    }
    
}
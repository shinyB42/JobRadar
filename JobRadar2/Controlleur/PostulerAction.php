<?php
require_once 'Controlleur/Action.Interface.php';
require_once 'Modeles/Classes/Postulation.php';
require_once 'Modeles/Classes/PostulationDAO.php';
require_once 'Modeles/Classes/QuartierDAO.php';

class PostulerAction implements Action{
    public function execute() {
        date_default_timezone_set('America/New_York');
        if(!isset($_SESSION)){
            session_start();
            if(isset($_SESSION["connected"])){ //chemin lorsquon est connecte a un compte
                
                
                $idEmploi = $_REQUEST["id"];
                $idCompte= $_SESSION["connected"]->getNumeroCompte();
                $dateNow = date("Y-m-d");
                $postulationDAO = new PostulationDAO();
                $postulation = new Postulation();
                $postulation->setIdEmploi($idEmploi);
                $postulation->setIdCompte($idCompte);
                $postulation->setDateInscrit($dateNow);
                $postulationDAO->create($postulation);
                $dbPosteCombler = new EmploiDAO();
                $dbPosteCombler->updateEmploisDisponibles($idEmploi);
                
                $redirection= new DefaultAction();
                return $redirection->execute();
            }else{ //1ere etape lorqu'on postule sans un compte
                $_SESSION["postulerID"]= $_REQUEST["id"];
                $_REQUEST["postulerTemp"]="true";
                
                
                $redirection = new CreerCompteAction();
                return $redirection->execute();
            }
        // 2eme etape de postule sans compte, apres la creation du compte $_SESSION est set    
        }else{ 
            $idEmploi = $_SESSION["postulerID"];
            $idCompte= $_SESSION["connected"]->getNumeroCompte();
            $dateNow = date("Y-m-d");
            $postulationDAO = new PostulationDAO();
            $postulation = new Postulation();
            $postulation->setIdEmploi($idEmploi);
            $postulation->setIdCompte($idCompte);
            $postulation->setDateInscrit($dateNow);
            $postulationDAO->create($postulation);
            $dbPosteCombler = new EmploiDAO();
            $dbPosteCombler->updateEmploisDisponibles($idEmploi);
            
            $redirection = new DefaultAction();
            return $redirection->execute();
        }
    }
    
}
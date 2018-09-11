<?php
require_once 'Controlleur/Action.Interface.php';
require_once 'Modeles/Classes/Emploi.php';
require_once 'Modeles/Classes/EmploiDAO.php';
require_once 'Modeles/Classes/QuartierDAO.php';
class SupprimerEmploiAction implements Action{
    public function execute() {


        if (!isset($_SESSION))
            session_start();
        if(isset($_SESSION["connected"])){
            $idEmployeur = $_SESSION["connected"]->getNumeroCompte();
        }
        if (ISSET($_REQUEST["id"])){
            $dao = new PostulationDAO();
            $dao->delete($_REQUEST["id"],$idEmployeur);
        } 
        
        if (ISSET($_REQUEST["idEmploi"])){
            $daoEmploi = new EmploiDAO();
            $daoEmploi->delete($_REQUEST["idEmploi"]);
        }
        $redirection = new DetailCompteAction();
        return $redirection->execute();

    }

}
<?php
require_once('./controlleur/Action.interface.php');

class DetailCompteAction implements Action {
	public function execute(){
            
                $dbQuartier = new QuartierDAO();
                $_REQUEST["quartiers"] = $dbQuartier->findAll();
            
                $_REQUEST["activePage"]="details";
                date_default_timezone_set('America/New_York');
                $dateNow = date("Y-m-d");
                if(!isset($_SESSION))
                    session_start();
                
                
                $dbPostulations = new PostulationDAO();
                $dbEmplois = new EmploiDAO();
                $emploisPostulerBientot=[];
                $emploisPostulerActif=[];
                $emploisPostulerPasse=[];
                $postulationsDAO = $dbPostulations->findByCompte($_SESSION["connected"]->getNumeroCompte());
                foreach($postulationsDAO as $postulation){
                    $emploi = $dbEmplois->findById($postulation->getIdEmploi());
                    $dateFin=$emploi->getDateHeureFinEmploi();
                    $dateDebut=$emploi->getDateHeureDebutEmploi();
                    $echeanceFinale = strtotime($dateFin) - strtotime($dateNow);
                    $echeance = strtotime($dateDebut) - strtotime($dateNow);
                    if($echeance>0 and $echeanceFinale>0){
                        array_push($emploisPostulerBientot, $emploi);
                    }else if($echeance<=0 and $echeanceFinale>0){
                        array_push($emploisPostulerActif, $emploi);
                    }else{
                        array_push($emploisPostulerPasse, $emploi);
                    }
                }
                
                $emploiCreerBientot=[];
                $emploiCreerActif=[];
                $emploiCreerPasse=[];
                $EmploisDAO = $dbEmplois->findByIdEmployeur($_SESSION["connected"]->getNumeroCompte());
                foreach ($EmploisDAO as $creer){
                    $dateFin=$creer->getDateHeureFinEmploi();
                    $dateDebut=$creer->getDateHeureDebutEmploi();
                    $echeanceFinale = strtotime($dateFin) - strtotime($dateNow);
                    $echeance = strtotime($dateDebut) - strtotime($dateNow);
                    if($echeance>0 and $echeanceFinale>0){
                        array_push($emploiCreerBientot, $creer);
                    }else if($echeance<=0 and $echeanceFinale>0){
                        array_push($emploiCreerActif, $creer);
                    }else{
                        array_push($emploiCreerPasse, $creer);
                    }
                }
                
                $_REQUEST["Details"]["postulations"]["bientot"] = $emploisPostulerBientot;
                $_REQUEST["Details"]["postulations"]["actif"] = $emploisPostulerActif;
                $_REQUEST["Details"]["postulations"]["passe"] = $emploisPostulerPasse;
                $_REQUEST["Details"]["emplois"]["bientot"] = $emploiCreerBientot;
                $_REQUEST["Details"]["emplois"]["actif"] = $emploiCreerActif;
                $_REQUEST["Details"]["emplois"]["passe"] = $emploiCreerPasse;
                
                
                
                
		return "detailsCompte";
	}
}
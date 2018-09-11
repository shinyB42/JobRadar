<!DOCTYPE html>
<html>
<?php
require_once('./modeles/classes/Emploi.php');
require_once('./modeles/classes/EmploiDAO.php');
require_once('./modeles/classes/Liste.php');
require_once('./modeles/classes/Postulation.php');
require_once('./modeles/classes/PostulationDAO.php');


$dao = new PostulationDAO();
if(!isset($_SESSION)){
    session_start();
}
 $tPostulation= $dao->findById($_SESSION["connected"]->getNumeroCompte());
            $autresPostulation = Array();
            foreach($tPostulation as $postulation) {
                if ($postulation->getIdEmploi() == $_SESSION["connected"]){}
                else {
                    array_push($autresPostulation, $postulation);
                }
            }

$daoEmpoi = new EmploiDAO();

   $tEmpoi= $daoEmpoi->findByIdEmployeur($_SESSION["connected"]->getNumeroCompte());
            $autresEmploi = Array();
            foreach($tEmpoi as $emploi) {
                if ($emploi->getIdEmploi() == $_SESSION["connected"]){}
                else {
                    array_push($autresEmploi, $emploi);
                }
            }					
			
?>
<body>
    <div class="row">
        <div class="col-md-4 col-md-offset-2">
        <h3>Mes postulations</h3>
        <div class="row" id="autresPostulation">
        <?php
            foreach($autresPostulation as $postulation) {
        ?>
			<div>
				  <?=$postulation->getIdEmploi()?>
				  <?=$postulation->getIdCompte()?>
				  <?=$postulation->getDateInscrit()?>
            </div>       
        <?php  
            }
        ?>  
	</div>
<div class="row">
    <div class="row" id="autresPostulation">
        <?php
            foreach($autresEmploi as $emploi) {
        ?>
			<div>
				  <?=$emploi->getIdEmploi()?>
				  <?=$emploi->getIdCompteEmployeur()?>
				  <?=$emploi->getDescriptionEmploi()?>
				  <?=$emploi->getCompagnieEmploi()?>
				  <?=$emploi->getNombrePosteEmploi()?>
				  <?=$emploi->getEmploiACombler()?>
				  <?=$emploi->getIdQuartierEmploi()?>
				  <?=$emploi->getDateHeureDebutEmploi()?>
				  <?=$emploi->getDateHeureFinEmploi()?>  
            </div>
                 
                  
        <?php  
            }
        ?>  
	</div>


	
  </body>
</html>      
        
      





           
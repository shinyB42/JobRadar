<?php
include_once 'Modeles/Classes/Database.php';
include_once 'Modeles/Classes/Emploi.php';
include_once 'Modeles/Classes/Liste.php';

class EmploiDAO{
    public function create($object){
        $db = Database::getInstance();
        $pstmt = $db->prepare("INSERT INTO emploi values (:idEmploi, :idCompteEmployeur,:titreEmploi,:descriptionEmploi,:compagnieEmploi,:nombrePosteEmploi,:emploiACombler,:lieuEmploi,:idQuartierEmploi,:dateHeureDebutEmploi,:dateHeureFinEmploi)");
        return $pstmt->execute(array(
                ':idEmploi' => $object->getIdEmploi(),
                ':idCompteEmployeur' => $object->getIdCompteEmployeur(),
                ':titreEmploi' => $object->getTitreEmploi(),
                ':descriptionEmploi' => $object->getDescriptionEmploi(),
                ':compagnieEmploi' => $object->getCompagnieEmploi(),
                ':nombrePosteEmploi' => $object->getNombrePosteEmploi(),
                ':emploiACombler' => $object->getEmploiACombler(),
                ':lieuEmploi' => $object->getLieuEmploi(),
                ':idQuartierEmploi' => $object->getIdQuartierEmploi(),
                ':dateHeureDebutEmploi' => $object->getDateHeureDebutEmploi(),
                ':dateHeureFinEmploi' => $object->getDateHeureFinEmploi()
        ));
    }
    
    public function findAll(){
        $db = Database::getInstance();
        $emplois = [];
        $pstmt = $db->prepare("SELECT * FROM emploi");
        $pstmt->execute();
        while($result = $pstmt->fetch(PDO::FETCH_OBJ)){
            $emploi = new Emploi();
            $emploi->loadFromObject($result);
            array_push($emplois, $emploi);
        }
        Database::close();
        return $emplois;
    }
    
    public function findById($idEmploi){
        $db = Database::getInstance();
        $pstmt = $db->prepare("SELECT * FROM emploi WHERE idEmploi = :idEmploi");
        $pstmt->execute(array(':idEmploi' => $idEmploi));
        if ($result = $pstmt->fetch(PDO::FETCH_OBJ)){
            $emploi = new Emploi();
            $emploi->loadFromObject($result);
            $pstmt->closeCursor();
            return $emploi;
        }
        return null;
    }
	
	
    public function findByIdEmployeur($idCompteEmployeur){
        $db = Database::getInstance();
		$emplois = [];
        $pstmt = $db->prepare("SELECT * FROM emploi WHERE idCompteEmployeur = :idCompteEmployeur");
        $pstmt->execute(array(':idCompteEmployeur' => $idCompteEmployeur));
        while($result = $pstmt->fetch(PDO::FETCH_OBJ)){
            $emploi = new Emploi();
            $emploi->loadFromObject($result);
            array_push($emplois, $emploi);
        }
        Database::close();
        return $emplois;
    
    }
    
    public function update($object){
        $db = Database::getInstance();
        $pstmt = $db->prepare("UPDATE emploi SET idCompteEmployeur = :idCompteEmployeur, titreEmploi = :titreEmploi, descriptionEmploi = :descriptionEmploi, compagnieEmploi = :compagnieEmploi, nombrePosteEmploi = :nombrePosteEmploi, emploiACombler = :emploiACombler, lieuEmploi = :lieuEmploi, idQuartierEmploi = :idQuartierEmploi, dateHeureDebutEmploi = :dateHeureDebutEmploi, dateHeureFinEmploi = :dateHeureFinEmploi  WHERE idEmploi = :idEmploi");
        $result = $pstmt->execute(array(
            ':idEmploi' => $object->getIdEmploi(),
            ':idCompteEmployeur' => $object->getIdCompteEmployeur(),
            ':titreEmploi' => $object->getTitreEmploi(),
            ':descriptionEmploi' => $object->getDescriptionEmploi(),
            ':compagnieEmploi' => $object->getCompagnieEmploi(),
            ':nombrePosteEmploi' => $object->getNombrePosteEmploi(),
            ':emploiACombler' => $object->getEmploiACombler(),
            ':lieuEmploi' => $object->getLieuEmploi(),
            ':idQuartierEmploi' => $object->getIdQuartierEmploi(),
            ':dateHeureDebutEmploi' => $object->getDateHeureDebutEmploi(),
            ':dateHeureFinEmploi' => $object->getDateHeureFinEmploi()
        ));
        Database::close();
        return $result;
    }
    
    
    public function updateEmploisDisponibles($idEmploi){
        $db = Database::getInstance();
        $pstmt = $db->prepare("UPDATE emploi SET emploiACombler = emploiACombler - 1 WHERE idEmploi = :idEmploi");
        $result = $pstmt->execute(array(':idEmploi' => $idEmploi));
        Database::close();
        return $result;
    }
            
    
    public function delete($idEmploi){
        $db = Database::getInstance();
        $pstmt = $db->prepare("DELETE FROM emploi WHERE idEmploi = :idEmploi");
        return $pstmt->execute(array(':idEmploi' => $idEmploi));
    }
            
}

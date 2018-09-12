<?php
include_once 'Modeles/Classes/Database.php';
include_once 'Modeles/Classes/Postulation.php';
include_once 'Modeles/Classes/Liste.php';

class PostulationDAO{
	
	public function create($object){
        $db = Database::getInstance();
        $pstmt = $db->prepare("INSERT INTO postulation values (:idEmploi,"
                . ":idCompte,"
                . ":dateInscrit)");
        return $pstmt->execute(array(
                ':idEmploi' => $object->getIdEmploi(),
                ':idCompte' => $object->getIdCompte(),
                ':dateInscrit' => $object->getDateInscrit(),          
        ));
    }
    
    public function findAll(){
        $db = Database::getInstance();
        $postulations = [];
        $pstmt = $db->prepare("SELECT * FROM postulation");
        $pstmt->execute();
        while($result = $pstmt->fetch(PDO::FETCH_OBJ)){
            $postulation = new Postulation();
            $postulation->loadFromObject($result);
            array_push($postulations, $postulation);
        }
        Database::close();
        return $postulations;
    }
    
    public function findById($idEmploi){
		$postulations = [];
        $db = Database::getInstance();
        $pstmt = $db->prepare("SELECT * FROM postulation WHERE idEmploi = :idEmploi");
        $pstmt->execute(array(':idEmploi' => $idEmploi));
        while($result = $pstmt->fetch(PDO::FETCH_OBJ)){
            $postulation = new Postulation();
            $postulation->loadFromObject($result);
            array_push($postulations, $postulation);
        }
        Database::close();
        return $postulations;
    }
    
    public function findByCompte($idCompte){
		$postulations = [];
        $db = Database::getInstance();
        $pstmt = $db->prepare("SELECT * FROM postulation WHERE idCompte = :idCompte");
        $pstmt->execute(array(':idCompte' => $idCompte));
        while($result = $pstmt->fetch(PDO::FETCH_OBJ)){
            $postulation = new Postulation();
            $postulation->loadFromObject($result);
            array_push($postulations, $postulation);
        }
        Database::close();
        return $postulations;
    }
    
    
    public function findBy2Id($idEmploi, $idCompte){
        $db = Database::getInstance();
        $pstmt = $db->prepare("SELECT * FROM postulation "
                . "WHERE idEmploi = :idEmploi"
                . "AND idCompte = :idCompte"
                );
        $pstmt->execute(array(
                ':idEmploi' => $idEmploi,
                ':idCompte' => $idCompte
            ));
        if ($result = $pstmt->fetch(PDO::FETCH_OBJ)){
            $postulation = new Postulation();
            $postulation->loadFromObject($result);
            $pstmt->closeCursor();
            return TRUE;
        }
        return FALSE;
    }
	
	public function update($object){
        $db = Database::getInstance();
        $pstmt = $db->prepare("UPDATE postulation SET idCompte = :idCompte,"
                . " dateInscrit = :dateInscrit"
                . " WHERE idEmploi = :idEmploi"
                );
        return $pstmt->execute(array(
            ':idEmploi' => $object->getIdEmploi(),
            ':idCompte' => $object->getIdCompte(),
            ':dateInscrit' => $object->getDateInscrit() 
        ));
    }
	public function delete($idEmploi, $idCompte){
        $db = Database::getInstance();
        $pstmt = $db->prepare("DELETE FROM postulation "
                . "WHERE idEmploi = :idEmploi "
                . "AND idCompte = :idCompte"
                );
        return $pstmt->execute(array(
                    ':idEmploi'=>$idEmploi,
                    ':idCompte'=>$idCompte
                ));
    }
    
}
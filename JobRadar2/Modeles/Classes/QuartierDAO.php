<?php
include_once 'Modeles/Classes/Database.php';
include_once 'Modeles/Classes/Quartier.php';
include_once 'Modeles/Classes/Liste.php';

class QuartierDAO{
    
    public function findAll(){
        $db = Database::getInstance();
        $quartiers = [];
        $pstmt = $db->prepare("SELECT * FROM quartier");
        $pstmt->execute();
        while($result = $pstmt->fetch(PDO::FETCH_OBJ)){
            $quartier = new Quartier();
            $quartier->loadFromObject($result);
            array_push($quartiers, $quartier);
        }
        Database::close();
        return $quartiers;
    }
    
    public function findById($idQuartier){
        $db = Database::getInstance();
        $pstmt = $db->prepare("SELECT * FROM quartier "
                . "WHERE idQuartier = :idQuartier"
                );
        $pstmt->execute(array(':idQuartier' => $idQuartier));
        if ($result = $pstmt->fetch(PDO::FETCH_OBJ)){
            $quartier = new Quartier();
            $quartier->loadFromObject($result);
            $pstmt->closeCursor();
            return $quartier;
        }
        return null;
    }
    
}
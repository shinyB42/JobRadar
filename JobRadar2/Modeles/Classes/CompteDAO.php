<?php
include_once 'Modeles/Classes/Database.php';
include_once 'Modeles/Classes/Compte.php';
include_once 'Modeles/Classes/Liste.php';

class CompteDAO{
    public function create($object){
        $db = Database::getInstance();
        $pstmt = $db->prepare("INSERT INTO compte values (:numeroCompte, "
                . ":username,"
                . ":password,"
                . ":nomCompte,"
                . ":prenomCompte,"
                . ":adresseCompte,"
                . ":idQuartierCompte,"
                . ":telephoneCompte,"
                . ":emailCompte)"
                );
        return $pstmt->execute(array(
                ':numeroCompte' => $object->getNumeroCompte(),
                ':username' => $object->getUsername(),
                ':password' => $object->getPassword(),
                ':nomCompte' => $object->getNomCompte(),
                ':prenomCompte' => $object->getPrenomCompte(),
                ':adresseCompte' => $object->getAdresseCompte(),
                ':idQuartierCompte' => $object->getIdQuartierCompte(),
                ':telephoneCompte' => $object->getTelephoneCompte(),
                ':emailCompte' => $object->getEmailCompte()
        ));
    }
    
    public function findAll(){
        $db = Database::getInstance();
        $comptes = [];
        $pstmt = $db->prepare("SELECT * FROM compte");
        $pstmt->execute();
        while($result = $pstmt->fetch(PDO::FETCH_OBJ)){
            $compte = new Compte();
            $compte->loadFromObject($result);
            array_push($comptes, $compte);
        }
        Database::close();
        return $comptes;
    }
    
    public function findByUsername($username){
        $db = Database::getInstance();
        $pstmt = $db->prepare("SELECT * FROM compte WHERE username = :username");
        $pstmt->execute(array(':username' => $username));
        if ($result = $pstmt->fetch(PDO::FETCH_OBJ)){
            $compte = new Compte();
            $compte->loadFromObject($result);
            $pstmt->closeCursor();
            return $compte;
        }
        return null;
    }
    
    public function findByNumeroCompte($numeroCompte){
        $db = Database::getInstance();
        $pstmt = $db->prepare("SELECT * FROM compte WHERE numeroCompte = :numeroCompte");
        $pstmt->execute(array(':numeroCompte' => $numeroCompte));
        if ($result = $pstmt->fetch(PDO::FETCH_OBJ)){
            $compte = new Compte();
            $compte->loadFromObject($result);
            $pstmt->closeCursor();
            return $compte;
        }
        return null;
    }
    public function update($object){
        $db = Database::getInstance();
        $pstmt = $db->prepare("UPDATE compte SET username = :username,"
                . " password = :password,"
                . " nomCompte = :nomCompte,"
                . " prenomCompte = :prenomCompte,"
                . " adresseCompte = :adresseCompte,"
                . " idQuartierCompte = :idQuartierCompte,"
                . " telephoneCompte = :telephoneCompte,"
                . " emailCompte = :emailCompte "
                . "WHERE numeroCompte = :numeroCompte"
                );
        return $pstmt->execute(array(
            ':numeroCompte'=>$object->getNumeroCompte(),
            ':username'=>$object->getUsername(),
            ':password' => $object->getPassword(),
            ':nomCompte' => $object->getNomCompte(),
            ':prenomCompte' => $object->getPrenomCompte(),
            ':adresseCompte' => $object->getAdresseCompte(),
            ':idQuartierCompte' => $object->getIdQuartierCompte(),
            ':telephoneCompte' => $object->getTelephoneCompte(),
            ':emailCompte' => $object->getEmailCompte()
        ));
    }
    
    public function delete($numeroCompte){
        $db = Database::getInstance();
        $pstmt = $db->prepare("DELETE FROM compte WHERE numeroCompte = :numeroCompte");
        return $pstmt->execute(array(':numeroCompte'=>$numeroCompte));
    }
            
}

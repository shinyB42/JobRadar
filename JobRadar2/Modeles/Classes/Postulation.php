<?php
class Postulation{
    private $idEmploi;
    private $idCompte;
    private $dateInscrit;
    
    
    function getIdEmploi() {
        return $this->idEmploi;
    }

    function getIdCompte() {
        return $this->idCompte;
    }

    function getDateInscrit() {
        return $this->dateInscrit;
    }

    function setIdEmploi($idEmploi) {
        $this->idEmploi = $idEmploi;
    }

    function setIdCompte($idCompte) {
        $this->idCompte = $idCompte;
    }

    function setDateInscrit($dateInscrit) {
        $this->dateInscrit = $dateInscrit;
    }

    public function __toString() {
        return "Postulation{".
                $this->idEmploi.",".
                $this->idCompte.",".
                $this->dateInscrit."}";
    }
    
    public function loadFromObject($result){
        $this->idEmploi = $result->idEmploi;
        $this->idCompte = $result->idCompte;
        $this->dateInscrit = $result->dateInscrit;
    }

}
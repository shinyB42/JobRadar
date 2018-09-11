<?php
class Emploi{
    private $idEmploi;
    private $idCompteEmployeur;
    private $titreEmploi;
    private $descriptionEmploi;
    private $compagnieEmploi;
    private $nombrePosteEmploi;
    private $emploiACombler;
    private $lieuEmploi;
    private $idQuartierEmploi;
    private $dateHeureDebutEmploi;
    private $dateHeureFinEmploi;
    
    
    
    function getIdEmploi() {
        return $this->idEmploi;
    }

    function getIdCompteEmployeur() {
        return $this->idCompteEmployeur;
    }

    function getTitreEmploi() {
        return $this->titreEmploi;
    }

    function getDescriptionEmploi() {
        return $this->descriptionEmploi;
    }

    function getCompagnieEmploi() {
        return $this->compagnieEmploi;
    }
  
    function getNombrePosteEmploi() {
        return $this->nombrePosteEmploi;
    }
    
    function getEmploiACombler() {
        return $this->emploiACombler;
    }

    
    function getLieuEmploi() {
        return $this->lieuEmploi;
    }

    function getIdQuartierEmploi() {
        return $this->idQuartierEmploi;
    }

    function getDateHeureDebutEmploi() {
        return $this->dateHeureDebutEmploi;
    }

    function getDateHeureFinEmploi() {
        return $this->dateHeureFinEmploi;
    }

    function setIdEmploi($idEmploi) {
        $this->idEmploi = $idEmploi;
    }

    function setIdCompteEmployeur($idCompteEmployeur) {
        $this->idCompteEmployeur = $idCompteEmployeur;
    }

    function setTitreEmploi($titreEmploi) {
        $this->titreEmploi = $titreEmploi;
    }

    function setDescriptionEmploi($descriptionEmploi) {
        $this->descriptionEmploi = $descriptionEmploi;
    }

    function setCompagnieEmploi($compagnieEmploi) {
        $this->compagnieEmploi = $compagnieEmploi;
    }
    
    function setNombrePosteEmploi($nombrePosteEmploi) {
        $this->nombrePosteEmploi = $nombrePosteEmploi;
    }

    function setEmploiACombler($emploiACombler) {
        $this->emploiACombler = $emploiACombler;
    }

    function setLieuEmploi($lieuEmploi) {
        $this->lieuEmploi = $lieuEmploi;
    }

    function setIdQuartierEmploi($idQuartierEmploi) {
        $this->idQuartierEmploi = $idQuartierEmploi;
    }

    function setDateHeureDebutEmploi($dateHeureDebutEmploi) {
        $this->dateHeureDebutEmploi = $dateHeureDebutEmploi;
    }

    function setDateHeureFinEmploi($dateHeureFinEmploi) {
        $this->dateHeureFinEmploi = $dateHeureFinEmploi;
    }

    public function __toString() {
        return "Emploi{"
                .$this->idEmploi.","
                .$this->idCompteEmployeur.","
                .$this->titreEmploi.","
                .$this->descriptionEmploi.","
                .$this->compagnieEmploi.","
                .$this->nombrePosteEmploi.","
                .$this->emploiACombler.","
                .$this->lieuEmploi.","
                .$this->idQuartierEmploi.","
                .$this->dateHeureDebutEmploi.","
                .$this->dateHeureFinEmploi
        ."}";          
    }
    
    public function loadFromObject($result){
        $this->idEmploi = $result->idEmploi;
        $this->idCompteEmployeur = $result->idCompteEmployeur;
        $this->titreEmploi = $result->titreEmploi;
        $this->descriptionEmploi = $result->descriptionEmploi;
        $this->compagnieEmploi = $result->compagnieEmploi;
        $this->nombrePosteEmploi = $result->nombrePosteEmploi;
        $this->emploiACombler = $result->nombrePosteEmploi;
        $this->lieuEmploi = $result->lieuEmploi;
        $this->idQuartierEmploi = $result->idQuartierEmploi;
        $this->dateHeureDebutEmploi = $result->dateHeureDebutEmploi;
        $this->dateHeureFinEmploi = $result->dateHeureFinEmploi;
    }
            

}

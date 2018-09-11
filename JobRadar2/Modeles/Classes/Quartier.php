<?php
class Quartier{
    private $idQuartier;
    private $nomQuartier;
    private $coordonneeQuartier;
    
    
    function getIdQuartier() {
        return $this->idQuartier;
    }

    function getNomQuartier() {
        return $this->nomQuartier;
    }

    function getCoordonneeQuartier() {
        return $this->coordonneeQuartier;
    }

    function setIdQuartier($idQuartier) {
        $this->idQuartier = $idQuartier;
    }

    function setNomQuartier($nomQuartier) {
        $this->nomQuartier = $nomQuartier;
    }

    function setCoordonneeQuartier($coordonneeQuartier) {
        $this->coordonneeQuartier = $coordonneeQuartier;
    }

    public function __toString() {
        return "Quartier{".$this->idQuartier.",".$this->nomQuartier.",".$this->coordonneeQuartier."}";
    }
    
    public function loadFromObject($result){
        $this->idQuartier = $result->idQuartier;
        $this->nomQuartier = $result->nomQuartier;
        $this->coordonneeQuartier = $result->coordonneeQuartier;
    }

}
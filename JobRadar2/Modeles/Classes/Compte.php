<?php
class Compte{
    private $numeroCompte;
    private $username;
    private $password;
    private $nomCompte;
    private $prenomCompte;
    private $adresseCompte;
    private $idQuartierCompte;
    private $telephoneCompte;
    private $emailCompte;
    
    
    function getNumeroCompte() {
        return $this->numeroCompte;
    }

    function getUsername() {
        return $this->username;
    }

    function getPassword() {
        return $this->password;
    }

    function getNomCompte() {
        return $this->nomCompte;
    }

    function getPrenomCompte() {
        return $this->prenomCompte;
    }

    function getAdresseCompte() {
        return $this->adresseCompte;
    }

    function getIdQuartierCompte() {
        return $this->idQuartierCompte;
    }

    function getTelephoneCompte() {
        return $this->telephoneCompte;
    }

    function getEmailCompte() {
        return $this->emailCompte;
    }

    function setNumeroCompte($numeroCompte) {
        $this->numeroCompte = $numeroCompte;
    }

    function setUsername($username) {
        $this->username = $username;
    }

    function setPassword($password) {
        $this->password = $password;
    }

    function setNomCompte($nomCompte) {
        $this->nomCompte = $nomCompte;
    }

    function setPrenomCompte($prenomCompte) {
        $this->prenomCompte = $prenomCompte;
    }

    function setAdresseCompte($adresseCompte) {
        $this->adresseCompte = $adresseCompte;
    }

    function setIdQuartierCompte($idQuartierCompte) {
        $this->idQuartierCompte = $idQuartierCompte;
    }

    function setTelephoneCompte($telephoneCompte) {
        $this->telephoneCompte = $telephoneCompte;
    }

    function setEmailCompte($emailCompte) {
        $this->emailCompte = $emailCompte;
    }
    
    public function __toString() {
       return "Compte{"
           .$this->numeroCompte.","
           .$this->username.","
           .$this->password.","
           .$this->nomCompte.","
           .$this->prenomCompte.","
           .$this->adresseCompte.","
           .$this->idQuartierCompte.","
           .$this->telephoneCompte.","
           .$this->emailCompte
       ."}";
    }

    public function loadFromObject($result){
        $this->numeroCompte = $result->numeroCompte;
        $this->username = $result->username;
        $this->password = $result->password;
        $this->nomCompte = $result->nomCompte;
        $this->prenomCompte = $result->prenomCompte;
        $this->adresseCompte = $result->adresseCompte;
        $this->idQuartierCompte = $result->idQuartierCompte;
        $this->telephoneCompte = $result->telephoneCompte;
        $this->emailCompte = $result->emailCompte;
        
        
       
    }

}

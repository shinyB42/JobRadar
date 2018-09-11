<?php
require_once 'Modeles/Classes/CompteDAO.php';
require_once 'Modeles/Classes/EmploiDAO.php';
class Listing{
    private $Compte;
    private $Emploi;
    private $prioritee;
    
    function getCompte() {
        return $this->Compte;
    }

    function getEmploi() {
        return $this->Emploi;
    }

    function getPrioritee() {
        return $this->prioritee;
    }

    function setCompte($idCompte) {
        $db= new CompteDAO();
        $this->Compte = $db->findByNumeroCompte($idCompte);
    }

    function setEmploi($idEmploi) {
        $db= new EmploiDAO();
        $this->Emploi = $db->findById($idEmploi);
    }

    function setPrioritee($prioritee) {
        $this->prioritee = $prioritee;
    }


    
   static function cmp_obj($a, $b) //source: http://php.net/manual/en/function.usort.php
    {
        $al = strtolower($a->prioritee);
        $bl = strtolower($b->prioritee);
        if ($al == $bl) {
            return 0;
        }
        return ($al > $bl) ? +1 : -1;
    }
    
}
<?php 

Class typeUtilisateur{
    private $IdUtilisateur;
    private $Description;   
   

    public function __construct($unIdUtilisateur,$uneDescription) {
        $this->IdUtilisateur=$unIdUtilisateur;
        $this->Description=$uneDescription;

    }

    public function getIdTypeU()
    {
         return $this->IdUtilisateur;
    }

    public function getDescriptionTypeU() {
        return  $this->Description ;

    }


?>
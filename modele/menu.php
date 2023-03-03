<?php 

Class menu{
    private $Idmenu;  
   

    public function __construct($Idmenu) {
        $this->Idmenu=$Idmenu;

    }

    public function getIdMenu()
    {
         return $this->Idmenu;
    }

   


?>
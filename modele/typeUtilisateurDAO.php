<?php

include_once('connexionDAO.php');

include_once('typeUtilisateur.php');

class typeUtilisateurDAO{
 
 // FONCTION QUI PERMET DE CHARGER LE TYPE D'UTILISATEUR
    public static function getTypeUDAO(){
        $resultat = array();
        $maConnexion = connexionDAO::connexionPDO();
        $request = $maConnexion->prepare("select * from type_utilisateur ");
        $request->execute();
        $ligne=$request->fetchAll();
        foreach($ligne as $key => $value){
            $typeU = new type_utilisateur ($value['id'],$value['Description']);
            $resultat[]=$typeU;
        }
         return $resultat;
    }
 
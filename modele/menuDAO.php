
<?php

include_once('connexionDAO.php');

include_once('menu.php');
   // FONCTION QUI PERMET DE CHARGER lE MENU A PARTIR DE SON IDENTIFIANT
    public static function getmenuDAO($Idmenu)
    {
        $connect = connexionDAO::connexionPDO();
        $request = $connect->prepare("select * from menu
                                       where Idmenu = :Idmenu");
        $request->bindValue(':Idmenu', $Idmenu, PDO::PARAM_STR);
        $request->execute();
        $ligne=$request->fetch(PDO::FETCH_ASSOC);
           
            $famille =  medicamentDAO::chargerFamilleMedicament(trim($ligne['idMedicament']));
 
            $menu = new menu($ligne['Idmenu']);
  
         return $medicament;
    }


?>
<?php
switch ($mode){
case "ajouter" :
    {
        $obj = new Roles($_POST);
        RolesManager::add($obj);
        break;
    }
case "details" :
    {

        break;
    }
case "modifier" :
    {

    break;
    }
case "supprimer" :
    {

    break;
    }
}
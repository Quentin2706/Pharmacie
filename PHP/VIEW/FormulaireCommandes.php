<?php
$mode = $_GET['mode'];
$listeProduits = ProduitsManager::getList();
$listeUsers = UsersManager::getList();
switch ($mode){
case "ajouter" :
    {
        echo '<form action="index.php?page=ActionCommandes&mode=ajouter" method="POST">';

        break;
    }
case "details" :
    {
        $idRecherche = $_GET['id'];
        $id = CommandesManager::findById($idRecherche);
        echo '<form method="POST" >';
        break;
    }
case "modifier" :
    {
        $idRecherche = $_GET['id'];
        $id = CommandesManager::findById($idRecherche);
        echo '<form action="index.php?page=ActionCommandes&mode=modifier" method="POST">';
    break;
    }
case "supprimer" :
    {
        echo '<form action="index.php?page=ActionCommandes&mode=supprimer" method="POST">';
    break;
    }
}
var_dump($_GET['id']);
if (isset($_GET['id']))
{
$choix = CommandesManager::findById($_GET['id']);
}
?>

<?php if($mode != "ajouter") echo  '<input name= "idCommande" value="'.$choix->getIdCommande().'"type= "hidden">';?>
    <div class="colonne">
        <div>
        <div class="centre size">Date de Commande :</div>
        <input class="libelle" type="date" name="dateCommande" <?php if($mode != "ajouter") echo 'value= "'.$choix->getdateCommande().'"';if($mode=="details" || $mode=="supprimer") echo '" disabled'; ?>/>
        <div class="espace"></div>
    </div>
    <div>
        <div class="centre size">Date de reception :</div>
        <input class="libelle" type="date" name="dateReception" <?php if($mode != "ajouter") echo 'value= "'.$choix->getdateReception().'"';if($mode=="details" || $mode=="supprimer") echo '" disabled'; ?>/>
        <div class="espace"></div>
    </div>
    <select class="libelle marginLight" name="idProduit">

        <?php 
        foreach ( $listeProduits as $unProduit )
        {
            $sel = "";
            if ($unProduit->getIdProduit()==$id->getIdProduit()){
                $sel="selected";
            }
            echo '<option value="'.$unProduit->getIdProduit().'"'.$sel; if($mode=="details" || $mode=="supprimer") echo'disabled'; echo '>'.$unProduit->getNomProduit().'</option>';
        }
        ?>

        </select>
        <select class="libelle marginLight" name="idUser">

        <?php 
        foreach ( $listeUsers as $unUser )
        {
            $sel = "";
            if ($unUser->getIdUser()==$id->getIdUser()){
                $sel="selected";
            }
            echo '<option value="'.$unUser->getIdUser().'"'.$sel; if($mode=="details" || $mode=="supprimer") echo'disabled'; echo '>'.$unUser->getNomUser().' '.$unUser->getPrenomUser().' </option>';
        }
        ?>

        </select>
    </div>
    <?php
    switch ($mode) {
		case "ajouter":
			{
                echo '<div><button class="libelle" type="submit" value="Ajouter">Ajouter</button>'; 
                break;
			}
		case "modifier":
			{
                echo '<div><button class="libelle" type="submit" value="Modifier">Modifier</button>'; 
                break;
			}
		case "supprimer":
			{
                echo '<div><button class="libelle" type="submit" value="Supprimer">Effacer</button>';
                break;
			}
        
        default:
        {
            echo '<div>';
        }
    }
// dans tous les cas, on met le bouton annuler
    ?>
    <button class="libelle" ><a href="index.php?page=ListeCommandes">Annuler</a></button>
</div>

</form>
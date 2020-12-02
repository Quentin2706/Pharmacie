<?php
$mode = $_GET['mode'];

switch ($mode){
case "ajouter" :
    {
        echo '<form action="index.php?page=ActionRoles&mode=ajouter" method="POST">';

        break;
    }
case "details" :
    {
        echo '<form method="POST" >';
        break;
    }
case "modifier" :
    {
        echo '<form action="index.php?page=ActionRoles&mode=modifier" method="POST">';
    break;
    }
case "supprimer" :
    {
        echo '<form action="index.php?page=ActionRoles&mode=supprimer" method="POST">';
    break;
    }
}

if (isset($_GET['id']))
{
$choix = RolesManager::findById($_GET['id']);
}
?>

<?php if($mode != "ajouter") echo  '<input name= "idRole" value="'.$choix->getIdRole().'"type= "hidden">';?>
    <div class="colonne">
        <div>
        <div class="centre size">Nom :</div>
        <input class="libelle" name="nomRole" <?php if($mode != "ajouter") echo 'value= "'.$choix->getNomRole().'"';if($mode=="details" || $mode=="supprimer") echo '" disabled'; ?>/>
        <div class="espace"></div>
    </div>
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
    <button class="libelle" ><a href="index.php?codePage=listeRoles">Annuler</a></button>
</div>

</form>
<?php

// $mode = $_GET["mode"];

// if ($mode == "ajout")
//  {
//     $listeLieuxDeStockage=LieuxdestockagesManager::getList();
//     echo '<form method="POST" action="index.php?page=actionLieuxDeStockages&mode=ajouter">

//     <div class="contenu colonne">
//         <div class="colonne marginLight">
//             <div class="titreDescriptif centre">
//             Libelle Lieux De Stockage
//             </div>
//             <div>
//                 <div class="espace"></div>
//                 <input class="libelle" type="text" name="libelleLieuxDeStockage" placeholder="Libelle Lieux De Stockage"/>
//                 <div class="espace"></div>
//             </div>
//         </div>
//         <div class="colonne marginLight">
//             <div class="titreDescriptif centre">
//             Rayon
//             </div>
//             <div>
//                 <div class="espace"></div>
//                 <input class="libelle" type="text" name="Rayon" placeholder="Rayon"/>
//                 <div class="espace"></div>
//             </div>
//         </div>
//         <div class="colonne marginLight">
//         <div class="titreDescriptif centre">
//             Etagere
//             </div>
//             <div>
//                 <div class="espace"></div>
//                 <input class="libelle" type="text" name="Etagere" placeholder="Numero Etagere"/>
//                 <div class="espace"></div>
//             </div>
//         </div>
//     </div>';
    
//     echo '<div>
//     <div class="espace"></div>
       
//         <div class="espace"></div>
//         </div>
    
//         </div>
//             <div>
//                 <div class="return marginLight"><a class="centre" href="index.php?page=ListeLieuxdeStockages">Retour</a></div>
//                 <input type="submit" class="ajouter marginLight centre" name="submit" value="Ajouter"/>
//             </div>
//     </form>';
    
//     } 


$mode = $_GET['mode'];

switch ($mode){
case "ajouter" :
    {
        echo '<form action="index.php?page=ActionLieuxDeStockages&mode=ajouter" method="POST">';

        break;
    }
case "details" :
    {
        echo '<form method="POST" >';
        break;
    }
case "modifier" :
    {
        echo '<form action="index.php?page=ActionLieuxDeStockages&mode=modifGenre" method="POST">';
    break;
    }
case "supprimer" :
    {
        echo '<form action="index.php?page=ActionLieuxDeStockages&mode=delGenre" method="POST">';
    break;
    }
}

if (isset($_GET['id']))
{
$choix = LieuxdestockagesManager::findById($_GET['id']);
}
?>

<?php if($mode != "ajouter") echo  '<input name= "idLieuxDeStockage" value="'.$choix->getIdLieuxDeStockage().'"type= "hidden">';?>
    <div class="colonne">
        <div>
        <div class="centre size">Libelle Lieux De Stockage :</div>
        <input class="libelle" name="libelleLieuxDeStockage" <?php if($mode != "ajouter") echo 'value= "'.$choix->getLibelleLieuxDeStockage().'"';if($mode=="details" || $mode=="supprimer") echo '" disabled'; ?>/>
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
                echo '<div><button type="submit" value="Modifier">Modifier</button>'; 
                break;
			}
		case "supprimer":
			{
                echo '<div><button type="submit" value="Supprimer">Effacer</button>';
                break;
			}
        
        default:
        {
            echo '<div>';
        }
    }
// dans tous les cas, on met le bouton annuler
    ?>
    <button class="libelle" ><a href="index.php?page=ListeLieuxdeStockages">Annuler</a></button>
</div>

</form>
<?php

$mode = $_GET['mode'];

$listeCategories = CategoriesManager::getList();
$listeLieuxDeStockage = LieuxdestockagesManager::getList();

switch ($mode)
{
    case "ajouter":
        {
            echo '<form method="POST" action="index.php?page=ActionProduits&mode=ajouter">';
            break;
        }
    case "details":
        {
            echo '<form method="POST" >';
            $idRecherche = $_GET['id'];
            $id = ProduitsManager::findById($idRecherche);
            break;
        }
    case "modifier":
        {
            echo '<form method="POST" action="index.php?page=ActionProduits&mode=modifier">';
            $idRecherche = $_GET['id'];
            $id = ProduitsManager::findById($idRecherche);
            break;
        }
    case "supprimer":
        {
            echo '<form method="POST" action="index.php?page=ActionProduits&mode=supprimer">';
            break;
        }
}

if (isset($_GET['id']))
{
    $choix = ProduitsManager::findById($_GET['id']);
}
?>

<?php if($mode != "ajouter") echo  '<input name= "idProduit" value="'.$choix->getIdProduit().'" type= "hidden">';?>

    <div class="contenu colonne">
        <div class="colonne marginLight">
            <div class="titreDescriptif centre">
                Nom du Produit
            </div>
            <div>
                <div class="espace"></div>
                <input class="libelle" type="text" name="nomProduit" placeholder="Nom du Produit" value="<?php if ($mode != "ajouter") echo $choix->getNomProduit() ;?>"/>
                <div class="espace"></div>
            </div>
        </div>
        <div class="colonne marginLight">
            <div class="titreDescriptif centre">
                Description du Produit
            </div>
            <div>
                <div class="espace"></div>
                <input class="libelle" type="text" name="descriptionProduit" placeholder="Description du Produit" value="<?php if ($mode != "ajouter") echo $choix->getDescriptionProduit() ;?>"/>
                <div class="espace"></div>
            </div>
        </div>
        <div class="colonne marginLight">
            <div class="titreDescriptif centre">
                Restriction du Produit
            </div>
            <div>
                <div class="espace"></div>
                <input class="libelle" type="text" name="restrictionProduit" placeholder="Restriction du Produit" value="<?php if ($mode != "ajouter") echo $choix->getRestrictionProduit() ;?>"/>
                <div class="espace"></div>
            </div>
        </div>
        <div class="colonne marginLight">
            <div class="titreDescriptif centre">
                Date de Peremption du Produit
            </div>
            <div>
                <div class="espace"></div>
                <input class="libelle" type="date" name="datePeremptionProduit" placeholder="Date de Peremption" value="<?php if ($mode != "ajouter") echo $choix->getDatePeremptionProduit() ;?>"/>
                <div class="espace"></div>
            </div>
        </div>
        <div class="colonne marginLight">
            <div class="titreDescriptif centre">
                Prix du Produit
            </div>
            <div>
                <div class="espace"></div>
                <input class="libelle" type="text" name="prixProduit" placeholder="Prix du Produit" value="<?php if ($mode != "ajouter") echo $choix->getPrixProduit() ;?>"/>
                <div class="espace"></div>
            </div>
        </div>
        <div class="colonne marginLight">
            <div class="titreDescriptif centre">
                Quantite du Produit
            </div>
            <div>
                <div class="espace"></div>
                <input class="libelle" type="text" name="quantiteProduit" placeholder="Quantite du Produit" value="<?php if ($mode != "ajouter") echo $choix->getQuantiteProduit() ;?>"/>
                <div class="espace"></div>
            </div>
        </div>
    </div>
    
    <div>
    <div class="espace"></div>
        <select class="libelle marginLight" name="IdCategorie">

        <?php 
        foreach ( $listeCategories as $uneCategorie )
        {
            $sel = "";
            echo '<option value="'.$uneCategorie->getIdCategorie().'"'.$sel.'>'.$uneCategorie->getNomCategorie().'</option>';
        }
        ?>

        </select>
        <div class="espace"></div>
    </div>

    <div>
    <div class="espace"></div>
        <select class="libelle marginLight" name="idLieuxDeStockage">';

        <?php
        foreach ( $listeLieuxDeStockage as $unLieuxDeStockage )
        {
            $sel = "";
            echo '<option value="'.$unLieuxDeStockage->getIdLieuxDeStockage().'"'.$sel.'>'.$unLieuxDeStockage->getLibelleLieuxDeStockage().'</option>';      
        }
        ?>

        </select>
        <div class="espace"></div>
    </div>


<?php

switch ($mode)
    {
		case "ajouter":
			{
                echo '<input type="submit" class="ajouter marginLight centre" name="submit" value="Ajouter"/>';
                break;
			}
		case "modifier":
			{
                echo '<input type="submit" class="ajouter marginLight centre" name="submit" value="Modifier"/>';
                break;
			}
		case "supprimer":
			{
                echo '<input type="submit" class="ajouter marginLight centre" name="submit" value="Supprimer"/>';
                break;
			}
        
        default:
        {
            echo '<div>';
        }
    }
// dans tous les cas, on met le bouton annuler
    ?>
    <div class="return"><a class="centre size" href="index.php?page=ListeProduits">Retour</a></div>
</div>

</form>
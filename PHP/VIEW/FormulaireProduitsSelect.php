<?php

$mode = $_GET['mode'];

switch ($mode){
case "ajouter" :
    {
        echo '<form method="POST" action="index.php?page=ActionProduits&mode=ajouter">';

        break;
    }
case "details" :
    {
        echo '<form method="POST" >';
        break;
    }
case "modifier" :
    {
        echo '<form method="POST" action="index.php?page=ActionProduits&mode=modifier">';
        break;
    }
case "supprimer" :
    {
        echo '<form method="POST" action="index.php?page=ActionProduits&mode=details">';
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
                <input class="libelle" type="date" name="nomProduit" placeholder="Nom du Produit"/>
                <div class="espace"></div>
            </div>
        </div>
        <div class="colonne marginLight">
            <div class="titreDescriptif centre">
                Description du Produit
            </div>
            <div>
                <div class="espace"></div>
                <input class="libelle" type="text" name="descriptionProduit" placeholder="Description du Produit"/>
                <div class="espace"></div>
            </div>
        </div>
        <div class="colonne marginLight">
            <div class="titreDescriptif centre">
                Restriction du Produit
            </div>
            <div>
                <div class="espace"></div>
                <input class="libelle" type="text" name="restrictionProduit" placeholder="Restriction du Produit"/>
                <div class="espace"></div>
            </div>
        </div>
        <div class="colonne marginLight">
            <div class="titreDescriptif centre">
                Date de Peremption du Produit
            </div>
            <div>
                <div class="espace"></div>
                <input class="libelle" type="text" name="dateDePeremption" placeholder="Date de Peremption"/>
                <div class="espace"></div>
            </div>
        </div>
        <div class="colonne marginLight">
            <div class="titreDescriptif centre">
                Prix du Produit
            </div>
            <div>
                <div class="espace"></div>
                <input class="libelle" type="text" name="prixProduit" placeholder="Prix du Produit"/>
                <div class="espace"></div>
            </div>
        </div>
        <div class="colonne marginLight">
            <div class="titreDescriptif centre">
                Quantite du Produit
            </div>
            <div>
                <div class="espace"></div>
                <input class="libelle" type="text" name="quantiteProduit" placeholder="Quantite du Produit"/>
                <div class="espace"></div>
            </div>
        </div>
    </div>
    
    <div>
    <div class="espace"></div>
        <select class="libelle marginLight" name="idCategorie">

        <?php 
        foreach ( $listeCategories as $uneCategorie )
        {
            $sel = "";
            echo '<option value="'.$uneCategorie->getIdCategorie().'"'.$sel.'>'.$uneCategorie->getNomCategorie().'</option>';
        }
        ?>

        </select>
        <div class="espace"></div>
    </div>';

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

    <div>
        <div class="return marginLight"><a class="centre" href="index.php?page=ListeProduits">Retour</a></div>
        <input type="submit" class="ajouter marginLight centre" name="submit" value="Ajouter"/>
    </div>
</form>
<?php

$mode = $_GET["mode"];

if ($mode == "ajouter")
 {
    $listeCategories=CategoriesManager::getList();
    $listeLieuxDeStockage=LieuxdestockagesManager::getList();


    echo '<form method="POST" action="index.php?page=traitementProduits&mode=ajouter">
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
            <div class="titreColonne centre">
                Restriction du Produit
            </div>
            <div>
                <div class="espace"></div>
                <input class="libelle" type="text" name="restrictionProduit" placeholder="Restriction du Produit"/>
                <div class="espace"></div>
            </div>
        </div>
        <div class="colonne marginLight">
            <div class="titreColonne centre">
                Date de Peremption du Produit
            </div>
            <div>
                <div class="espace"></div>
                <input class="libelle" type="text" name="dateDePeremption" placeholder="Date de Peremption"/>
                <div class="espace"></div>
            </div>
        </div>
        <div class="colonne marginLight">
            <div class="titreColonne centre">
                Prix du Produit
            </div>
            <div>
                <div class="espace"></div>
                <input class="libelle" type="text" name="prixProduit" placeholder="Prix du Produit"/>
                <div class="espace"></div>
            </div>
        </div>
        <div class="colonne marginLight">
            <div class="titreColonne centre">
                Quantite du Produit
            </div>
            <div>
                <div class="espace"></div>
                <input class="libelle" type="text" name="quantiteProduit" placeholder="Quantite du Produit"/>
                <div class="espace"></div>
            </div>
        </div>
    </div>';
    
    echo '<div>
    <div class="espace"></div>
        <select class="libelle marginLight" name="idCategorie" disabled>';

        foreach ( $listeCategorie as $uneCategorie )
        {
            $sel = "";
            if ($uneCategorie->getIdCategorie()== $id->getIdCategorie())
            {
                $sel = "selected";
            }
            echo '<option value="'.$uneCategorie->getIdCategorie().'"'.$sel.'>'.$uneCategorie->getNomCategorie().'</option>';
        }

        echo '</select>
    <div class="espace"></div>
    </div>';

    echo '<div>
    <div class="espace"></div>
        <select class="libelle marginLight" name="idLieuxDeStockage" disabled>';

        foreach ( $listeLieuxDeStockage as $unLieuxStockage )
        {
            $sel = "";
            if ($unLieuxStockage->getIdLieuxDeStockage()== $id->getIdLieuxDeStockage())
            {
                $sel = "selected";
            }
            echo '<option value="'.$unLieuxDeStockage->getIdLieuxDeStockage().'"'.$sel.'>'.$unLieuxDeStockage->getLibelleLieuxDeStockage().'</option>';      
        }

        echo '</select>
    <div class="espace"></div>
    </div>

    </div>
        <div>
            <div class="return marginLight"><a class="centre" href="index.php?page=listeVisite">Retour</a></div>
            <input type="submit" class="ajouter marginLight centre" name="submit" value="Ajouter"/>
        </div>
</form>';

} 
elseif ( $mode == "modifier" )
{
    $idRecherche = $_GET['id'];
    $id = ProduitsManager::findById($idRecherche);
    $listeCategories = CategoriesManager::getList();
    $listeLieuxDeStockage = LieuxdestockagesManager::getList();

    echo '<form method="POST" action="index.php?page=traitementProduits&mode=modifier">
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
            <div class="titreColonne centre">
                Restriction du Produit
            </div>
            <div>
                <div class="espace"></div>
                <input class="libelle" type="text" name="restrictionProduit" placeholder="Restriction du Produit"/>
                <div class="espace"></div>
            </div>
        </div>
        <div class="colonne marginLight">
            <div class="titreColonne centre">
                Date de Peremption du Produit
            </div>
            <div>
                <div class="espace"></div>
                <input class="libelle" type="text" name="dateDePeremption" placeholder="Date de Peremption"/>
                <div class="espace"></div>
            </div>
        </div>
        <div class="colonne marginLight">
            <div class="titreColonne centre">
                Prix du Produit
            </div>
            <div>
                <div class="espace"></div>
                <input class="libelle" type="text" name="prixProduit" placeholder="Prix du Produit"/>
                <div class="espace"></div>
            </div>
        </div>
        <div class="colonne marginLight">
            <div class="titreColonne centre">
                Quantite du Produit
            </div>
            <div>
                <div class="espace"></div>
                <input class="libelle" type="text" name="quantiteProduit" placeholder="Quantite du Produit"/>
                <div class="espace"></div>
            </div>
        </div>
    </div>';
    
    echo '<div>
    <div class="espace"></div>
        <select class="libelle marginLight" name="idCategorie" disabled>';

        foreach ( $listeCategorie as $uneCategorie )
        {
            $sel = "";
            if ($uneCategorie->getIdCategorie()== $id->getIdCategorie())
            {
                $sel = "selected";
            }
            echo '<option value="'.$uneCategorie->getIdCategorie().'"'.$sel.'>'.$uneCategorie->getNomCategorie().'</option>';
        }

        echo '</select>
    <div class="espace"></div>
    </div>';

    echo '<div>
    <div class="espace"></div>
        <select class="libelle marginLight" name="idLieuxDeStockage" disabled>';

        foreach ( $listeLieuxDeStockage as $unLieuxStockage )
        {
            $sel = "";
            if ($unLieuxStockage->getIdLieuxDeStockage()== $id->getIdLieuxDeStockage())
            {
                $sel = "selected";
            }
            echo '<option value="'.$unLieuxDeStockage->getIdLieuxDeStockage().'"'.$sel.'>'.$unLieuxDeStockage->getLibelleLieuxDeStockage().'</option>';      
        }

        echo '</select>
    <div class="espace"></div>
    </div>

    </div>
        <div>
            <div class="return marginLight"><a class="centre" href="index.php?page=listeVisite">Retour</a></div>
            <input type="submit" class="ajouter marginLight centre" name="submit" value="Ajouter"/>
        </div>
</form>';
}
elseif ( $mode == "details" )
{
    $idRecherche = $_GET['id'];
    $id = ProduitsManager::findById($idRecherche);
    $listeCategories = CategoriesManager::getList();
    $listeLieuxDeStockage = LieuxdestockagesManager::getList();

    echo '<form method="POST" action="index.php?page=traitementProduits&mode=details">
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
            <div class="titreColonne centre">
                Restriction du Produit
            </div>
            <div>
                <div class="espace"></div>
                <input class="libelle" type="text" name="restrictionProduit" placeholder="Restriction du Produit"/>
                <div class="espace"></div>
            </div>
        </div>
        <div class="colonne marginLight">
            <div class="titreColonne centre">
                Date de Peremption du Produit
            </div>
            <div>
                <div class="espace"></div>
                <input class="libelle" type="text" name="dateDePeremption" placeholder="Date de Peremption"/>
                <div class="espace"></div>
            </div>
        </div>
        <div class="colonne marginLight">
            <div class="titreColonne centre">
                Prix du Produit
            </div>
            <div>
                <div class="espace"></div>
                <input class="libelle" type="text" name="prixProduit" placeholder="Prix du Produit"/>
                <div class="espace"></div>
            </div>
        </div>
        <div class="colonne marginLight">
            <div class="titreColonne centre">
                Quantite du Produit
            </div>
            <div>
                <div class="espace"></div>
                <input class="libelle" type="text" name="quantiteProduit" placeholder="Quantite du Produit"/>
                <div class="espace"></div>
            </div>
        </div>
    </div>';
    
    echo '<div>
    <div class="espace"></div>
        <select class="libelle marginLight" name="idCategorie" disabled>';

        foreach ( $listeCategorie as $uneCategorie )
        {
            $sel = "";
            if ($uneCategorie->getIdCategorie()== $id->getIdCategorie())
            {
                $sel = "selected";
            }
            echo '<option value="'.$uneCategorie->getIdCategorie().'"'.$sel.'>'.$uneCategorie->getNomCategorie().'</option>';
        }

        echo '</select>
    <div class="espace"></div>
    </div>';

    echo '<div>
    <div class="espace"></div>
        <select class="libelle marginLight" name="idLieuxDeStockage" disabled>';

        foreach ( $listeLieuxDeStockage as $unLieuxStockage )
        {
            $sel = "";
            if ($unLieuxStockage->getIdLieuxDeStockage()== $id->getIdLieuxDeStockage())
            {
                $sel = "selected";
            }
            echo '<option value="'.$unLieuxDeStockage->getIdLieuxDeStockage().'"'.$sel.'>'.$unLieuxDeStockage->getLibelleLieuxDeStockage().'</option>';      
        }

        echo '</select>
    <div class="espace"></div>
    </div>

    </div>
        <div>
            <div class="return marginLight"><a class="centre" href="index.php?page=listeVisite">Retour</a></div>
            <input type="submit" class="ajouter marginLight centre" name="submit" value="Ajouter"/>
        </div>
</form>';
}

echo '</body>

</html>';
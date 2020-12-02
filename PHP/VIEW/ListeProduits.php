<?php

$produits = ProduitsManager::getList();

echo '<div class="contenu colonne">
    <div class="margin">
        <div class="espace"></div>
        <div class="ajouter"><a class="centre size" href="index.php?page=formulaire&choix=produits&mode=ajouter">Ajouter un Produit</a></div>
        <div class="espace"></div>
    </div>';
    foreach ($produits as $unProduits)
    {
        echo '<div class="liste marginLight">
            <div class="libelle centre marginBouton size">'.$unProduits->getNomProduit().'</div>
            <div class="details centre marginBouton"><a class="centre size" href="index.php?page=formulaire&choix=produits&mode=details&id='.$unProduits->getIdProduit().'">Details</a></div>
            <div class="modifier centre marginBouton"><a class="centre size" href="index.php?page=formulaire&choix=produits&mode=modifier&id='.$unProduits->getIdProduit().'">Modifier</a></div>
            <div class="supprimer centre marginBouton"><a class="centre size" href="index.php?page=formulaire&choix=produits&mode=supprimer&id='.$unProduits->getIdProduit().'">Supprimer</a></div>
        </div>';
    }

    echo '<div class="margin">
    <div class="espace"></div>
    <div class="return"><a class="centre size" href="index.php?page=ListeProduits">Retour</a></div>
    <div class="espace"></div>
</div>

</div>

</body>

</html>';
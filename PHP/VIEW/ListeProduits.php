<?php

$produits = ProduitsManager::getList();

echo '<div class="contenu colonne">
    <div class="margin">
        <div class="espace"></div>
        <div class="ajouter"><a class="centre size" href="index.php?page=formulaireProduits&typeFormulaire=ajouter">Ajouter un Produit</a></div>
        <div class="espace"></div>
    </div>';
    foreach ($produits as $unProduits)
    {
        echo '<div class="liste">
            <div class="libelle centre marginBouton size">Libelle Produit</div>
            <div class="details centre marginBouton"><a class="centre size" href="index.php?page=formulaireProduits&typeFormulaire=details&id='.$unProduits->getIdProduit().'">Details</a></div>
            <div class="modifier centre marginBouton"><a class="centre size" href="index.php?page=formulaireProduits&typeFormulaire=modifier&id='.$unProduits->getIdProduit().'">Modifier</a></div>
            <div class="supprimer centre marginBouton"><a class="centre size" href="index.php?page=formulaireProduits&typeFormulaire=supprimer&id='.$unProduits->getIdProduit().'">Supprimer</a></div>
        </div>
        <div class="margin">
            <div class="espace"></div>
            <div class="return"><a class="centre size" href="index.php?page=ListeProduits">Retour</a></div>
            <div class="espace"></div>
        </div>';
    }

echo '</div>

</body>

</html>';
<?php

echo '<div class="contenu colonne">
    <div class="margin">
        <div class="espace"></div>
        <div class="ajouter"><a class="centre size" href ="index.php?page=FormulaireLieuxdeStockages&mode=ajout">Ajouter un Lieu</a></div>
        <div class="espace"></div>
    </div>';

// echo '<div class = "colonne">
// <h2>Liste des Lieux de stockages</h2>
// <div class = "liste colonne">';
// echo '<div class="ajouter"><a class="centre size" href ="index.php?page=FormulaireLieuxdeStockages&mode=ajout">Ajouter un Lieu</a></div>';
$lieux = LieuxdestockagesManager::getList();
foreach ($lieux as $lieu)
{
    echo '<div class="liste">
            <div class="libelle centre marginBouton size">'.$lieu->getLibelleLieuxDeStockage()."/".$lieu->getRayon()."/Etagère: ".$lieu->getEtagere().'</div>';
    echo '<div class="details centre marginBouton"><a class="centre size" href = "index.php?page=FormulaireLieuxdeStockages&mode=edit&id='.$lieu->getIdLieuxDeStockage().'">Detail</a></div>';
    echo '<div class="modifier centre marginBouton"><a class="centre size" href = "index.php?page=FormulaireLieuxdeStockages&mode=modif&id='.$lieu->getIdLieuxDeStockage().'">Modifier</a></div>';
    echo '<div class="supprimer centre marginBouton"><a class="centre size" href = "index.php?page=FormulaireLieuxdeStockages&mode=delete&id='.$lieu->getIdLieuxDeStockage().'">Supprimer</a></div></div>';
    echo '<div class="margin">
        </div>';
}
echo '</div>    <div>
<div class="espace"></div>
<div class="return"><a class="centre size" href="index.php?page=default">Retour</a></div>
<div class="espace"></div>
</div>
</body>

</html>';
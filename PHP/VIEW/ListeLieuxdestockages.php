<?php

echo '<div class="contenu colonne">
    <div class="margin">
        <div class="espace"></div>
        <div class="ajouter"><a class="centre size" href ="index.php?page=FormulaireLieuxdeStockages&mode=ajouter">Ajouter un Lieu</a></div>
        <div class="espace"></div>
    </div>';

// echo '<div class = "colonne">
// <h2>Liste des Lieux de stockages</h2>
// <div class = "liste colonne">';
// echo '<div class="ajouter"><a class="centre size" href ="index.php?page=FormulaireLieuxdeStockages&mode=ajout">Ajouter un Lieu</a></div>';
$lieux = LieuxdestockagesManager::getList();
foreach ($lieux as $lieu)
{
    if ($lien->getIdLieuxDeStockage()!=1)
    {
    echo '<div class="liste">
            <div class="libelle centre marginBouton size">'.$lieu->getLibelleLieuxDeStockage()."/".$lieu->getRayon()."/Etagère: ".$lieu->getEtagere().'</div>
            <div class="details centre marginBouton"><a class="centre size" href = "index.php?page=FormulaireLieuxdeStockages&mode=details&id='.$lieu->getIdLieuxDeStockage().'">Detail</a></div>
            <div class="modifier centre marginBouton"><a class="centre size" href = "index.php?page=FormulaireLieuxdeStockages&mode=modifier&id='.$lieu->getIdLieuxDeStockage().'">Modifier</a></div>
            <div class="supprimer centre marginBouton"><a class="centre size" href = "index.php?page=FormulaireLieuxdeStockages&mode=supprimer&id='.$lieu->getIdLieuxDeStockage().'">Supprimer</a></div></div>
            <div class="margin">
        </div>';
}
echo '</div>   
 <div>
    <div class="espace"></div>
    <div class="return"><a class="centre size" href="index.php?page=default">Retour</a></div>
    <div class="espace"></div>
</div>
</body>

</html>';

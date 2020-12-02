<?php

echo '
<div class = "contenu colonne">
    <div class="margin">
    <div class="ajouter"><a class="centre size" href="index.php?page=FormulaireCategorie&mode=ajouter">Ajouter</a></div>
    <div class="espace"></div>
    <div class="espace"></div>
</div>';

$liste = CategoriesManager::getList();
foreach($liste as $elt)
{
    echo'<div class="liste">
    <div class="libelle centre marginBouton size">'.$elt->getNomCategorie().'</div>
    <div class="details centre marginBouton"><a class="centre size" href="index.php?page=FormulaireCategories&mode=afficher&id='.$elt->getIdCategorie().'">Afficher</a></div>
    <div class="details centre marginBouton"><a class="centre size" href="index.php?page=FormulaireCategories&mode=modifier&id='.$elt->getIdCategorie().'">Modifier</a></div>
    <div class="details centre marginBouton"><a class="centre size" href="index.php?page=FormulaireCategories&mode=effacer$id='.$elt->getIdCategorie().'">Supprimer</a></div>
    </div>
    <div class="margin">
    </div>';
}
echo'</div>
<div>
<div class="espace"></div>
<div class="return"><a class="centre size" href="index.php?page=default">Retour</a></div>
<div class="espace"></div>
</div>
</body>

</html>';
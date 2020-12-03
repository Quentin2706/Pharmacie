<?php

$mode= $_GET($mode);
if(isset($_GET['id']));
{
    if ($idCategorie!=false)
    {
        $cat=CategoriesManager::findById($idCategorie);
    }
}

switch($mode)
{
    case("ajouter"):
    {
        echo'form method="POST" action="index.php?code=actionCategories$mode=ajouter">';
        break;
    }
    case("afficher"):
    {
        echo'form method="POST" action="index.php?code=actionCategories$mode=afficher">';
            break;
    }
    case("modifier"):
    {
        echo'<form method="POST" action="inex.php?page=actionCategories&mode="modifier">';
        break;
    }
    case("effacer"):
    {
        echo'<form method="POST" action="inex.php?page=actionCategories&mode="effacer">';
        break;
    }
}

?>

<label for="nomCategorie">Nom Categorie: </label>
<input name="nomCategorie" <?php if($mode!="ajouter"){echo'value="'.$cat->getNomCategorie().'"';} else{echo'placeholder="nom catégorie"';}if($mode=="effacer"|| $mode="afficher")echo'disabled';?>>
<label for="ordonnanceCategorie">Ordonnance Categorie: </label>
<input name="ordonnanceCategorie" <?php if($mode!="ajouter"){echo'value="'.$cat->getOrdonnanceCategorie().'"';} else{echo'placeholder="ordonnance catégorie"';}if($mode=="effacer"|| $mode="afficher")echo'disabled';?>>

<?php

switch($mode)
{
    case "ajouter":
    {
        echo'<button type="submit">Ajouter</button>';
        break;        
    }
    case "afficher":
    {
        echo'<button type="submit">Afficher</button>';
        break;        
    }
    case "modifier":
    {
        echo'<button type="submit">Modifier</button>';
        break;
    }
    case "effacer":
    {
        echo'<button type="submit">Supprimer</button>';
        break;
    }
}
echo'<button type="reset"><a href="index.php?page=default">Annuler</a></button>';
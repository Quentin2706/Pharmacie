<?php

$mode= $_GET['mode'];

switch($mode)
{
    case "ajouter":
    {
        echo '<form action="index.php?page=ActionCategories&mode=ajouter" method="POST">';
        break;
    }
    case "afficher":
    {
        echo '<form action="index.php?page=ActionCategories&mode=afficher" method="POST">';
            break;
    }
    case "modifier":
    {
        echo '<form action="index.php?page=ActionCategories&mode=modifier" method="POST">';
        break;
    }
    case "supprimer":
    {
        echo'<form method="POST" action="index.php?page=ActionCategories&mode=supprimer">';
        break;
    }
}

if (isset($_GET['id']))
{
$choix = CategoriesManager::findById($_GET['id']);
}

?>
<?php if($mode != "ajouter") echo  '<input name= "idCategorie" value="'.$choix->getIdCategorie().'" type= "hidden">';?>
<label for="nomCategorie">Nom Categorie: </label>
<input name="nomCategorie" <?php if($mode!="ajouter"){echo'value="'.$choix->getNomCategorie().'"';} else{echo'placeholder="nom catégorie"';}if($mode=="supprimer"|| $mode=="afficher")echo'disabled';?>>
<label for="ordonnanceCategorie">Ordonnance Categorie: </label>
<input name="ordonnanceCategorie" <?php if($mode!="ajouter"){echo'value="'.$choix->getOrdonnanceCategorie().'"';} else{echo'placeholder="ordonnance catégorie"';}if($mode=="supprimer"|| $mode=="afficher")echo'disabled';?>>

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
    case "supprimer":
    {
        echo'<button type="submit">Supprimer</button>';
        break;
    }
}
echo'<button type="reset"><a href="index.php?page=default">Annuler</a></button>';
?>
</form>
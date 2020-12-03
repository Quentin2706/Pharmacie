<nav>
    
<?php
    if (isset($_SESSION["user"])&& $_SESSION["user"]->getIdRole()==2)
    {
        echo '<div><a class="centre size" href="index.php?page=ListeUsers">';?><?php echo texte("Les Users");?><?php echo'</a></div>
        <div><a class="centre size" href="index.php?page=ListeRoles">';?><?php echo texte("Les Roles");?><?php echo'</a></div>';

    }
    echo '<div><a class="centre size" href="index.php?page=ListeProduits">';?><?php echo texte("Les Produits");?><?php echo'</a></div>';
  
    if (!isset($_SESSION["user"]))
    {
        echo '<div><a class="centre size" href="index.php?page=FormulaireConnexion">';?><?php echo texte("Connexions");?><?php echo'</a></div>';
    }


    // if (isset($_SESSION["user"]))
    // {
        echo '<div><a class="centre size" href="index.php?page=ListeLieuxdeStockages">';?><?php echo texte("Les Lieux de Stockage");?><?php echo'</a></div>
        <div><a class="centre size" href="index.php?page=ListeCategories">';?><?php echo texte("Les Categories");?><?php echo'</a></div>
        <div><a class="centre size" href="index.php?page=ListeCommandes">';?><?php echo texte("Les Commandes");?><?php echo' </a></div>
        <div><a class="centre size" href="index.php?page=FormulaireInscription">';?><?php echo texte("Inscriptions");?><?php echo'</a></div>
        <div><a class="centre size" href="index.php?page=ActionDeconnexion">';?><?php echo texte("Deconnexion");?><?php echo'</a></div>';
    // 

    ?>
</nav>
<?php
$Commandes = CommandesManager::getList();

echo '<div class="contenu colonne">
<div>
<div class="espace"></div>
<div class="size centre titre">Liste des Commandes</div>
<div class="espace"></div>
</div>
    <div class="margin">
        <div class="espace"></div>
        <div class="ajouter"><a class="centre size" href="index.php?page=FormulaireCommandes&choix=Commandes&mode=ajouter">Ajouter une Commande</a></div>
        <div class="espace"></div>
    </div>';
    foreach ($Commandes as $uneCommande)
    {
        if ($elt->getIdCommande()!=1)
        {
            echo '<div class="liste">
            <div class="espace"></div>
                <div class="libelle centre marginBouton size">'.$uneCommande->getDateCommande().'</div>
                <div class="details centre marginBouton"><a class="centre size" href="index.php?page=FormulaireCommandes&choix=Commandes&mode=details&id='.$uneCommande->getIdCommande().'">Details</a></div>';

                if (isset($_SESSION["user"])&& $_SESSION["user"]->getIdRole()==2)
                {
                    echo '<div class="modifier centre marginBouton"><a class="centre size" href="index.php?page=FormulaireCommandes&choix=Commandes&mode=modifier&id='.$uneCommande->getIdCommande().'">Modifier</a></div>
                    <div class="supprimer centre marginBouton"><a class="centre size" href="index.php?page=FormulaireCommandes&choix=Commandes&mode=supprimer&id='.$uneCommande->getIdCommande().'">Supprimer</a></div>';
                }

            echo '<div class="espace"></div></div>
            <div class="margin">
            </div>';
        }
    }
echo '</div>
    <div>
    <div class="espace"></div>
    <div class="return"><a class="centre size" href="index.php?page=default">Retour</a></div>
    <div class="espace"></div>
    </div>
</body>

</html>';
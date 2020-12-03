<?php

$users = UsersManager::getList();

echo '<div class="contenu colonne">
    <div class="margin">
        <div class="espace"></div>
        <div class="ajouter"><a class="centre size" href="index.php?page=FormulaireUsers&mode=ajouter">Ajouter un Utilisateur</a></div>
        <div class="espace"></div>
    </div>';
    foreach ($users as $unUser)
    {
        echo '<div class="liste marginLight">
            <div class="libelle centre marginBouton size">'.$unUser->getNomUser().' '.$unUser->getPrenomUser().'</div>
            <div class="details centre marginBouton"><a class="centre size" href="index.php?page=FormulaireUsers&mode=details&id='.$unUser->getIdUser().'">Details</a></div>
            <div class="modifier centre marginBouton"><a class="centre size" href="index.php?page=FormulaireUsers&mode=modifier&id='.$unUser->getIdUser().'">Modifier</a></div>
            <div class="supprimer centre marginBouton"><a class="centre size" href="index.php?page=FormulaireUsers&mode=supprimer&id='.$unUser->getIdUSer().'">Supprimer</a></div>
        </div>';
    }

    echo '<div class="margin">
    <div class="espace"></div>
    <div class="return"><a class="centre size" href="index.php?page=ListeUsers">Retour</a></div>
    <div class="espace"></div>
</div>

</div>

</body>

</html>';
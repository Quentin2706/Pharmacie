<?php
$roles = RolesManager::getList();

echo '<div class="contenu colonne">
    <div class="margin">
        <div class="espace"></div>
        <div class="ajouter"><a class="centre size" href="index.php?page=formulaire&choix=roles&mode=ajouter">Ajouter un Role</a></div>
        <div class="espace"></div>
    </div>';
    foreach ($roles as $unRole)
    {
        echo '<div class="liste">
            <div class="libelle centre marginBouton size">'.$unRole->getNomRole().'</div>
            <div class="details centre marginBouton"><a class="centre size" href="index.php?page=formulaire&choix=roles&mode=details&id='.$unRole->getIdRole().'">Details</a></div>
            <div class="modifier centre marginBouton"><a class="centre size" href="index.php?page=formulaire&choix=roles&mode=modifier&id='.$unRole->getIdRole().'">Modifier</a></div>
            <div class="supprimer centre marginBouton"><a class="centre size" href="index.php?page=formulaire&choix=roles&mode=supprimer&id='.$unRole->getIdRole().'">Supprimer</a></div>
        </div>
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
<?php

//Test CategoriesManager

echo "recherche id = 1" . "<br>";
$obj =CategoriesManager::findById(1);
var_dump($obj);
echo $obj->toString();

echo "ajout de l'objet". "<br>";
$newObj = new Categories(["nomCategorie" => "([value 1])", "ordonnanceCategorie" => "([value 2])"]);
var_dump(CategoriesManager::add($newObj));

echo "Liste des objets" . "<br>";
$array = CategoriesManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

echo "on met à jour l'id 1" . "<br>";
$obj->setnomCategorie("[(Value)]");
CategoriesManager::update($obj);
$objUpdated = CategoriesManager::findById(1);
echo "Liste des objets" . "<br>";
$array = CategoriesManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

echo "on supprime un objet". "<br>";
$obj = CategoriesManager::findById(1);
CategoriesManager::delete($obj);
echo "Liste des objets" . "<br>";
$array = CategoriesManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

?>
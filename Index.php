<?php

require("./Outils.php");

Parametres::init();

DbConnect::init();

session_start();

/******Les langues******/
/***On récupère la langue***/
if (isset($_GET['lang']))
{
	$_SESSION['lang'] = $_GET['lang'];
}

/***On récupère la langue de la session/FR par défaut***/
$lang=isset($_SESSION['lang']) ? $_SESSION['lang'] : 'FR';
/******Fin des langues******/

$routes=[
	"default"=>["PHP/VIEW/","Accueil","Accueil"],
	// "TestcategoriesManager"=>["PHP/MODEL/TESTMANAGER/","TestcategoriesManager","Test de categories"],
	// "TestcommandesManager"=>["PHP/MODEL/TESTMANAGER/","TestcommandesManager","Test de commandes"],
	// "TestlieuxdestockagesManager"=>["PHP/MODEL/TESTMANAGER/","TestlieuxdestockagesManager","Test de lieuxdestockages"],
	// "TestproduitsManager"=>["PHP/MODEL/TESTMANAGER/","TestproduitsManager","Test de produits"],
	// "TestrolesManager"=>["PHP/MODEL/TESTMANAGER/","TestrolesManager","Test de roles"],
	// "TestusersManager"=>["PHP/MODEL/TESTMANAGER/","TestusersManager","Test de users"],
	"ListeProduits"=>["PHP/VIEW/","ListeProduits","Liste des Produits"],
	"FormulaireProduits"=>["PHP/VIEW/","FormulaireProduits","formulaire des produits"],
	"ActionProduits"=>["PHP/VIEW/","ActionProduits","formulaire des roles"],
	"ListeUsers"=>["PHP/VIEW/","ListeUsers","Liste des Users"],
	"FormulaireUsers"=>["PHP/VIEW/","FormulaireUsers","formulaire des users"],
	"ActionUsers"=>["PHP/VIEW/","ActionUsers","formulaire des roles"],
	"ListeRoles"=>["PHP/VIEW/","ListeRoles","Liste des roles"],
	"FormulaireRoles"=>["PHP/VIEW/","FormulaireRoles","formulaire des roles"],
	"ActionRoles"=>["PHP/VIEW/","ActionRoles","formulaire des roles"],
	"ListeCategories"=>["PHP/VIEW/","ListeCategories","Liste des Categories"],
	"FormulaireCategories"=>["PHP/VIEW/","FormulaireCategories","formulaire des categories"],
	"ActionCategories"=>["PHP/VIEW/","ActionCategories","formulaire des roles"],
	"ListeCommandes"=>["PHP/VIEW/","ListeCommandes","Liste des Commandes"],
	"FormulaireCommandes"=>["PHP/VIEW/","FormulaireCommandes","formulaire des commandes"],
	"ActionCommandes"=>["PHP/VIEW/","ActionCommandes","formulaire des roles"],

	"ListeLieuxdeStockages"=>["PHP/VIEW/","ListeLieuxdeStockages","Liste des lieux de stockage"],
	"FormulaireLieuxdeStockages"=>["PHP/VIEW/","FormulaireLieuxDeStockages","formulaire des produits"],
];

if(isset($_GET["page"]))
{

	$page=$_GET["page"];

	if(isset($routes[$page]))
	{
		AfficherPage($routes[$page]);
	}
	else
	{
		AfficherPage($routes["default"]);
	}
}
else
{
	AfficherPage($routes["default"]);
}
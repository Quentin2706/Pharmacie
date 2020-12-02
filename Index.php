<?php

require("./Outils.php");

function ChargerClasse($classe)
{
    if (file_exists("PHP/CONTROLLER/" . $classe . ".Class.php"))
    {
        require "PHP/CONTROLLER/" . $classe . ".Class.php";
    }
    if (file_exists("PHP/MODEL/" . $classe . ".Class.php"))
    {	
        require "PHP/MODEL/" . $classe . ".Class.php";
    }
}
spl_autoload_register("ChargerClasse");

function afficherPage($page)
{
    $chemin=$page[0];
    $nom=$page[1];
    $titre=$page[2];

    include 'PHP/VIEW/head.php';
    include 'PHP/VIEW/header.php';
    include 'PHP/VIEW/nav.php';
    include $chemin.$nom.'.php';
    include 'PHP/VIEW/footer.php';
}

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
	"ListeProduits"=>["PHP/MODEL/","ListeProduits","Liste des Produits"],
	"FormulaireProduits"=>["PHP/MODEL/","FormulaireProduits","formulaire des produits"],
	"ListeUsers"=>["PHP/MODEL/","ListeUsers","Liste des Users"],
	"FormulaireUsers"=>["PHP/MODEL/","FormulaireUsers","formulaire des users"],
	"ListeRoles"=>["PHP/MODEL/","ListeRoles","Liste des roles"],
	"FormulaireRoles"=>["PHP/MODEL/","FormulaireRoles","formulaire des roles"],
	"ListeCategories"=>["PHP/MODEL/","ListeCategories","Liste des Categories"],
	"FormulaireCategories"=>["PHP/MODEL/","FormulaireCategories","formulaire des categories"],
	"ListeCommandes"=>["PHP/MODEL/","ListeCommandes","Liste des Commandes"],
	"FormulaireCommandes"=>["PHP/MODEL/","FormulaireCommandes","formulaire des commandes"],
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
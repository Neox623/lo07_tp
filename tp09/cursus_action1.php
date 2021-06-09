<?php
require_once 'Module.class.php';
require_once 'Cursus.class.php';
require_once 'Charte.class.php';

if(!isset($_GET["sigle"]) || !isset($_GET["label"]) || !isset($_GET["categorie"]) || !isset($_GET["effectif"])){
	$module = new Module("erreur","inexistant","CS",0);
	$module->pageKO();
}else{

	echo Charte::html_head_bootstrap("Cursus Main");
	
	$sigle = $_GET["sigle"];
	$label = $_GET["label"];
	$categorie = $_GET["categorie"];
	$effectif  = $_GET["effectif"];

	
	echo "<h3>Définition du module</h3>";
	$module = new Module($sigle,$label,$categorie,$effectif);
	echo $module;

	
	echo "<h3>Définition d'un cursus</h3>";
	$cursus = new Cursus();

	
	$cursus->addModule($module);

	
	echo "<h3>Question 4</h3>";
	echo "	- On constate que si on remplit plusieur fois le formulaire pour rajouter un module, les anciens modules saisit ne sont pas raffiché
			du fait que l'on construit un nouveau cursus a chaque chargement de la page<br>";
	echo "	- Uniquement un module est affiché a chaque fois, celui provenant du formulaire saisit précédement avant d'être redirigé<br>";
	
	//on affiche le cursus
	echo "<h3>Affichage d'un cursus</h3>";
	echo $cursus;

	echo Charte::html_foot_bootstrap();
}
?>
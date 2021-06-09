<?php
require_once 'Module.class.php';

if(!isset($_GET["sigle"]) || !isset($_GET["label"]) || !isset($_GET["categorie"]) || !isset($_GET["effectif"])){
	$module = new Module("erreur","inexistant","CS",0);
	$module->pageKO();
}else{
	
	$sigle = $_GET["sigle"];
	$label = $_GET["label"];
	$categorie = $_GET["categorie"];
	$effectif  = $_GET["effectif"];

	
	$module = new Module($sigle,$label,$categorie,$effectif);

	
	$module->pageOK();

	
	echo "<h3>SauveTXT</h3>";
	echo $module->sauveTXT();

	
	echo "<h3>createTable</h3>";
	echo $module->createTable("modules");

	
	echo "<h3>SauveBDR</h3>";
	echo $module->sauveBDR("modules");

	
	$module->pageFoot();
}
?>
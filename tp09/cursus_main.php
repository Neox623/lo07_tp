<?php
require_once 'Module.class.php';
require_once 'Cursus.class.php';
require_once 'Charte.class.php';


echo Charte::html_head_bootstrap("Cursus Main");

echo "<h3>Définition des modules</h3>";

$module_lo07 = new Module("lo07","Technologies du Web","TM", 140);
echo $module_lo07;


$module_if26 = new Module("if26","Applications Mobiles Android","TM", 77);
echo $module_if26;


$cursus = new Cursus();


echo "<h3>Définition d'un cursus</h3>";
$cursus->addModule($module_lo07);
$cursus->addModule($module_if26);


echo "<h3>Affichage d'un cursus</h3>";
$cursus->affiche();


echo Charte::html_foot_bootstrap();

?>
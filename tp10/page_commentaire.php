<?php 
	include 'bibliotheque.php';
	include 'fragmentHeader.html';
?>

<body>
	<div class="container">
		<?php
		include 'fragmentMenu.html';
		include 'fragmentJumbotron.html';

		panel_head("Exercice 2 - Mon avis");
		
		echo "<b>Question 1 : Donnez votre avis sur cette façon de concevoir un site Web.</b><br>";
		echo "Personnellement, je tourve que cette methode est un gain de temps enorme.En effet, le fait d'avoir plein de petit fichier qui contienne des bout de code bien a eux est une maniere de gagné du temps. Surtout que certain sont totallement utilisable dans tout tp ou site WEB.";

		echo "<br><b>Question 2 : Points positifs et point négatifs.</b><br>";
		echo "Points positifs :";
		echo "<ul><li>Permet d'avoir peu de ligne</li>";
		echo "<li>Permet d'etre modulable et de n'utiliser que ce que l'on veut</li>";
		echo "<li>Permet de réutiliser un code qui a déjà était écrit</li>";
		echo "<li>Gain de temps de développement, pas besoin de réécrire ce qui a déja était écrit</li></ul>";

		echo "Points négatifs :";
		echo "<ul><li>Comlpique a prendre en main au début</li>";
		echo "<li>nécessite d'être organisé et de mettre des noms explicite aux fichiers et savoir se retrouver dans beaucoup de page  </li>"; 
		echo "<li>Les fragments éparpillent le code dans plusieurs fichiers, il complexifi alors la compréhension du code.</li></ul>";

		include 'fragmentFooter.html';
		?>
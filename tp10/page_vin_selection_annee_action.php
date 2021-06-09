<?php 
	require 'bibliotheque.php';
	include 'fragmentHeader.html';
?>

<body>
	<div class="container">
		<?php
		include 'fragmentMenu.html';
		include 'fragmentJumbotron.html';

		include 'fragmentDatabaseConfig.php';
	
		if(!empty($_POST)){
			$query = "select * from vin where annee = ".$_POST['annee'];
	        panel_head("Liste des Vins (".$query.")");
	        $statement = $database->query($query);
	        include 'fragmentVinResultats.php';
		}else{
			echo "Veuillez passer par le formulaire";
		}

		include 'fragmentFooter.html';
		?>

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
		panel_head("Vin ajouté");

        if(isset($_POST)){
        	$cru = $_POST["cru"];
        	$annee = $_POST["annee"];
        	$degre = $_POST["degre"];

        	//on insert le nouveau vin 
        	try{
        		//recherche de max(id)
        		$query = "SELECT max(id) FROM vin";
        		$statement = $database->query($query);
        		$id = $statement->fetch();
				$query = "insert into vin (id,cru,annee,degre) values (:id, :cru, :an, :deg)";

				$resultat = $database->prepare($query);
		        $resultat->execute ( [
		            ':id' => $id["max(id)"]+1,
		            ':cru' => $cru,
		            ':an' => $annee,
		            ':deg' => $degre] 
		        );
				
				echo "Le vin vient d'être inséré";
        	}catch(Exception $e){
        		echo "problème lors de l'insertion du vin";
        		echo $e->getCode().' - '.$e->getMessage();
        	}
        	

        }else{
        	echo "Veuillez passer par le formulaire";
        }

        include 'fragmentFooter.html';
		?>
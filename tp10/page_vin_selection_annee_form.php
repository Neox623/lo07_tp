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
		panel_head("Formulaire de sélection une année");

		$query = "select distinct annee from vin order by annee";
                $statement = $database->query($query);

		form_begin("tp10", "post", "page_vin_selection_annee_action.php");
		form_select_query("année :", "annee", 4, $statement);
		form_input_submit("Submit form");
		form_end();

		include 'fragmentFooter.html';
		?>
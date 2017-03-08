<!DOCTYPE html>
<html>
<head>
	<title>Exo php</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Orbitron" rel="stylesheet">
</head>
<body>

<div class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-6 col-md-2 col-lg-2" id="border">
			<p>exercice 1</p>
			<?php 
				$age = 12;
				if ($age>18) {
					echo 'Vous êtes majeur';
				}else{
					echo 'Vous êtes mineur';
				}				
			?>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-2 col-lg-2" id="border">
			<p>exercice 2</p>
			<?php 
				$iseasy = true;
					if ($iseasy=true) {
						echo 'C\'est facile !';
					}else{
						echo 'C\'est difficil !';
					}				
			?>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-2 col-lg-2" id="border">
			<p>exercice 3</p>
			<?php 
				$age = 21;
				$genre = 'homme';
					if ($genre == 'homme') {
						echo 'Vous êtes un homme';
					}else if($genre == 'femme'){
						echo 'Vous êtes une femme';
					}

					if ($age>18) {
					echo ' et vous êtes majeur';
				}else{
					echo ' et vous êtes mineur';
				}				
			?>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-2 col-lg-2" id="border">
			<p>exercice 3</p>
			<?php 
			// Désolé julien le else if c'est plus simple ! //
				$magnitude = 6;
					if ($magnitude == 1) {
						echo 'Micro-séisme impossible à ressentir.';
					}else if($magnitude == 2){
						echo 'Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.';
					}else if($magnitude == 3){
						echo 'Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.';
					}else if($magnitude == 4){
						echo 'Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.';
					}else if($magnitude == 5){
						echo 'Séisme capable d\'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.';
					}else if($magnitude == 6){
						echo 'Fort séisme capable d\'engendrer des destructions majeures sur une large distance (180 km) autour de l\'épicentre.';
					}else if($magnitude == 7){
						echo 'Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.';
					}else if($magnitude == 8){
						echo 'Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.';
					}else if($magnitude == 9){
						echo 'Séisme capable de tout détruire sur une très vaste zone.';
					}

							
			?>
		</div>   
	</div>
</div>

</body>
</html>
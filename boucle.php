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
				
				$chiffre = 0;
					while ($chiffre < 9) {
					 	$chiffre = $chiffre + 1;
						echo $chiffre.', ';
						}	
			?>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-2 col-lg-2" id="border">
			<p>exercice 2</p>
			<?php 
				$chiffre = 0;
				$nombre = 1;

					while ($chiffre < 20) {
					 	$chiffre = $chiffre + 1;
						echo $chiffre*$nombre.', ';
						}				
			?>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" id="border">
			<p>exercice 3</p>
			<?php 
				$chiffre = 100;
				$nombre = 1;
					while ($chiffre >= 10) {
						echo $chiffre*$nombre.', ';
						$chiffre = $chiffre - 1;
						}
						
			?>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-2 col-lg-2" id="border">
			<p>exercice 4</p>
			<?php 
			
				$initiale = 1;
					while ($initiale < 10) {
						echo $initiale.', ';
						$initiale=$initiale+($initiale/2);
					}

							
			?>
		</div>   

		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" id="border">
				<p>exercice 5</p>
				<?php 
				
					$initiale = 1;
						while ($initiale <= 15) {
							echo $initiale.' : On y arrive presque. ';
							$initiale=$initiale+1;
						}

								
				?>
		</div>   
		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" id="border">
				<p>exercice 6</p>
				<?php 
				// <3 la boucle while, tantpis pour le tant que ! //
					$initiale = 20;
						while ($initiale > 0) {
							echo $initiale.' : C\'est presque bon. ';
							$initiale=$initiale-1;
							
						}				
				?>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" id="border">
				<p>exercice 7</p>
				<?php 
				// <3 la boucle while, tantpis pour le tant que ! //
					$initiale = 0;
						while ($initiale < 100) {
							echo 'On tient le bambou. ';
							$initiale=$initiale+15;
							
						}				
				?>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" id="border">
				<p>exercice 8 (Attention il depasse !)</p>
				<?php 
				// <3 la boucle while, tantpis pour le tant que ! //
					$initiale = 200;
						while ($initiale > 0) {
							echo 'Enfin ';
							$initiale=$initiale-1;
							
						}				
				?>
		</div>   
		
	</div>
</div>

</body>
</html>
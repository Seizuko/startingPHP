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

			// Ces exercices sont fait à l'arrache et avec des echo pour avoir une jolie page ! // 

				function true(){
					$true = true;
					return $true;
				}
				echo 'True !';
			?>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-2 col-lg-2" id="border">
			<p>exercice 2</p>
			<?php 
				$true = 'Chaine de caractere';
				function caractere($true){
					return $true;
				}

				echo caractere($true);
			?>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-2 col-lg-2" id="border">
			<p>exercice 3</p>
			<?php 
				$true = 'Chaine1';
				$false = 'chaine2';
				function caractere2($true,$false){
					return $true.' '.$false;
				}

				echo caractere($true.' '.$false);
			?>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-2 col-lg-2" id="border">
			<p>exercice 4</p>
			<?php 
				$true = 6;
				$false = 5;
				function caractere3($true,$false){
					if ($true > $false) {
						echo 'Le premier nombre est plus grand';
						return 'Le premier nombre est plus grand';						
					}else if ($true < $false) {
						echo 'Le deuxieme nombre est plus grand';
						return 'Le deuxieme nombre est plus grand';						
					}else{
						return 'les deux sont egaux';
						echo 'les deux sont égaux';
					}
				}

				//bonus //
				if ($true > $false) {
						echo 'Le premier nombre est plus grand';
						return 'Le premier nombre est plus grand';						
					}else if ($true < $false) {
						echo 'Le deuxieme nombre est plus grand';
						return 'Le deuxieme nombre est plus grand';						
					}else{
						return 'les deux sont egaux';
						echo 'les deux sont égaux';
					}
			?>
		</div>
		
		
		
		
		
	</div>
</div>

</body>
</html>
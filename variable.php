<!DOCTYPE html>
<html>
<head>
	<title>Exo php</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

<div class="container">
	<div class="row">
		<div class="col-xs-2 col-ls-2 col-md-2 col-lg-2" id="border">
			<p>exercice 1</p>
			<?php 
				$nom = 'jean';
				echo $nom;
			?>
		</div>
		<div class="col-xs-2 col-ls-2 col-md-2 col-lg-2" id="border">
			<p>exercice 2</p>

			<?php
				$nom = 'jean';
				$prenom = 'valjean';
				$age = '42';

				echo 'nom : '.$nom.'<br> prenom : '.$prenom.' <br>age : '.$age;
			?>
		</div>
		<div class="col-xs-2 col-ls-2 col-md-2 col-lg-2" id="border">
			<p>exercice 3</p>

			<?php 
			 $kilometre = 1;
			 	echo 'kilometre : '.$kilometre.'<br>';

			 $kilometre = 3;
			 	echo 'kilometre : '.$kilometre.'<br>';

			 $kilometre = 125;
			 	echo 'kilometre : '.$kilometre.'<br>';
			?>
		</div>
		<div class="col-xs-2 col-ls-2 col-md-2 col-lg-2" id="border">
			<p>exercice 4</p>

			<?php 
				$bool = true;
				$string = 'mot';
				$int = 42;
				$float = 3.3;

				echo 'Boolean : '.$bool.'<br> string : '.$string.'<br> int : '.$int.'<br> float : '.$float;
			?>
		</div>
		<div class="col-xs-2 col-ls-2 col-md-2 col-lg-2" id="border">
			<p>exercice 5</p>

			<?php
				$entier = (int)null;
					echo 'int vaut : '.$entier;
				$entier = 10;
					echo '<br>maintenant int :'.$entier;
			?>
		</div>
		<div class="col-xs-2 col-ls-2 col-md-2 col-lg-2" id="border">
			<p>exercice 6</p>

			<?php
				$Nom = 'jean';
					echo 'Bonjour '.$Nom.', comment vas-tu ?';
			?>
		</div>
</body>
</html>
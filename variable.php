<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<p style="color:red;">exercice 1</p>
<?php 
	$nom = 'jean';
	echo $nom;
?>

<br><br><p>exercice 2</p>

<?php
	$nom = 'jean';
	$prenom = 'valjean';
	$age = '42';

	echo 'nom : '.$nom.'<br> prenom : '.$prenom.' <br>age : '.$age;
?>

<br><br><p>exercice 3</p>

<?php 
 $kilometre = 1;
 	echo 'kilometre : '.$kilometre.'<br>';

 $kilometre = 3;
 	echo 'kilometre : '.$kilometre.'<br>';

 $kilometre = 125;
 	echo 'kilometre : '.$kilometre.'<br>';
?>

<br><br><p>exercice 4</p>

<?php 
	$bool = true;
	$string = 'mot';
	$int = 42;
	$float = 3.3;

	echo 'Boolean : '.$bool.'<br> string : '.$string.'<br> int : '.$int.'<br> float : '.$float;
?>

<br><br><p>exercice 5</p>

<?php
	$entier = (int)null;
		echo 'int vaut : '.$entier;
	$entier = 10;
		echo '<br>maintenant int :'.$entier;
?>

<br><br><p>exercice 6</p>

<?php
	$Nom = 'jean';
		echo 'Bonjour '.$Nom.', comment vas-tu ?';
?>
</body>
</html>
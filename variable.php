<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<p style="color:red;">exercice 1</p>
<?php 
	$nom = 'jean';
	echo $nom;
?>

<br><br><p style="color:red;">exercice 2</p>

<?php
	$nom = 'jean';
	$prenom = 'valjean';
	$age = '42';

	echo 'nom : '.$nom.'<br> prenom : '.$prenom.' <br>age : '.$age;
?>

<br><br><p style="color:red;">exercice 3</p>

<?php 
 $kilometre = 1;
 	echo 'kilometre : '.$kilometre.'<br>';

 $kilometre = 3;
 	echo 'kilometre : '.$kilometre.'<br>';

 $kilometre = 125;
 	echo 'kilometre : '.$kilometre.'<br>';

?>

<br><br><p style="color:red;">exercice 4</p>

<?php 
	$bool = true;
	$string = 'mot';
	$int = 42;
	$float = 3.3;

	echo 'Boolean : '.$bool.'<br> string : '.$string.'<br> int : '.$int.'<br> float : '?$float;
?>
</body>
</html>
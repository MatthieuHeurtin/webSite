<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Matt's website</title>
  <link rel="stylesheet" href="./CSS/style.css">
</head>
<body>
<!-- body-->
<span class="corps">


	<!-- HEADER-->
	<span class="header">
	
	</span>
	<!-- inside_crops-->
	<span class="inside_corps" > 


<p>
	Hi,<br/>
	You currently are on my personal server. <br/>
	The purspose of this page is to show that I am able to manage an Apache Server.
<?php
$filename = "/home/matt-admin/webSite/compteur.txt";
$compteur = file_exists($filename) ? file_get_contents($filename) + 1 : 1;
file_put_contents($filename, $compteur, LOCK_EX);
echo "Number of Visitor " $compteur;


?>

</p> 




	</span>
	<!--FOOT-->
	<span class="foot">

		<p>I am the foot</p>
	</span>

</span>
</body>
</html>

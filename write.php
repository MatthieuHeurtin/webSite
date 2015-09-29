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
<script>
	alert('Thank you for your message. You are going to be redirected to the main page')
	document.location.href="index.php"
</script>


<?php 



	$data = sprintf("%s %s\n", $_POST['name'], $_POST['comment']);
	file_put_contents('/home/matt-admin/webSite/message', '==NEW MESSAGE==	', FILE_APPEND);
	file_put_contents('/home/matt-admin/webSite/message', $data, FILE_APPEND);

?>
</p>





	</span>
	<!--FOOT-->
	<span class="foot">

		<p>	You are, currently, on my personal server. <br/>
	The purspose of this page is to show that I have basic knowledge about an Apache Server. <br/>
	<br/></p>
	</span>

</span>
</body>
</html>

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
	You are, currently, on my personal server. <br/>
	The purspose of this page is to show that I am able to manage an Apache Server. <br/>

<?php
$filename = "/home/matt-admin/webSite/compteur.txt";
$compteur = file_exists($filename) ? file_get_contents($filename) + 1 : 1;
file_put_contents($filename, $compteur, LOCK_EX);
echo "Number of Visitor ";
echo  $compteur;


function getUserIP()
{
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];

    if(filter_var($client, FILTER_VALIDATE_IP))
    {
        $ip = $client;
    }
    elseif(filter_var($forward, FILTER_VALIDATE_IP))
    {
        $ip = $forward;
    }
    else
    {
        $ip = $remote;
    }

    return $ip;
}


$user_ip = getUserIP();




 
$date = date('l jS \of F Y h:i:s A');

$data = sprintf("%s %s %s\n", $compteur, $user_ip, $date);
file_put_contents('/home/matt-admin/webSite/infos', $data, FILE_APPEND);

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

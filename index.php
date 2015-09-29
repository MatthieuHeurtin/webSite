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
	First let me introduce myself, I am Matthieu Heurtin and I am currently living in France.
	I got my degree this year. It is a degree in computer sciences with a specialization in network and telecommunication.<br/>

	<h4>Zeus</h4>
	I have just finish a six months internship at Basingstoke (UK). This internship was a part of my formation.  During this 		internship I had to develop a IDE for Lua which is able to load C# DLL. This software is in C#.
	Feel you free to check my github account to have a little demo of what I did.<br/>
	<a href="https://github.com/Matttttttttttt/Zeus">Here</a><br/>

	<h4>Simeon</h4>
	Since the end of this internship, I am looking for a job, but also, on my free time I am working on Simeon a C project.<br/> 
	feel you free to check my <a href="https://github.com/Matttttttttttt/Simeon-">github</a> <br/> 


	I am also working on my own apache server on Ubuntu server, my website is <a href="http://matthieu-heurtin.no-ip.org/">here</a><br/>
	For the moment there is just one page.


	(Sorry for my english it is not my mother tongue)<br/>


		


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

		<p>	You are, currently, on my personal server. <br/>
	The purspose of this page is to show that I have basic knowledge about an Apache Server. <br/>
	<br/></p>
	</span>

</span>
</body>
</html>
